<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\StoreSigninRequest;
use App\Models\User;
use Illuminate\Http\Request;

class SigninController extends Controller
{
    public function create(){
        return view('auth.signin');
    }

    public function store(StoreSigninRequest $request){
        // After validation
        // Send crediting to match with database
        if (auth()->attempt($request->only('email', 'password'))) {
            return redirect()->route('home');
        } else {
            return back()->with('status', 'Invalid login details.');
        }
    }
}
