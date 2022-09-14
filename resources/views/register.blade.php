@extends('index')
@section('title', 'Страница регистрации')
@section('content')
    <div class="container p-4">
        <div class="row">
            <div class="col"></div>
            <div class="col-6">
                <form action="{{ route('register') }}" method="post" >
                    @if(session()->has('success'))
                        <h3>Операции регистрации успешно выполнена</h3>
                    @endif
                    @csrf
                        <div class="mb-3">
                            <label for="inputFullName" class="form-label">Ваше имя</label>
                            <input type="text"
                                   class="form-control @error('fullName')is-invalid@enderror"
                                   id="inputFullName"
                                   name="fullName">
                        </div>
                        <div class="mb-3">
                            <label for="inputEmail" class="form-label">Ваша почта</label>
                            <input type="email"
                                   class="form-control @error('email')is-invalid@enderror"
                                   id="inputEmail"
                                   name="email">
                        </div>
                        <div class="mb-3">
                            <label for="inputPassword" class="form-label">Ваш пароль</label>
                            <input type="password"
                                   class="form-control @error('password')is-invalid@enderror"
                                   id="inputPassword" @error('inputPassword')is-invalid@enderror
                                   name="password">
                        </div>
                        <div class="mb-3">
                            <label for="inputConfirmationPassword" class="form-label">Ваш пароль повторно</label>
                            <input type="password"
                                   class="form-control @error('password_confirmation')is-invalid@enderror"
                                   id="inputConfirmationPassword"
                                   name="password_confirmation"
                                   aria-describedby="invalidPasswordConfirmation">
                        </div>
                        @error('password_confirmation')
                            <div id="invalidPasswordConfirmation" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror

                        <input type="text" name="fullName" placeholder="Ваше имя"><br>
                        @error('fullName')<p>{{ $message }}</p>@enderror
                        <input type="text" name="login" placeholder="Ваш логин"><br>
                        @error('login')<p>{{ $message }}</p>@enderror
                        <input type="email" name="email" placeholder="Ваша почта"><br>
                        @error('email')<p>{{ $message }}</p>@enderror
                        <input type="text" name="address" placeholder="Ваш адрес"><br>
                        @error('address')<p>{{ $message }}</p>@enderror
                        <input type="text" name="age" placeholder="Ваш возраст"><br>
                        @error('age')<p>{{ $message }}</p>@enderror
                        <input type="password" name="password" placeholder="Ваш пароль"><br>
                        @error('password')<p>{{ $message }}</p>@enderror
                        <input type="password" name="password_confirmation" placeholder="Ваш пароль повторно"><br>

                        <button type="submit" class="btn btn-primary">Регистрация</button>
                </form>
            </div>
            <div class="col"></div>
        </div>
    </div>

@endsection
</body>
</html>

