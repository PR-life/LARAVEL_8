@component('zADMIN._wrap.menu.tile.radio', ['cssName' => 'content-xxs'])
    @slot('name', 'add_to_contents')
    @slot('id', 'add_to_contents_null')
    @slot('value', '')
    @slot('param_from_bd', '')

    пусто
@endcomponent
@component('zADMIN._wrap.menu.tile.radio', ['cssName' => 'content-xxs'])
    @slot('name', 'add_to_contents')
    @slot('id', 'add_to_contents_yes')
    @slot('value', 'yes')
    @slot('param_from_bd', $Var->add_to_contents)

    Да
@endcomponent