<?php

namespace ayazdev\Bakhti\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        config('bakhti.prefix');
        return view('bakhti::home');
    }

    public function send(Request $request)
    {
        return 'data posting..';
    }
}
