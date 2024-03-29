@extends('layouts.layout')

@section('title', 'Profile')

@section('content')

    {{-- If User Exists Show Users Profile Page --}}
    @if (isset($user))
        <div class="">
            <div class="relative">
                <div class="flex px-3 py-6">
                    {{-- Username --}}
                    <h1 class="font-bold">{{ Str::limit($user->name, 50, $end = '...') }}</h1>
                </div>
                <div class="absolute right-0 top-0 p-6">
                    Follow
                </div>
            </div>
            <div class="flex items-center text-gray-500 px-3 py-2">
                <x-calander />
                &nbsp
                {{-- Date User Joined --}}
                <span class="">{{ "Joined " . $user->created_at->diffForHumans() }}</span>
            </div>
            <div class="flex px-3 pb-6 ">
                <div class="hover:underline">
                    <span class="font-semibold">0</span>
                    <span class="text-gray-500">Following</span>
                </div>
                <div class="pl-3 hover:underline">
                    <span class="font-semibold">0</span>
                    <span class="text-gray-500">Followers</span>
                </div>
            </div>
            <div class="">
                {{-- Profile Nav --}}
                <nav id="nav">
                    <ul class="flex font-medium">
                        <li class="transition-all w-1/3 py-3 text-center hover:bg-gray-200">Tweets</li>
                        <li class="transition-all w-1/3 py-3 text-center hover:bg-gray-200">Retweets</li>
                        <li class="transition-all w-1/3 py-3 text-center hover:bg-gray-200">Likes</li>
                    </ul>
                </nav>
            </div>
            <div>
                {{-- Display Users Tweets --}}
                <section class="tweet-section">
                    @foreach ($posts->sortByDesc('created_at') as $post)
                        @if ($post->user_id == $user->id)
                            <x-chit :post="$post" />
                        @endif
                    @endforeach
                </section>
                <section class="retweet-section" style="display: none;">
                    {{-- Displays User Retweets --}}
                </section>
                <section class="like-section" style="display: none;">
                    {{-- #TODO sort by date when liked  --}}
                    {{-- Display Users Likes --}}
                    @foreach ($posts->sortByDesc('created_at') as $post)
                        @if ($post->likes->contains('user_id', $user->id))
                            <x-chit :post="$post" />
                        @endif
                    @endforeach
                </section>
            </div>
        </div>
    {{-- If Username Does Not Exist Show Error Page --}}
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
