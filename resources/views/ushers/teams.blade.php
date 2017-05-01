@extends('layouts.master')

@section('title')
    Ushering Teams
@endsection

@section('content')

    <div class='container-fluid'>
        <h1>Ushering Teams</h1>

        <table class='table table-striped table-hover'>
            <tr>
                <th class='columnhide'>ID</th>
                <th>Team</th>
                <th>Team Capitan?</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Modify</th>
            </tr>
            @foreach($ushers as $usher)
                <tr>
                    <td class='columnhide'>{{ $usher['id'] }}</td>
                    <td>{{ $usher['team'] }}</td>
                    <td>
                        @if($usher['capitan'] === 1)
                            yes
                        @else
                            no
                        @endif
                    </td>
                    <td>{{ $usher['first_name'] }}</td>
                    <td>{{ $usher['last_name'] }}</td>
                    <td>{{ $usher['email'] }}</td>
                    <td><a href='/ushers/edit/{{ $usher['id'] }}'>edit/delete</a></td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
