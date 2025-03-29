@php use Carbon\Carbon; @endphp
@extends('layout')
@section('pageHeader')
    Activities
@endsection

@section('content')
    <div class="container">

        <div class="container p-3 d-flex justify-content-between align-items-center">
            <a href="{{ route('activity.create') }}" class="btn btn-success"><i class="fa-solid fa-plus"></i> Add activity</a>

            <div class="dropdown">
                <a class="btn btn-secondary dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true">
                    <i class="fa-solid fa-filter"></i> Sort
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Date <i class="fa-solid fa-arrow-up"></i></a>
                    <a class="dropdown-item" href="#">Duration <i class="fa-solid fa-arrow-up"></i></a>
                    <a class="dropdown-item" href="#">Date <i class="fa-solid fa-arrow-down"></i></a>
                    <a class="dropdown-item" href="#">Duration <i class="fa-solid fa-arrow-down"></i></a>
                </div>
            </div>

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
                        {{ Carbon::parse($activity->date)->format('d.M h:m') }}
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
