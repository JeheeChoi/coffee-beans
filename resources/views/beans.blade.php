@extends('welcome')

@section('content')
    <h1>Beans List</h1>

    <ul>
        @foreach ($beans as $beans)
        <!-- Only shows coffee beans' name attritube on the page -->
        <li>{{ $beans->name }}</li>
        @endforeach
    </ul>

    <a href="/"><h1>Home</h1></a>
@endsection
