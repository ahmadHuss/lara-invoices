<?php

namespace App\Http\Controllers\Auth;

use App\Http\Requests\Auth\StoreSignupRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use Illuminate\Http\Request;


class SignupController extends Controller
{
    public function create() {
        return view('auth.signup');
    }

    public function store(StoreSignupRequest $request) {
      // After request validation create the field
       User::create([
          'name' => $request->name,
          'email' => $request->email,
           'password' => Hash::make($request->password)
       ]);
       // Attempt the user to sigin-in directly
        auth()->attempt($request->only('email', 'password'));
        // Redirect back to the home
        return redirect()->route('home');
    }
}
