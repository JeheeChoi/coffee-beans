@extends('welcome')

@section('content')

        @foreach ($beans as $beans)
        <!-- Only shows coffee beans' name attritube on the page -->
        <tr>
            <td>{{ $beans->id }} </td>
            <td>{{ $beans->name }} </td>
            <td>{{ $beans->caffeine_level }}</td>
            <td>${{ $beans->cost }}/lb</td>
            <td>{{ $beans->bean_type }}</td>
            <td>{{ $beans->roast }}</td>
            <td>{{ $beans->grind }}</td>
            <td>{{ $beans->country_of_origin }}</td>
        </tr>

        @endforeach

@endsection
