<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function login(){
        $response = Http::post('');
    }
}
