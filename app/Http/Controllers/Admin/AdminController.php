<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Inertia\Response;
use App\Models\Flashcard;
use App\Models\Category;
use App\Models\Pronounciation;
use App\Models\Quiz;
use App\Models\User;
use DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function dashboard(Request $request)
    {
        // $total_students= User::where('role', '=' ,'user')->count();
        // $parents= User::where('role','=','parent')->count();
        // $categories= Category::select('*')->count();
        // $flashcard= Flashcard::select('*')->count();
        // $quiz= Quiz::select('*')->count();
        // $voice= Pronounciation::select('*')->count();
        // $liststudents= User::where('role','=','user')->where('account_status','=',null)->where('student_status','=',null)->paginate(12);

        return Inertia::render('Admin/dashboard');
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $id=Auth::user()->id;
        if($request->image == ""){
            $request->validate([
                'name' => 'required',
                'email' => 'required',
            ]);
    
    
                $profile = DB::table('users')
                  ->where('id', $id)
                  ->update(
                      [ 
                        'name' => $request->name,
                        'email' => $request->email,
                    ]);
    
            if ($profile) {
                $successmessage = 'Updated Successsfully';
                return redirect()->route('admin.home')->with('successmessage',$successmessage);
                   }
        }else{
         $request->validate([
             'name' => 'required',
             'email' => 'required',
         ]);
 
         $profile_image = time() . '-' . $request->file('image')->getClientOriginalName() . '.' . $request->file('image')->extension();
         $request->file('image')->move(public_path('img/profile-img/'), $profile_image);
              $profile = DB::table('users')
               ->where('id', $id)
               ->update(
                   [ 
                     'name' => $request->name,
                     'email' => $request->email,
                     'profile_image' =>$profile_image,
                  
                 ]);
 
         if ($profile) {
            $successmessage = 'Updated Successsfully';
            return redirect()->route('admin.home')->with('successmessage',$successmessage);
            }
            else{
         
                    return back();
                }
 
         }

         return back();
        //
    }

    /**
     * Display the specified resource.
     */
    public function storepass(Request $request)
    {
        $request->validate([
            'password' =>'required',
        ]);

        $profile = DB::table('users')
              ->where('id', $id)
              ->update(
                  [ 
                    'password' => Hash::make($request->password),
                 
                ]);

        if ($profile) {
            return redirect()->route('admin.home');
               }
               else{
        
                   return back();
               }

        
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        $user_id=Auth::user()->id;
        $user=User::where('id','=',$user_id)->get();
            // dd($user);
        return Inertia::render('Admin/Profile/edit',[
            'user'=>$user,
        ]);
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
