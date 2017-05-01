<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usher;
use App\Service;
use App\Team;
use Session;

class UsherSchedulerController extends Controller
{
    /**
    * GET
    * /
    *
    * this will display all services
    */
    public function showServices() {
        $services = Service::orderBy('date')->get();

        return view ('ushers.services')->with([
            'services' => $services,
        ]);
    }

    /**
    * GET
    * /service/new
    *
    * this will prompt the user for information to create new usher
    */
    public function newService(Request $request) {
        return view('ushers.newService');
    }

    /**
    * POST
    * /service/new
    *
    * this will save the new usher in the databas
    */
    public function saveService(Request $request) {

        if (isset($_POST['save_button'])) {
            $this->validate($request, [
                'date' => 'required|date',
                'time' => 'required',
                'team' => 'required',
            ]);

            # update record in the database
            $service = new Service();
            $service->date = $request->date;
            $service->time = $request->time;
            $service->name = $request->name;
            $service->team_id = $request->team;
            $service->save();

            Session::flash('message', 'The service was added.');
        } else { # the user clicked the cancel button
            return redirect('/');
        }
        return redirect('/');
    }

    /**
    * GET
    * /service/edit/{id}
    */
    public function serviceEdit($id) {
        $service = Service::find($id);

        if(is_null($service)) {
            Session::flash('message', 'That particular service was not found.');
            return redirect('/');
        }

        return view('ushers.editService')->with([
            'id' => $id,
            'service' => $service,
        ]);
    }

    /**
    * POST
    * /service/edit
    */
    public function edit_or_delete_Service(Request $request) {

        if (isset($_POST['delete_button'])) {
            # delete action
            $service = Service::find($request->id);

            # only delete if the $service is not null
            if($service) {
                $service->delete();
                Session::flash('message', 'The service was removed');
            } else {
                Session::flash('message', 'That particular service was not found.');
            }

        } else if (isset($_POST['update_button'])) {
            # update action
            $this->validate($request, [
                'date' => 'required|date',
                'time' => 'required',
                'team' => 'required',
            ]);

            $service = Service::find($request->id);

            # only update if the $service is not null
            if($service) {
                # update record in the database
                $service->date = $request->date;
                $service->time = $request->time;
                $service->name = $request->name;
                $service->team_id = $request->team;
                $service->save();

                Session::flash('message', 'The service details were updated.');
            }
        } else { # the user clicked the cancel button
            return redirect('/');
        }
        return redirect('/');
    }


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
            # delete action
            $usher = Usher::find($request->id);

            # only delte if the $usher is not null
            if($usher) {
                $usher->delete();
                Session::flash('message', $usher->first_name.' '.$usher->last_name.' was removed from the usher list.');
            } else {
                Session::flash('message', 'That particular usher was not found.');
            }

        } else if (isset($_POST['update_button'])) {
            # update action
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
                if($request->capitan == 'on') {
                    $usher->capitan = 1;
                } else {
                    $usher->capitan = 0;
                }
                $usher->email = $request->email;
                $usher->save();

                Session::flash('message', $usher->first_name.' '.$usher->last_name.'\'s details were updated.');
            }
        } else { # the user clicked the cancel button
            return redirect('/teams');
        }
        return redirect('/teams');
    }

    /**
    * GET
    * /usher/new
    *
    * this will prompt the user for information to create new usher
    */
    public function newUsher(Request $request) {
        return view('ushers.newUsher');
    }

    /**
    * POST
    * /usher/new
    *
    * this will save the new usher in the databas
    */
    public function saveUsher(Request $request) {

        if (isset($_POST['save_button'])) {
            $this->validate($request, [
                'first_name' => 'required',
                'last_name' => 'required',
                'team' => 'required',
                'email' => 'required|email',
            ]);

            # update user record in the database
            $usher = new Usher();
            $usher->first_name = $request->first_name;
            $usher->last_name = $request->last_name;
            $usher->team = $request->team;
            if($request->capitan == 'on') {
                $usher->capitan = 1;
            } else {
                $usher->capitan = 0;
            }
            $usher->email = $request->email;
            $usher->save();

            Session::flash('message', $usher->first_name.' '.$usher->last_name.' was added to the usher list.');
        } else { # the user clicked the cancel button
            return redirect('/teams');
        }
        return redirect('/teams');
    }

}
