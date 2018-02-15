@foreach ($images as $image)
    <div class="work-item {{ $image->category->name }}" data-src="http://magdaaudifred.local/image-manager/public/storage/{{ $image->path }}" data-sub-html="{{ $image->name }}">

        <a href="#">
            <img src="http://magdaaudifred.local/image-manager/public/storage/{{ $image->path }}" alt="{{ $image->name }}">

            <div class="work-caption font-alt">
                <h3 class="work-title">{{ $image->name }} </h3>
                <div class="work-descr">{{ $image->category->name }} </div>
            </div>
        </a>
    </div>
@endforeach