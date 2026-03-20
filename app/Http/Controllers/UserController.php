<?php

namespace App\Http\Controllers;

use App\Models\Record;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $records = Record::all();
        return view('user.dashboard', compact('records'));
    }
}