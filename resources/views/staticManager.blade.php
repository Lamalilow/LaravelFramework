@extends('index')

@section('title', 'Страница статических данных')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col-6">
                <div class="card">
                    <div class="card-header">

                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Основная информация об сайте</h5>
                        <p class="card-text">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Название сайта</th>
                                <th scope="col">Адрес</th>
                                <th scope="col">Время работы</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th>{{$nameSite}}</th>
                                <td>{{$address}}</td>
                                <td>{{$time}}</td>
                            </tr>
                            </tbody>
                        </table>
                        </p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col"></div>
        </div>
    </div>
@endsection
