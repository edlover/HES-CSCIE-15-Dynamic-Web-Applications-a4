@extends('layouts.master')

@section('title')
    Services
@endsection

@section('content')

    <div class='container-fluid'>
        <h1>Services</h1>

        <table class='table table-striped table-hover'>
            <tr>
                <th class='columnhide'>ID</th>
                <th>Date</th>
                <th>Time</th>
                <th>Service Name</th>
                <th>Usher Team</th>
                <th>Modify</th>
            </tr>
            @foreach($services as $service)
                <tr>
                    <td class='columnhide'>{{ $service['id'] }}</td>
                    <td>{{ $service['date'] }}</td>
                    <td>{{ $service['time'] }}</td>
                    <td>{{ $service['name'] }}</td>
                    <td>
                        @if(!($service['team_id'] == 6))
                            Team {{ $service['team_id'] }}</td>
                        @else
                            Unassigned
                        @endif
                    <td><a href='/service/edit/{{ $service['id'] }}'>edit/delete</a></td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
