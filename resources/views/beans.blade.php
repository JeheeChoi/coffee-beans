@extends('welcome')

@section('content')

        @foreach ($beans as $beans)
        <!-- Only shows coffee beans' name attritube on the page -->
        <tr>
            <td>{{ $beans->id }} </td>
            <td>{{ $beans->name }} </td>
            <td>{{ $beans->caffeine_level}}</td>
            <td>${{ $beans->cost}}/lb</td>
        </tr>

        @endforeach

@endsection
