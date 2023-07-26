<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RedirectAuthenticatedUsersController extends Controller
{
    public function home()
    {
        if (auth()->user()->role == 'superadmin') {
            return redirect('/superadminhome');
        }
        elseif(auth()->user()->role == 'admin'){
            return redirect('/adminhome');
        }
        elseif(auth()->user()->role == 'user'){
            return redirect('/userhome');
        }
        elseif(auth()->user()->role == 'parent'){
            return redirect('/parenthome');
        }
        else{
            return auth()->logout();
        }
    }
}
