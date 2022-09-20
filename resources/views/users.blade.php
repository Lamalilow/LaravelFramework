@extends('index')

@section('title', 'Пользователи')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Login</th>
            <th scope="col">Address</th>
            <th scope="col">Age</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th>{{$users->id}}</th>
            <th>{{$users->name}}</th>
            <th>{{$users->login}}</th>
            <th>{{$users->address}}</th>
            <th>{{$users->age}}</th>
        </tr>
        </tbody>
    </table>
@endsection
