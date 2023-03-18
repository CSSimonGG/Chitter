{{-- @can('like', $model)
    <div id="like-button-{{ $model->id }}">
        <form class="like-form" action="{{ route('like') }}" data-model="{{ get_class($model) }}" data-id="{{ $model->id }}" method="POST">
            @csrf
            <button>
                <x-buttons.like :post="$post" />
            </button>
        </form>
    </div>
@endcan

@can('unlike', $model)
    <div id="like-button-{{ $model->id }}">
        <form class="unlike-form" action="{{ route('unlike') }}" data-model="{{ get_class($model) }}" data-id="{{ $model->id }}" method="DELETE">
            @csrf
            @method('DELETE')
            <button>
                <x-buttons.liked :post="$post" />
            </button>
        </form>
    </div>
@endcan --}}

@can('like', $model)
    <form class="like-form" action="{{ route('like') }}" data-model="{{ get_class($model) }}" data-id="{{ $model->id }}" method="POST">
        @csrf
        <input type="hidden" name="likeable_type" value="{{ get_class($model) }}"/>
        <input type="hidden" name="id" value="{{ $model->id }}"/>
        <button>Like</button>
        <span class="likes">{{ $model->likes()->count() }}</span>
    </form>
@endcan

@can('unlike', $model)
    <form class="unlike-form" action="{{ route('unlike') }}" data-model="{{ get_class($model) }}" data-id="{{ $model->id }}" method="DELETE">
        @csrf
        @method('DELETE')
        <input type="hidden" name="likeable_type" value="{{ get_class($model) }}"/>
        <input type="hidden" name="id" value="{{ $model->id }}"/>
        <button>Unlike</button>
        <span class="likes">{{ $model->likes()->count() }}</span>
    </form>
@endcan