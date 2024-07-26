@component('zADMIN._wrap.menu.tile.radio', ['cssName' => 'content-xxs'])
    @slot('name', 'where_to_show')
    @slot('id', 'where_to_show_null')
    @slot('value', '')
    @slot('param_from_bd', '')

    пусто
@endcomponent
@component('zADMIN._wrap.menu.tile.radio', ['cssName' => 'content-xxs'])
    @slot('name', 'where_to_show')
    @slot('id', 'where_to_show_top')
    @slot('value', 'top')
    @slot('param_from_bd', $Var->where_to_show)

    Top
@endcomponent
@component('zADMIN._wrap.menu.tile.radio', ['cssName' => 'content-xxs'])
    @slot('name', 'where_to_show')
    @slot('id', 'where_to_show_bottom')
    @slot('value', 'bottom')
    @slot('param_from_bd', $Var->where_to_show)

    Bottom
@endcomponent
