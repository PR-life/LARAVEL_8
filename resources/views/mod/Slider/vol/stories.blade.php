@component('mod.Slider.index', [
    'id' => 'stories_01111857',
    'css28061029' => '-move / Abs -all',
    'cssShell' => 'noEvents',
    ])
	@slot('manager')
        @include('mod.Slider._lego.nav.story', ['arrTile' => $arr_navStories_001])
	@endslot


    {!!$slot!!}


@endcomponent