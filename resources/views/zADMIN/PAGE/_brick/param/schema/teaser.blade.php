@component('zADMIN._wrap.menu.tile.radio', ['cssName' => 'content-xxs'])
    @slot('name', 'schema_teaser')
    @slot('id', 'schema_teaser_default')
    @slot('value', 'default')
    @slot('param_from_bd', $Var->schema_teaser)

    default
@endcomponent

@component('zADMIN._wrap.menu.tile.radio', ['cssName' => 'content-xxs'])
    @slot('name', 'schema_teaser')
    @slot('id', 'schema_teaser_Poster')
    @slot('value', 'poster')
    @slot('param_from_bd', $Var->schema_teaser)

    Poster
@endcomponent

@component('zADMIN._wrap.menu.tile.radio', ['cssName' => 'content-xxs'])
    @slot('name', 'schema_teaser')
    @slot('id', 'schema_teaser_Yota')
    @slot('value', 'yota')
    @slot('param_from_bd', $Var->schema_teaser)

    Yota
@endcomponent

@component('zADMIN._wrap.menu.tile.radio', ['cssName' => 'content-xxs'])
    @slot('name', 'schema_teaser')
    @slot('id', 'schema_teaser_Service')
    @slot('value', 'service')
    @slot('param_from_bd', $Var->schema_teaser)

    Service
@endcomponent