@extends('layout')
@section('pageHeader')
    Add new
@endsection

@section('content')
    <div class="container">
        <div class="card m-4">
            <div class="card-header bg-white text-black text-center p-3">
                <h5 class="mb-0">Add New Activity</h5>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('activity.send') }}">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Activity Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter activity name">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea class="form-control" name="description" rows="3" placeholder="Describe more"></textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Duration (minutes)</label>
                        <input type="number" class="form-control" name="duration" placeholder="How long">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Date</label>
                        <input type="date" class="form-control" name="date">
                    </div>
                    <a href="{{ route('activity.all') }}" class="btn btn-secondary"><i class="fas fa-arrow-circle-left"></i> Back</a>
                    <button type="submit" class="btn btn-success center"><i class="fa-solid fa-plus"></i> Add</button>
                </form>
            </div>
        </div>
        </div>

@endsection
