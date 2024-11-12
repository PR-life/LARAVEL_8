@foreach($arr_1 as $_param)
    @component('_wrap._menu.tile.radio')
        @slot('id', $id_name . $loop->index)
        @slot('cssName', $cssName ?? 'content-m')
        @slot('fontName', $fontName ?? 'familyInter')
        @slot('css28061509', $id_name . $loop->index)
        @slot('name', $bd_name)
        @slot('param', 'checked')
        @slot('value', $loop->index)
        {!!$_param!!}
    @endcomponent
@endforeach