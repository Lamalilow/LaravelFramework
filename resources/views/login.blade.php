@extends('index')


@section('content')
<form action="{{ route('login') }}" method="post" >

        @if(session()->has('errorSuccess'))
            <h3>{{ session()->get('errorSuccess' )}}</h3>
        @endif
        @csrf
        <input type="email" name="email" placeholder="Ваша почта"><br>
        @error('email')<p>{{ $message }}</p>@enderror
        <input type="password" name="password" placeholder="Ваш пароль"><br>
        @error('password')<p>{{ $message }}</p>@enderror
        <input type="submit" value="Войти">
    </form>
@endsection

