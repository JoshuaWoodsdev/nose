<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    public function show($id)
    {
        $user = User::findOrFail($id);

        //return a view
        return view('userprofile.show', compact('user'));
    }
}
