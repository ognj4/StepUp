@php use Carbon\Carbon; @endphp
@extends('layout')
@section('pageHeader')
    Training
@endsection

@section('content')
    <div class="container mt-5">
        <div class="card shadow-lg p-4">
            <h2 class="text-center">{{ $activity->name }}</h2>
            <p class="text-muted text-center">Date: {{ Carbon::parse($activity->date)->format('d.m.Y') }}
            </p>

            <div class="mt-4">
                <h5>Description:</h5>
                <p>{{ $activity->description }}</p>
            </div>

            <div class="mt-3">
                <h5>Duration:</h5>
                <p class="badge bg-primary fs-6">{{ $activity->duration }} min</p>
            </div>

            <div class="d-flex justify-content-between mt-3">
                <a href="{{ route('activity.all') }}" class="btn btn-secondary">Back</a>
                <a href="{{ route('activity.delete',['activity' => $activity->id]) }}" class="btn btn-danger">Delete</a>
            </div>
        </div>
    </div>
@endsection
