@component('zUTIN._wrap.A4.wrap.index', [
    'header' => $header,
    'loop' => $loop,
    'cssUtin' => $cssUtin ?? null,
    'cssPlot' => $cssPlot ?? null,
    'cssBody' => $cssBody ?? null,
    'Font' => $Font
])

    @slot('cssGrid', ' x2 -gap / bg-cell44' . ($cssGrid ?? ''))

    @slot('cell')
        @include('zUTIN._wrap._lego.cell.1', ['css' => $cssCell ?? null])
        @include('zUTIN._wrap._lego.cell.2', ['css' => $cssCell ?? null])
    @endslot

    {!!$slot!!}

@endcomponent