<div>
    @props(['post'])

    {{-- If User Made Post Show Delete Button --}}
    @if (Auth::id() == $post->user_id)
        <form method="POST" action="/delete/{{$post->id}}">
            @csrf
            @method('DELETE')
            <button class="text-red-500">{{--<i class="fa-solid fa-trash"></i>--}} Delete</button>
          </form>
    @endif
    <div><a href="">Add Bookmark</a></div>
</div>
