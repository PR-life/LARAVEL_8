@component('zADMIN._wrap.menu.tile.radio', ['cssName' => 'content-xxs'])
    @slot('name', 'schema')
    @slot('id', 'schema_default')
    @slot('value', 'default')
    @slot('param_from_bd', $Var->schema)

    default
@endcomponent

@component('zADMIN._wrap.menu.tile.radio', ['cssName' => 'content-xxs'])
    @slot('name', 'schema')
    @slot('id', 'schema_banner_top')
    @slot('value', 'banner_top')
    @slot('param_from_bd', $Var->schema)

    banner_top
@endcomponent