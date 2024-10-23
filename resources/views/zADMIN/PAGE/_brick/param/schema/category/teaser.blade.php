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