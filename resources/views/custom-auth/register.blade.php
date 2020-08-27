@extends('layouts.custom')

@section('title', "Registration")

@section('link')
    <link href="/css/register.css" type="text/css" rel="stylesheet" />
@endsection

@section('content')
    <fieldset>
        <legend>Registration</legend>
        <form action="{{ route('register') }}" method="post">
            @csrf

            <label for="name">Name: </label>
            <input type="text" class="text @error('name') error @enderror" name="name" value="{{ old('name') }}">
            @error('name')
                <h4 class="error"><b>error: </b>{{ $message }}</h4>
            @enderror

            <label>Username: </label>
            <input class="text @error('username') error @enderror" type="text" name="username" value="{{ old('username') }}"/><br />
            @error('username')
                <h4 class="error"><b>error: </b>{{ $message }}</h4>
            @enderror

            <label>E-mail: </label>
            <input class="text @error('email') error @enderror" type="text" name="email" value="{{ old('email') }}" /><br />
            @error('email')
                <h4 class="error"><b>error: </b>{{ $message }}</h4>
            @enderror

            <label>Password: </label>
            <input class="text @error('password') error @enderror" type="password" name="password" /><br />
            @error('password')
                <h4 class="error"><b>error: </b>{{ $message }}</h4>
            @enderror

            <label>Re-enter password: </label>
            <input class="text @error('password') error @enderror" type="password" name="password_confirmation" /><br />

            <div class="btn"><a id="cancel" name="cancel" href="{{ route('login') }}">Cancel</a></div>
            <div class="btn"><input id="register" type="submit" value="Register" /></div>
        </form>
    </fieldset>
@endsection


