@extends('layouts.layout')

@section('title', 'Home')

@section('content')
    <h1 class="px-6 py-3 font-bold text-xl border-b-2">Home</h1>
    <div class="py-3 border-b-2">
        <x-createchit />
    </div>

    {{-- Show all Posts --}}
    <div>
        @foreach ($posts as $post)
            <div>
                <p>{{ $post->chit }}</p>
            </div>
        @endforeach
    </div>
@endsection
