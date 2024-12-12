<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function edit()
    {
        return view('auth.profile.edit', [
            'user' => auth()->user(),
        ]);
    }

}
