@extends('layouts.helloapp')

@section('title', 'Person.Find')

@section('menubar')
    @parent
    Find Page
@endsection

@section('content')
    <form action="/person/find" method="post">
        @csrf
        <input type="text" name="input" value="{{ $input }}">
        <input type="submit" value="find">
    </form>
    @if (isset($item))
    <table>
        <tr>
            <th>DATA</th>
        </tr>
        <tr>
            <td>{{ $item->getData() }}</td>
        </tr>
    </table>        
    @endif
@endsection

@section('footer')
copyright 2021 nan2.
@endsection