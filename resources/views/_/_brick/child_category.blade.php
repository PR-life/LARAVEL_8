<li>{{ $child_category->name }}</li>
{{-- @if ($child_category->categories)
    <ul>
        @foreach ($child_category->categories as $childCategory)
            @include('_._brick.child_category', ['child_category' => $childCategory])
        @endforeach
    </ul>
@endif --}}