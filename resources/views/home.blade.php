@extends('layouts.layout')

@section('title', 'Home')

@section('content')
    <h1 class="px-6 py-3 font-bold text-xl border-b">Home</h1>
    <div class="py-3">
        <x-createchit />
    </div>

    {{-- Show all Posts --}}
    @foreach ($posts->sortByDesc('created_at') as $post)
        <x-chit :post="$post" />
    @endforeach
@endsection
