@foreach ($images as $image)
    <div class="work-item {{ $image->category->name }}" data-src="http://magdaaudifred.local/image-manager/public/storage/{{ $image->path }}" data-sub-html="{{ $image->name }}">
        @if($image->active)
            <div class="red-point"></div>
        @endif
        <a href="#">
            <img src="http://magdaaudifred.local/image-manager/public/storage/{{ $image->path }}" alt="{{ $image->name }}">

            <div class="work-caption font-alt">
                <h3 class="work-title">{{ $image->name }} </h3>
                <div class="work-descr">{{ $image->category->name }} </div>
                @if($image->active)
                    <button class="btn btn-info">contact</button>
                @endif
            </div>
        </a>
    </div>
@endforeach