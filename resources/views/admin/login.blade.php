@extends('admin/main')

@section('content')
    <div class='container'>
        <div class='row'>
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Błędne logowanie</strong><br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form class="form-horizontal" role="form" method="POST" action="/admin/logowanie">
            <div class='login-panel'>
                <p class='logowanie-test'>Logowanie</p>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                      <input type="text" name='email' class="form-control" placeholder="Wpisz login" value="{{ old('email') }}">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                        <input type="password" name='password' class="form-control" placeholder="Wpisz hasło">
                    </div>
                </div>
                <span class='lost-password'><a href='#'>Zapomniałem hasła</a></span>
                <span class='zaloguj'><button class='btn btn-default right-button' type='submit'>Zaloguj</button></span>
            </div>
            </form>
        </div>
    </div>
@endsection