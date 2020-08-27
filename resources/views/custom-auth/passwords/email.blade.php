@extends('layouts.custom')

@section('title', "Reset Password")

@section('link')
    <link href="/css/login.css" type="text/css" rel="stylesheet" />
@endsection

@section('content')
    @if (session('status'))
        <h4 class="success">{{ session('status') }}</h4>
    @endif
    <fieldset>
        <legend>Reset Password</legend>
        <form id="login_form" method="post" action="{{ route('password.email') }}">
            @csrf

            <label>Email Address: </label>
            <input class="text @error('email') error @enderror" type="email" name="email" value="{{ old('email') }}" />
            <br />
            @error('email')
                <h4 class="error" style="padding-left: 123px;"><b>error: </b>{{ $message }}</h4>
            @enderror

            <input class="submit" type="submit" value="Send Password Reset Link" name="login" />
        </form>
    </fieldset>

@endsection
