@foreach($arr_1 as $_param)
    @component('_wrap._menu.tile.radio', ['cssName' => 'content pl-1 pr-1 / familyInter'])
        @slot('id', $id_name . $loop->index)
        @slot('css28061509', $id_name . $loop->index)
        @slot('name', $bd_name)
        @slot('param', 'checked')
        @slot('value', $loop->index)
        {!!$_param!!}
    @endcomponent
@endforeach