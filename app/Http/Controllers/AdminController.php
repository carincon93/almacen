<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Historical_record;

class AdminController extends Controller
{
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
        return view('admin');
    }

    public function historial_prestamos() {
        $Historical_record = Historical_record::orderBy('id', 'ASC')->paginate(10);
        return view('historical')->with('Historical_record', $Historical_record);
    }
}
