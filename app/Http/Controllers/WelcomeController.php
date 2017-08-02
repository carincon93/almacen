<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Instructor;
use App\Classroom;

class WelcomeController extends Controller
{
    /**
     * Display welcome view.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataClassroom = Classroom::all();
        return view('welcome')->with('dataClassroom', $dataClassroom);
    }
}
