<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\User;

class AuthController extends Controller
{

    public function login() {
        return view('login', [
            "title" => "Note APP | Login",
        ]);
    }

    public function register() {
        return view('register', [
            "title" => "Note APP | Register",
        ]);
    }

    public function store(Request $req) {
        $dataValid = $req->validate([
            "name" => ["required", "max:20"],
            "email" => "required|unique:users|email",
            "password" => "min:8"
        ]);

        $dataValid['password'] = bcrypt($dataValid['password']);

        User::create($dataValid);
        // $req->session()->flash('status', 'Register berhasil!');
        return redirect()->route('login')->with('status', 'Register berhasil!');
    }

}
