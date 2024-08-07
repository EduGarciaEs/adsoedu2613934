<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'document' => ['required', 'numeric', 'unique:'.User::class],
            'fullname' => ['required', 'string', 'max:64'],
            'gender' => ['required'],
            'birthdate' => ['required', 'date'],/* 
            'photo' => ['required', 'image'], */
            'phone' => ['required'],
            'email' => ['required', 'string', 'lowercase', 'email', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'fullname'=> $request->fullname,
            'document'=> $request->document,
            'phone'=> $request->phone,
            'name' => $request->name,
            'birthdate'=>$request->birthdate,
            'gender'=> $request->gender,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'created_at'=> now(),
            'updated_at'=> now()   
        ]);    

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('dashboard', absolute: false));
    }
}
