@extends('layouts.master')

@section('title')
    Edit usher: {{ $usher->first_name }} {{ $usher->last_name }}
@endsection

@section('content')
    <div class='container-fluid'>
        <div class='row'>
            <div class='col-sm-12 form-title'>
                <h1>Edit usher: <span id='usher'>{{ $usher->first_name }} {{ $usher->last_name }}</span></h1>
            </div>
        </div>
        <div class='row'>
            <div class='col-sm-12'>
                <form method='POST' class='form-horizontal' action='/usher/edit'>
                    {{ csrf_field() }}
                    <input type='hidden' name='id' value='{{ $usher->id }}'>

                    <div class='form-group'>
                        <label for='first_name' class='col-sm-2 control-label'>First name</label>
                        <div class='col-sm-10'>
                            <input type='text' class='form-control' name='first_name' id='first_name' size='50' value='{{ old('first_name', $usher->first_name) }}'>
                        </div>
                    </div>
                    <div class='form-group'>
                        <label for='last_name' class='col-sm-2 control-label'>Last Name</label>
                        <div class='col-sm-10'>
                            <input type='text' class='form-control' name='last_name' id='last_name' size='50' value='{{ old('last_name', $usher->last_name) }}'>
                        </div>
                    </div>
                    <div class='form-group'>
                        <label for='team' class='col-sm-2 control-label'>Team</label>
                        <div class='col-sm-10'>
                            <input type='text' class='form-control' name='team' id='team' value='{{ old('team', $usher->team) }}'>
                        </div>
                    </div>
                    <div class='form-group'>
                        <label for='capitan' class='col-sm-2 text-right'>Team Capitan</label>
                        <div class='col-sm-10'>
                            <input type='checkbox' name='capitan' id='capitan' {{ ($usher->capitan === 1) ? 'CHECKED' : '' }}> yes
                        </div>
                    </div>
                    <div class='form-group'>
                        <label for='email' class='col-sm-2 control-label'>Email</label>
                        <div class='col-sm-10'>
                            <input type='email' class='form-control' name='email' id='email' value='{{ old('email', $usher->email) }}'>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col-sm-6 text-center'>
                            <input type='submit' class='btn btn-primary' name='update_button' value='Save changes'>
                            <input type='submit' class='btn btn-default' name='cancel_button' value='Cancel'>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col-sm-6 text-center'>
                            <input type='submit' class='btn btn-danger delete_button' name='delete_button'value='Delete usher'>
                        </div>
                    </div>
                </form>

                @if(count($errors) > 0)
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif
            </div>
        </div>
    </div>

@endsection
