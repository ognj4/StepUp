@extends('layout')
@section('pageHeader')
    Activities
@endsection

@section('pageContent')
    <div class="container">
        <div class="container col-6 p-3">
            <a href="" class="btn btn-success">Dodaj proizvod</a>
            <a href="" class="btn btn-success">Dodaj proizvod</a>
        </div>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Duration</th>
                <th scope="col">Date</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
                @foreach($allActivities as $activity)
                <tr>
                    <td>{{$activity->id}}</td>
                    <td>{{$activity->name}}</td>
                    <td>{{$activity->description}}</td>
                    <td>{{$activity->duration}} min</td>
                    <td>{{$activity->date}}</td>
                    <td>
{{--                        <a href="{{ route('products.delete',['product' => $product->id]) }}" class="btn btn-danger">Obrisi</a>--}}
{{--                        <a href="{{ route('products.single', ['product' => $product->id]) }}" class="btn btn-primary">Edituj</a>--}}
                        <a href="" class="btn btn-danger">Obrisi</a>
                        <a href="" class="btn btn-primary">Edituj</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
