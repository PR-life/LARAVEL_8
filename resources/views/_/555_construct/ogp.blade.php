@isset($item->ogp_type)
    @section('ogp_type'){{$item->ogp_type}}@endsection
@endisset
@if(isset($item->ogp_title) || isset($item->title))
    @section('ogp_title'){{$item->ogp_title ?? $item->title}}@endsection
@endif
@if(isset($item->ogp_description) || isset($item->description))
    @section('ogp_description'){{$item->ogp_description ?? $item->description}}@endsection
@endif
@isset($item->canonical)
    @section('ogp_url'){{Request::root().$item->canonical}}@endsection
@endisset