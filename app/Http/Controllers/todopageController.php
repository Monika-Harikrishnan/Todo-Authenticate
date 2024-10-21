<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\todolistpage;
use Illuminate\Support\Facades\Auth;

class todopageController extends Controller
{
    //display all details in dashboard page
    public function index() {
    $userId = auth()->id();
    // $todolistpage = todolistpage::where('user_id', $userId)->get();
    $todolistpage = Todolistpage::where('user_id', $userId)->simplePaginate(5);
    return view('dashboard', compact('todolistpage'));
    }
    //store details from create page
    public function createtodo(Request $request){
        $request->validate(
            [
                'work'=>'required',
                'due_date'=>'required'
            ]
            );
            $todo = new todolistpage;
            $todo->user_id = auth()->id();
            $todo->work = $request['work'];
            $todo->due_date = $request['due_date'];
            try {
                $todo->save();
                return redirect()->route("dashboard")->with('success', 'Todo created successfully!');
            } catch (\Exception $e) {
                return redirect()->back()->withErrors(['db_error' => 'Failed to save todo: ' . $e->getMessage()]);
            }
        }
        //edit page
        public function pageedit($id){
            $todo=todolistpage::find($id);
            $data=compact('todo');
            return view("updatepage")->with($data);
        }
        //update
        public function pageupdate(Request $request){
            $request->validate(
                [
                    'work'=>'required',
                    'due_date'=>'required'
                ]
                );
                $id=$request['id'];
               $todo=todolistpage::find($id);
               $todo->work=$request['work'];
               $todo->due_date=$request['due_date'];
               $todo->save();

               return redirect(route("dashboard"));
        }
        //delete
        public function pagedelete($id){
            todolistpage::find($id)->delete();
            return redirect(route("dashboard"));
        }

        //logout
        public function pagelogout(Request $request) {
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return redirect()->route('login')->with('success', 'You have been logged out.');
        }
}
