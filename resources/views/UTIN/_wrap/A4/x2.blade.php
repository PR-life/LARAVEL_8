@component('UTIN._wrap.A4.wrap.index', [
    'header' => $header,
    'loop' => $loop,
    'cssUtin' => $cssUtin ?? null,
    'cssPlot' => $cssPlot ?? null,
    'Font' => $Font
])

    @slot('cssGrid', ' x2 -gap / bg-cell')

    @slot('cell')
        @include('UTIN._wrap.lego.cell.1')
        @include('UTIN._wrap.lego.cell.2')
    @endslot

    {!!$slot!!}

@endcomponent