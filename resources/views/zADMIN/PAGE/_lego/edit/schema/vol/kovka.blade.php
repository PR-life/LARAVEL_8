<div class="menu -tile -XXS / cloud / net">
    @include('zADMIN.PAGE._brick.param.schema.teaser')
    @component('zADMIN._wrap.menu.tile.radio', ['cssName' => 'content-xxs'])
        @slot('name', 'schema_teaser')
        @slot('id', 'schema_teaser_Collection')
        @slot('value', 'collection')
        @slot('param_from_bd', $Var->schema_teaser)

        Collection
    @endcomponent
</div>


