@extends('layouts.master')

@section('title')
    Ushering Teams
@endsection

@section('content')

    <h1>Ushering Teams</h1>

    <table>
        <tr>
            <th>ID</th>
            <th>First</th>
            <th>Last</th>
            <th>Team</th>
            <th>Capitan?</th>
            <th>email</th>
        </tr>
        @foreach($ushers as $usher)
            <tr>
                <td>{{ $usher['id'] }}<td>
                <td>{{ $usher['team'] }}</td>
                <td>{{ $usher['capitan'] }}</td>
                <td>{{ $usher['first_name'] }}</td>
                <td>{{ $usher['last_name'] }}</td>
                <td>{{ $usher['email'] }}</td>
                <td><a href='/ushers/edit/{{ $usher['id'] }}'>edit/delete</a></td>
            </tr>
        @endforeach
    </table>

@endsection
