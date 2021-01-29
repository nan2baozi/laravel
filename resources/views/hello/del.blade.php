@extends('layouts.helloapp')

@section('title', 'Delete')

@section('menubar')
    @parent
    Delete Page
@endsection

@section('content')
    <form action="/hello/del" method="post">
    <table>
        @csrf
        <input type="hidden" name="id" value="{{$form->id}}">
        <tr>
            <th>name: </th>
            <td><input type="text" name="name" value="{{$form->name}}"</td>
        </tr>
        <tr>
            <th>mail: </th>
            <td><input type="text" name="name" value="{{$form->mail}}"</td>
        </tr>
        <tr>
            <th>age: </th>
            <td><input type="text" name="name" value="{{$form->age}}"</td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" value="send"></td>
        </tr>
@endsection

@section('footer')
copyright 2021 nan2.
@endsection