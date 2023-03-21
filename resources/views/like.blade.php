@if (auth()->check() &&
        auth()->user()->can('like', $model))
    <form id="like-form-{{ $model->id }}" class="like-form flex" action="{{ route('like') }}"
        data-model="{{ get_class($model) }}" data-id="{{ $model->id }}" data-likes="{{ $model->likes()->count() }}"
        method="POST">
        @csrf
        @method('POST')
        <input type="hidden" name="likeable_type" value="{{ get_class($model) }}" />
        <input type="hidden" name="id" value="{{ $model->id }}" />
        <button type="submit">
            <x-buttons.liked />
        </button>
        <span class="likes mt-2">{{ $model->likes()->count() }}</span>
    </form>
@elseif(auth()->check() &&
        auth()->user()->can('unlike', $model))
    <form id="unlike-form-{{ $model->id }}" class="unlike-form flex" action="{{ route('unlike') }}"
        data-model="{{ get_class($model) }}" data-id="{{ $model->id }}"
        data-likes="{{ $model->likes()->count() }}" method="DELETE">
        @csrf
        @method('DELETE')
        <input type="hidden" name="likeable_type" value="{{ get_class($model) }}" />
        <input type="hidden" name="id" value="{{ $model->id }}" />
        <button type="submit" class="fill-red-600">
            <x-buttons.liked />
        </button>
        <span class="likes mt-2">{{ $model->likes()->count() }}</span>
    </form>
@else
    <span>Like</span>
@endif
