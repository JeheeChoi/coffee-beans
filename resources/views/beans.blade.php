@extends('welcome')

@section('content')

        @foreach ($beans as $beans)
        <!-- Only shows coffee beans' name attritube on the page -->
        <li>{{ $beans->name }} ({{ $beans->caffeine_level}})</li>
        @endforeach

@endsection
