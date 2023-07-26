<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Inertia\Inertia;
use Inertia\Response;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): Response
    {
        return Inertia::render('Auth/Register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
        $role='user';
        $user = User::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'role' => $role,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        if($user){
            $successmessage = 'Great!,Acccount Created Successfully. A confirmation mail will be sent shortly';
            return redirect('login')->with('successmessage',$successmessage);
        }
        else{
            $errormessage = '!Error, Something went wrong. Please try again';
            return redirect()->back()->with('errormessage',$errormessage);

        }

        // event(new Registered($user));

        // Auth::login($user);

        // return redirect(RouteServiceProvider::HOME);
    }
}
