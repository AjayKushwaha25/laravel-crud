<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PagesController extends Controller
{
    public function index()
    {
        $users = \DB::table('users')->get();
        return view('index', compact('users'));
    }
}
