@extends('layout')

@section('title', 'Page Title')

@section('sidebar')

    <p>This is appended to the master sidebar.</p>
    {{ $name }}
@endsection

@section('content')
    <p>This is my body content.</p>
@endsection
