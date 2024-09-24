@component('zADMIN._wrap.menu.tile.radio', ['cssName' => 'content-xxs'])
    @slot('name', 'shema')
    @slot('id', 'shema_default')
    @slot('value', 'default')
    @slot('param_from_bd', $Var->shema)

    default
@endcomponent

@component('zADMIN._wrap.menu.tile.radio', ['cssName' => 'content-xxs'])
    @slot('name', 'shema')
    @slot('id', 'shema_banner_top')
    @slot('value', 'banner_top')
    @slot('param_from_bd', $Var->shema)

    banner_top
@endcomponent