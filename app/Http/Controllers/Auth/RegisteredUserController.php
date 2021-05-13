<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'login'         => 'required|string|min:2|max:255|unique:users',
            'name'          => 'required|string|min:2|max:255',
            'surname'       => 'required|string|min:2|max:255',
            'patronymic'    => 'max:255',
            'email'         => 'required|string|email|max:255|unique:users',
            'password'      => 'required|string|confirmed|min:8',
        ]);

        $user = User::create([
            'login'         => $request->login,
            'name'          => $request->name,
            'surname'       => $request->surname ? $request->surname : null,
            'patronymic'    => $request->patronymic,
            'email'         => $request->email,
            'slug'          =>  $request->slug,
            'password'      => Hash::make($request->password),
        ]);

        $user->assignRole('USER');

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
