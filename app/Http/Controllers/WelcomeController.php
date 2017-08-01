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
        return view('welcome');
    }

    public function ajaxsearch(Request $request)
    {
        $query = Instructor::documento($request->get('documento'))->limit(1)->get();
        return view('instructors.ajax')
            ->with('data', $query);
    }
}
