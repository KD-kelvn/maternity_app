<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChattController extends Controller
{
    //
    public function index()
    {
        return view('Users.chat.index');
    }

    public function create()
    {
        return view('Users.chat.create');
    }
}
