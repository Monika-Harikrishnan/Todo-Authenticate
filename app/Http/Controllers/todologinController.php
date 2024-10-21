<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\todologin;

class todologinController extends Controller
{
    public function store(Request $request){
        $request->validate(
            [
                'email'=>'required',
                'password'=>'required',
            ]
            );
           $todo=new todologin;
           $todo->email=$request['email'];
           $todo->password=Hash::make($request['password']);
           $todo->save();

           return redirect(route("login"));
    }
    public function loginvalidate(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);
        $credentials = $request->only('email', 'password');
        $user = todologin::where('email', $credentials['email'])->first();
        if (!$user) {
            return redirect()->back()->withErrors(['email_error' => 'The email does not exist in our records.']);
        }
        if (Hash::check($request->password, $user->password)) {
           Auth::login($user) ;
         return redirect()->intended('homepage');
        } else {
            return redirect()->back()->withErrors(['password_error' => 'The password is incorrect or minimum 8 letters.']);
        }
    }
    //edit page for login page
    public function profileedit(Request $request){
        $id=auth()->id();
        $todo=todologin::find($id);
        $data=compact('todo');
        return view("profile")->with($data);
    }
    //update profile
    public function profileupdate(Request $request)
    {
        // Validate the request
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);
        $id = auth()->id();
        $todo = todologin::find($id);
        $todo->email = $request->input('email');
        $todo->password = bcrypt($request->input('password'));
        $todo->save();
        return redirect(route('homepage'));
    }

}
