@extends('layouts.layout')

@section('title', 'Profile')

@section('content')

@if(isset($user))
    <p>Welcome, {{ $user->name }}!</p>
@else
    <h1>This account doesn’t exist</h1>
    <p>Try searching for another.</p>
@endif

@endsection
