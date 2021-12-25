@extends('welcome')

@section('content')

    <ul>
        @foreach ($beans as $beans)
        <!-- Only shows coffee beans' name attritube on the page -->
        <li>{{ $beans->name }}</li>
        @endforeach
    </ul>

@endsection
