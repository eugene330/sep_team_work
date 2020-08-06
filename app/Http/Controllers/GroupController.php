<?php

namespace App\Http\Controllers;

use App\Group;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class GroupController extends Controller
{
    protected  $user;

    public function __construct()
    {
        $this->middleware('auth');
        $this->user = Auth::user();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("groups.create_group");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
        ]);

        Auth::user()
            ->groupsTeacher()
            ->create(
                [
                    'name' => $request->name,
                    'invite'=>str_random(),
                ]); //конструктор запроса!!! с уловием user_id текушего пользователя
                return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function invite($hash, Group $group)
    {
        if(Auth::user()) {
            $invite = $group->get()->pluck('invite')->toArray();
            $id = $group->get()->pluck('id','invite')->toArray();
            if(in_array($hash, $invite)) {
                DB::table('groups_students')->insert(
                    ['group_id' => $id[$hash], 'student_user_id' => Auth::user()->id]
                );
                return redirect('home');
            }
        }
    }
}
