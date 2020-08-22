@extends('layouts.custom')

@section('title', "Login")

@section('link')
    <link href="css/login.css" type="text/css" rel="stylesheet" />
@endsection

@section('content')
    <h3>{{ config('app.name') }} <span>{{ config('app.version') }}</span></h3>
    <fieldset>
        <legend>Login</legend>
        <form id="login_form" method="post" action="{{ route('login') }}">
            @csrf

            <label>Username: </label>
            <input class="text @error('username') error @enderror" type="text" name="username" value="{{ old('username') }}" />
            <br />
            @error('username')
                <h4 class="error"><b>error: </b>{{ $message }}</h4>
            @enderror

            <label>Password: </label>
            <input class="text @error('password') error @enderror" type="password" name="password" /><br />
            @error('password')
                <h4 class="error"><b>error: </b>{{ $message }}</h4>
            @enderror

            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} style="float: left;">
            <label for="remember" style="font-size: 11px;">Remember Me</label>

            <input class="submit" type="submit" value="Login" name="login" />
        </form>
    </fieldset>
    <a class="register_here" href="{{ route('register') }}" title="Register here, please!">Register here</a>
    @if (Route::has('password.request'))
        <a class="register_here" href="{{ route('password.request') }}" style="padding-right: 30px;">Forgot Your Password?</a>
    @endif

@endsection
