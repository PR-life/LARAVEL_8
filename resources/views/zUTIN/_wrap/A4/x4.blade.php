@component('zUTIN._wrap.A4.wrap.index', [
    'header' => $header,
    'loop' => $loop,
    'cssOn' => $cssOn ?? null,
    'cssUtin' => $cssUtin ?? null,
    'cssPlot' => $cssPlot ?? null,
    'cssBody' => $cssBody ?? null,
    'Font' => $Font
])

    @slot('cssGrid', ' x4 -gapS / bg-cell44' . ($cssGrid ?? ''))

    @slot('cell')
        @include('zUTIN._wrap._lego.cell.1', ['css' => $cssCell ?? null])
        @include('zUTIN._wrap._lego.cell.2', ['css' => $cssCell ?? null])
        @include('zUTIN._wrap._lego.cell.3', ['css' => $cssCell ?? null])
        @include('zUTIN._wrap._lego.cell.4', ['css' => $cssCell ?? null])
    @endslot

    {!!$slot!!}

@endcomponent