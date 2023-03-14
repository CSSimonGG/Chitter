{{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}
<div>
    <div class="relative hover:bg-gray-100 py-3 px-6 border-x border-t">
        <h2 class="inline font-bold">{{ $post->user->name }}</h2>
        <p class="inline">- {{ $post->created_at->diffForHumans() }}</p>
        <div class="inline" onclick="showChitOptions({{ $post->id }})">
            <x-buttons.options />
        </div>
        <div style="display: none;" id="chitOptions_{{ $post->id }}" class="absolute right-1 bg-white rounded-lg p-3">
            <x-menu.chitoptions :post="$post" />
        </div>
        <p class="break-words">{{ $post->chit }}</p>
        {{-- <div class="flex pt-3 pb-6 space-x-12">
            <div onclick="addNewComment({{ $post->id }})" id="chitComments_{{ $post->id }}"
                class="flex items-center">
                <x-buttons.comment />
                <div>
                    1
                </div>
            </div>
            <div onclick="addNewRepost({{ $post->id }})" id="chitReposts_{{ $post->id }}"
                class="flex items-center">
                <x-buttons.repost :post="$post" />
                <div class="">
                    {{ $post->reposts()->count() }}
                </div>
            </div>
            <div onclick="addNewLike({{ $post->id }})" id="chitLikes_{{ $post->id }}"
                class="flex items-center">
                <x-buttons.like :post="$post" />
                <div class="">
                    {{ $post->likes()->count() }}
                </div>
            </div>
        </div> --}}
        <div>@include('like', ['model' => $post])</div>
    </div>
</div>
