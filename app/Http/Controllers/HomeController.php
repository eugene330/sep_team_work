<?php

namespace App\Http\Controllers;
use App\Group;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $groups_students = Auth::user()->groupsStudent;
        $groups_teacher = Auth::user()->groupsTeacher;
        return view('home', ['groups_teacher' => $groups_teacher, 'groups_students' => $groups_students]);
    }
}
