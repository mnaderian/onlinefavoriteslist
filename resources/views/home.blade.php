@extends('layouts.custom')

@section('title', config('app.name') . ' ' . config('app.version'))

@section('link')
    <link href="/css/default.css" type="text/css" rel="stylesheet" />
@endsection

@section('content')
    <div id="icon"></div>
    <h1>{{ config('app.name') }} <span>{{ config('app.version') }}</span></h1>
    <div id="welcome_logout"><b>Welcome </b>{{ Auth::user()->username }} |
        <span>
            <a href="{{ route('logout') }}"
                onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                Log out
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </span>
    </div>
    <fieldset id="addsite">
        <legend>Add Site</legend>
        <div id="addform">
            {{-- TODO: update form post action url --}}
            <form method="post" action="#">
                <label>URL: </label>
                <input type="text" name="url" class="text" />
                <select name="addsite_cat" id="addsite_cat">
                    {{-- TODO: get all user's categories --}}
                    <option value="1">Main</option>
                    <option value="20">Development</option>
                </select>
                <input type="submit" name="add" value="Add" class="submit" />
            </form>
        </div>
    </fieldset>
    <div id="list_options">
        {{-- TODO: update link urls --}}
        <b>Options: </b>
        <a href="#" onclick="return confirm('Are you sure you want to clear this list?');">
            Clear List</a>
        <a href="#">My Profile</a>
        <a href="#">Settings</a>
        <a href="#">Categories</a>
        <a href="#">Trash</a>
    </div>

    <div id="number_of_favorites">
        <i>Number of favorites: </i>
        {{-- TODO: get user's favorites count --}}
        2
    </div>
    {{-- TODO: update form action url --}}
    <form id="categories" name="categories" method="post" action="#">
        <i>Category: </i>&nbsp;
        <select name="list_cats">
            {{-- TODO: get all user's categories --}}
            <option value="all">All</option>
            <option value="1">Main</option>
            <option value="20">Development</option>
        </select>
        <input type="submit" value="Load" />
    </form>
    <fieldset id="favlist">
        <legend>Favorites List</legend>
        <div id="fav_list">
            {{-- TODO: list users's favorites --}}
            <div class="link">
                <a href="http://laravel.com" title="Laravel - The PHP Framework For Web Artisans">
                    Laravel - The PHP Framework For Web Artisans
                </a>
            </div>
            <div class="options">
                <a href="index.php?del=84">Delete</a>
                &nbsp;&nbsp;
                <a href="edit.php?id=84">Edit</a>
            </div>
            <div class="link">
                <a href="http://google.com" title="Google">
                    Google
                </a>
            </div>
            <div class="options">
                <a href="index.php?del=84">Delete</a>
                &nbsp;&nbsp;
                <a href="edit.php?id=84">Edit</a>
            </div>
        </div>
    </fieldset>
@endsection
