@extends('layouts.custom')

@section('title', "Reset Password")

@section('link')
    <link href="/css/login.css" type="text/css" rel="stylesheet" />
    <style>
        #login_form {
            padding-left: 0 !important;
        }
        label {
            width: 166px !important;
        }
        h4.error {
            padding-left: 180px;
        }
    </style>
@endsection

@section('content')
    @if (session('status'))
        <h4 class="success">{{ session('status') }}</h4>
    @endif
    <fieldset>
        <legend>Reset Password</legend>
        <form id="login_form" method="post" action="{{ route('password.update') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $token }}">

            <label>Email Address: </label>
            <input class="text @error('email') error @enderror" type="email" name="email" value="{{ $email ?? old('email') }}" />
            <br />
            @error('email')
                <h4 class="error"><b>error: </b>{{ $message }}</h4>
            @enderror

            <label>Password: </label>
            <input class="text @error('password') error @enderror" type="password" name="password" />
            <br />
            @error('password')
                <h4 class="error"><b>error: </b>{{ $message }}</h4>
            @enderror

            <label>Confirm Password: </label>
            <input class="text @error('password') error @enderror" type="password" name="password_confirmation" />
            <br />

            <input class="submit" type="submit" value="Send Password Reset Link" name="login" />
        </form>
    </fieldset>

@endsection
