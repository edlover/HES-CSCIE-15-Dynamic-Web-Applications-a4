<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usher;
use Session;

class UsherSchedulerController extends Controller
{

    /**
    * GET
    * /teams
    *
    * this will display all teams
    */
    public function showTeams() {
        $ushers = Usher::orderBy('team')
            ->orderBy('capitan', 'desc')
            ->get();

        return view ('ushers.teams')->with([
            'ushers' => $ushers,
        ]);
    }

    /**
    * GET
    * /ushers/edit/{id}
    */
    public function usherEdit($id) {
        $usher = Usher::find($id);

        if(is_null($usher)) {
            Session::flash('message', 'That particular usher was not found.');
            return redirect('/teams');
        }

        return view('ushers.editUsher')->with([
            'id' => $id,
            'usher' => $usher,
        ]);

    }

    /**
    * POST
    * /ushers/edit
    */
    public function edit_or_delete_Usher(Request $request) {

        if (isset($_POST['delete_button'])) {
            // delete action
            $usher = Usher::find($request->id);

            # only delte if the $usher is not null
            if($usher) {
                $usher->delete();
                Session::flash('message', $usher->first_name.' '.$usher->last_name.' was removed from the usher list.');
            } else {
                Session::flash('message', 'That particular usher was not found.');
            }
            return redirect('/teams');

        } else if (isset($_POST['update_button'])) {
            // update action
            $this->validate($request, [
                'first_name' => 'required',
                'last_name' => 'required',
                'team' => 'required',
                'email' => 'required|email',
            ]);

            $usher = Usher::find($request->id);

            # only update if the $usher is not null
            if($usher) {
                # update user record in the database
                $usher->first_name = $request->first_name;
                $usher->last_name = $request->last_name;
                $usher->team = $request->team;
                $usher->capitan = $request->capitan;
                $usher->email = $request->email;
                $usher->save();

                Session::flash('message', $usher->first_name.' '.$usher->last_name.'\'s details were updated.');
            }
            return redirect('/ushers/edit/'.$request->id);
        }

    }

}
