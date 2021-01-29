@extends('layouts.helloapp')

@section('title', 'Person.Index')

@section('menubar')
    @parent
    Index Page
@endsection

@section('content')
    <table>
        <tr>
            <th>NAME</th>
            <th>MAIL</th>
            <th>AGE</th>
        </tr>
    @foreach ($items as $item)
        <tr>
            <td>{{$item->getData()}}</td>
        </tr>
    @endforeach
@endsection

@section('footer')
copyright 2021 nan2.
@endsection