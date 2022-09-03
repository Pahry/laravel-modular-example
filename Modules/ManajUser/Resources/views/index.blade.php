@extends('manajuser::layouts.master')

@section('content')
    <h1>Ini Halaman Management User</h1>

    <p>
        This view is loaded from module: {!! config('manajuser.name') !!}
    </p>

    <ul class="menu-content">
        <li><a href="" class="menu-item">Dashboard</a></li>
        <li><a href="/user" class="menu-item">User</a></li>
        <li><a href="/about" class="menu-item">About</a></li>
    </ul>
@endsection
