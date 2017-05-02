@extends('layouts.master')

@section('title')
    New usher
@endsection

@section('content')
    <div class='container-fluid'>
        <div class='row'>
            <div class='col-xs-12 form-title'>
                <h1>New usher</h1>
            </div>
        </div>
        <div class='row'>
            <div class='col-xs-12'>
                <form method='POST' class='form-horizontal' action='/usher/new'>
                    {{ csrf_field() }}

                    <div class='form-group'>
                        <label for='first_name' class='col-xs-2 control-label'>First name</label>
                        <div class='col-xs-10'>
                            <input type='text' class='form-control' name='first_name' id='first_name' size='50' value='{{ old('first_name') }}'>
                        </div>
                    </div>
                    <div class='form-group'>
                        <label for='last_name' class='col-xs-2 control-label'>Last Name</label>
                        <div class='col-xs-10'>
                            <input type='text' class='form-control' name='last_name' id='last_name' size='50' value='{{ old('last_name') }}'>
                        </div>
                    </div>
                    <div class='form-group'>
                        <label for='team' class='col-xs-2 control-label'>Team</label>
                        <div class='col-xs-10'>
                            <select name='team' class='form-control' id='team'>
                                <option value='Team 1' >Team 1</option>
                                <option value='Team 2' >Team 2</option>
                                <option value='Team 3' >Team 3</option>
                                <option value='Team 4' >Team 4</option>
                                <option value='Team 5' >Team 5</option>
                                <option value='Team 6' >Team 6</option>
                                <option value='unassigned' selected >unassigned</option>
                            </select>
                        </div>
                    </div>
                    <div class='form-group'>
                        <label for='capitan' class='col-xs-2 text-right'>Team Capitan</label>
                        <div class='col-xs-10'>
                            <input type='checkbox' name='capitan' id='capitan'> yes
                        </div>
                    </div>
                    <div class='form-group'>
                        <label for='email' class='col-xs-2 control-label'>Email</label>
                        <div class='col-xs-10'>
                            <input type='text' class='form-control' name='email' id='email' value='{{ old('email') }}'>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col-xs-6 text-center'>
                            <input type='submit' class='btn btn-primary' name='save_button' value='Save changes'>
                            <input type='submit' class='btn btn-default' name='cancel_button' value='Cancel'>
                        </div>
                    </div>
                </form>

                @if(count($errors) > 0)
                    <div class="row">
                        <div class="col-xs-2"></div>
                        <div class="col-xs-3 alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>

@endsection