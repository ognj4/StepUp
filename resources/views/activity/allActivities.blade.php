@php use Carbon\Carbon; @endphp
@extends('layout')
@section('pageHeader')
    Activities
@endsection

@section('content')
    <div class="container">
        <div class="p-3">
            <a href="" class="col-3 btn btn-success">Add activity</a>
        </div>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Date</th>
                <th scope="col">Duration</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($allActivities as $activity)
                <tr>
                    <td>{{$activity->id}}</td>
                    <td>{{$activity->name}}</td>
                    <td>{{$activity->description}}</td>
                    <td>
                        {{ Carbon::parse($activity->date)->format('d.M') }} -
                        {{ Carbon::parse($activity->date)->format('h:m') }}
                    </td>
                    <td>{{$activity->duration}} min</td>

                    <td>
                        <a href="{{ route('activity.permalink', ['activity' => $activity->id]) }}"
                           class="btn btn-primary">View</a>

                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
