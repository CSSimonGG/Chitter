@extends('layouts.layout')

@section('title', 'Profile')

@section('content')

    @if (isset($user))
        <div class="">
            <div class="relative">
                <div class="flex px-3 py-6">
                    <h1 class="font-bold">{{ Str::limit($user->name, 50, $end = '...') }}</h1>
                </div>
                <div class="absolute right-0 top-0 p-6">
                    Follow
                </div>
            </div>
            <div class="">
                <ul class="flex font-medium">
                    <li class="transition-all w-1/3 py-3 text-center hover:bg-gray-200">Tweets</li>
                    <li class="transition-all w-1/3 py-3 text-center hover:bg-gray-200">Retweets</li>
                    <li class="transition-all w-1/3 py-3 text-center hover:bg-gray-200">Likes</li>
                </ul>
            </div>
            <div>
                @foreach ($posts->sortByDesc('created_at') as $post)
                    @if ($post->user_id == Auth::user()->id)
                        <x-chit :post="$post" />
                    @endif
                @endforeach
            </div>
        </div>
    @else
        <div class="px-3">
            <div>
                <h1 class="font-bold">{{ Str::limit('@' . $name, 50, $end = '...') }}</h1>
            </div>
            <div class="">
                <h1 class="flex text-2xl font-bold">This account doesn’t exist</h1>
                <p>Try searching for another.</p>
            </div>
        </div>
    @endif

@endsection
