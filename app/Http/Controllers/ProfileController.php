<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Inertia\Response;
use App\Models\User;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit()
    {
        $user_id=Auth::user()->id;
        $user=User::where('id','=',$user_id)->get();
            // dd($user);
        return Inertia::render('Users/Profile/edit',[
            'user'=>$user,
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update()
    {

    }

    /**
     * Delete the user's account.
     */
    public function destroy()
    {
       
    }
}
