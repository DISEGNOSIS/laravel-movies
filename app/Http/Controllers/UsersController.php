<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function update() {
       /*  $user = Auth::user;
        dd($user); */
        return view('editUser', /* compact('user') */);
    }
}
