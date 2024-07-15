@foreach($arr_1 as $_param)
    @component('_wrap._menu.tile.checkbox', ['cssName' => 'content-s pl-1 pr-1 / familyInter'])
        @slot('id', $id_name . $loop->index)
        @slot('css28061510', $id_name . $loop->index . ' -Black')
        @slot('veil28061736', true)
        @slot('name', $bd_name)
        @slot('param', 'checked')
        @slot('value', $loop->index)
        {{$_param}}
    @endcomponent
@endforeach