@extends('layouts.helloapp')

@section('title', 'Session')

@section('menubar')
    @parent
    Session Page
@endsection

@section('content')
    <p>{{ $session_data }}</p>
    <form actiion="/hello/session" method="post">
        @csrf
        <input type="text" name="input">
        <input type="submit" value="send">
    </form>
@endsection

@section('footer')
copyright 2021 nan2.
@endsection