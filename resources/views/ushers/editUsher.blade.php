@extends('layouts.master')

@section('title')
    Edit usher: {{ $usher->first_name }} {{ $usher->last_name }}
@endsection

@section('content')
    <h1>Edit usher: {{ $usher->first_name }} {{ $usher->last_name }}</h1>

    <form method='POST' action='/usher/edit'>
        {{ csrf_field() }}

        <input type='hidden' name='id' value='{{ $usher->id }}'>

        <label for='first_name'>First name</label>
        <input type='text' name='first_name' id='first_name' value='{{ old('first_name', $usher->first_name) }}'>

        <label for='last_name'>Last Name</label>
        <input type='text' name='last_name' id='last_name' value='{{ old('last_name', $usher->last_name) }}'>

        <label for='team'>Team</label>
        <input type='text' name='team' id='team' value='{{ old('team', $usher->team) }}'>

        <label for='capitan'>Capitan</label>
        <input type='text' name='capitan' id='capitan' value='{{ old('capitan', $usher->capitan) }}'>

        <label for='email'>Email</label>
        <input type='text' name='email' id='email' value='{{ old('email', $usher->email) }}'>
        <br>

        <input type='submit' name='update_button' value='Save changes'>
        <input type='submit' name='delete_button'value='Delete'>
    </form>

    @if(count($errors) > 0)
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

@endsection
