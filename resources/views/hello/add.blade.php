@extends('layouts.helloapp')

@section('title', 'Add')

@section('menubar')
    @parent
    Insert Page
@endsection

@section('content')
    <form action="/hello/add" method="post">
    <table>
        @csrf
        <tr>
            <th>NAME</th>
            <td><input type="text" name="name">
        </tr>
        <tr>
            <th>MAIL</th>
            <td><input type="text" name="mail">
        </tr>
        <tr>
            <th>AGE</th>
            <td><input type="text" name="age">
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" value="send"></td>
        </tr>
    </table>


@endsection

@section('footer')
copyright 2021 nan2.
@endsection