@component('zADMIN._wrap.menu.tile.radio', ['cssName' => 'content-xxs'])
    @slot('name', 'shema_teaser')
    @slot('id', 'shema_teaser_default')
    @slot('value', 'default')
    @slot('param_from_bd', $Var->shema_teaser)

    default
@endcomponent

@component('zADMIN._wrap.menu.tile.radio', ['cssName' => 'content-xxs'])
    @slot('name', 'shema_teaser')
    @slot('id', 'shema_teaser_Poster')
    @slot('value', 'poster')
    @slot('param_from_bd', $Var->shema_teaser)

    Poster
@endcomponent

@component('zADMIN._wrap.menu.tile.radio', ['cssName' => 'content-xxs'])
    @slot('name', 'shema_teaser')
    @slot('id', 'shema_teaser_Yota')
    @slot('value', 'yota')
    @slot('param_from_bd', $Var->shema_teaser)

    Yota
@endcomponent