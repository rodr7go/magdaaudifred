<li>
    <a href="#" data-filter="*" class="current"> All
        <sup><small></small></sup>
    </a>
</li>
@foreach($categories as $category)
    <li>
        <a href="#" data-filter="{{ '.' . $category->name }}" class="">{{$category->name }}
            <sup><small></small></sup>
        </a>
    </li>
@endforeach