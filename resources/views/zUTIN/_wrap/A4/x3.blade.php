@component('zUTIN._wrap.A4.wrap.index', [
    'header' => $header,
    'loop' => $loop,
    'cssUtin' => $cssUtin ?? null,
    'cssPlot' => $cssPlot ?? null,
    'Font' => $Font
])

    @slot('cssGrid', ' x3 -gap / bg-cell')

    @slot('cell')
        @include('zUTIN._wrap._lego.cell.1')
        @include('zUTIN._wrap._lego.cell.2')
        @include('zUTIN._wrap._lego.cell.3')
    @endslot

    {!!$slot!!}

@endcomponent