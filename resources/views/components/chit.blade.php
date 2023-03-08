<div>
    <div class="hover:bg-gray-100 py-3 px-6 border-x border-t">
        <h2 class="inline font-bold">{{ $post->user->name }}</h2>
        <p class="inline">- {{ $post->created_at->diffForHumans() }}</p>
        <x-buttons.options/>
        <p class="break-words">{{ $post->chit }}</p>
        <div class="pt-3 pb-6 space-x-12">
            <x-buttons.comment/>
            <x-buttons.repost/>
            <x-buttons.like/>
        </div>
    </div>
</div>
