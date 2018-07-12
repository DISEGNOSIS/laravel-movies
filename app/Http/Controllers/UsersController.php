<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class UsersController extends Controller
{
    public function update() {
        $user = Auth::user();
        return view('editUser', compact('user'));
    }
}
