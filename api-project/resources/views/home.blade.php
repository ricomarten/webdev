@extends('layouts.master')
@section('content')
    <h1>Home Page</h1>

    @foreach ($data as $item)
        {{ $item }}<br>
    @endforeach

    @for ($i = 0; $i < count($data); $i++)
        {{ $data[$i] }} - {{ $alamat[$i] }}<br>
    @endfor
@endsection
