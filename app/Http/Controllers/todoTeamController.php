<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TeamMember;
use Illuminate\Support\Facades\Auth;

class todoTeamController extends Controller
{
    //display all details in dashboard page for changes
    public function index() {
    $userId = auth()->id();
    $team = TeamMember::where('user_id', $userId)->simplePaginate(5);
    return view('teams.dashboardmember', compact('team'));
    }

    //store details from create page
    public function createteam(Request $request){
        app('log')->info(print_r($request->all(), true));
        $request->validate(
            [
                'first_name'=>'required',
                'last_name'=>'required',
            ]
            );
            $team = new TeamMember;
            $team->user_id = auth()->id();
            $team->first_name = $request['first_name'];
            $team->last_name = $request['last_name'];
            $team->active = 1;
            try {

                $team->save();
                return redirect()->route("dashboardmember")->with('success', 'Team Members created successfully!');
            }
            catch (\Exception $e) {
                \Log::error('Failed to save Team Member: ' . $e->getMessage());
                return redirect()->back()->withErrors(['db_error' => 'Failed to save todo: ' . $e->getMessage()]);
            }
        }

        //edit page
        public function editteam($id){
            $team=TeamMember::find($id);
            $data=compact('team');
            return view("teams.updatemember")->with($data);
        }
        //update
        public function updateteam(Request $request){
            $request->validate(
                [
                    'first_name'=>'required',
                    'last_name'=>'required',
                ]
                );
                $id=$request['id'];
               $team=TeamMember::find($id);
               $team->first_name=$request['first_name'];
               $team->last_name=$request['last_name'];
               $team->active=$request['active'];
               $team->save();

               return redirect(route("dashboardmember"));
        }
        //delete
        public function deleteteam($id){
            TeamMember::find($id)->delete();
            return redirect(route("dashboardmember"));
        }
}
