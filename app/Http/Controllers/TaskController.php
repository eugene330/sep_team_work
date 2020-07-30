<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Group;
use App\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Group $group)
    {
        $arrayStudents = $group->students->pluck('id')->toArray();
        $arrayTeacher = $group->teacher_user_id;

        if ($arrayTeacher === Auth::user()->id || in_array(Auth::user()->id, $arrayStudents)) {
            $tasks = $group->tasks;
            return view('groups.show_group', ['tasks' => $tasks]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("tasks.create_task");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:255',
            'text' => 'required|max:255',
        ]);

        Task::
            create(
                [
                    'title' => $request->title,
                    'text' => $request->text,
                    'finish_date' => $request->finish_date,
                ]);
        return redirect()->route('home');
        dd($request);
//        new Task(array(
//            'title' => $request->title,
//            'text' => $request->text,
//        ));
//        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task, Answer $answer)
    {

        if($task->teacher_user_id === Auth::user()->id) {
            return view('tasks.show_task', ['tasks' => $task]);
        }else {
            for ($i = 0; $i <= DB::table('groups_students')->count()-1; $i++)
            {
                if($task->group_id === DB::table('groups_students')->get()[$i]->group_id &&
                    DB::table('groups_students')->get()[$i]->student_user_id === Auth::user()->id) {
                    return view('tasks.show_task', ['tasks' => $task]);
                    break;
                }
            }
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
