@component('mod.Slider.index', [
    'id' => $id,
    'css28061029' => '-move visible-1 / Abs -all',
    'cssShell' => '_indexMin noEvents',
    ])
	@slot('manager')
        {!!$manager!!}
    @endslot

    {!!$slot!!}
@endcomponent