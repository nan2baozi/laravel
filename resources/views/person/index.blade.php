@extends('layouts.helloapp')

@section('title', 'Person.Index')

@section('menubar')
    @parent
    Index Page
@endsection

@section('content')
    <table>
        <tr>
            <th>Person</th>
            <th>Board</th>
        </tr>
        @foreach ($items as $item)
        <tr>
            <td>
                {{$item->getData()}}
            </td>
            <td>
            @if ($item->boards != null)
                <table width="100px">
                @foreach ($item->boards as $obj)
                    <tr>
                        <td>{{ $obj->getData() }}</td>
                    </tr> 
                @endforeach
                </table>
            @endif
            </td>
        </tr>
        @endforeach
    </table>
@endsection

@section('footer')
copyright 2021 nan2.
@endsection