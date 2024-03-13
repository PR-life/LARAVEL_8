<div class="menu -tile -XS / cloud / net">
		
    @component('zADMIN.PAGE._wrap.menu.tile.radio', ['cssName' => 'content-xxs'])
        @slot('name', 'crm_id')
        @slot('id', 'save_null')
        @slot('param', null)
        @slot('value', null)
        
        определить <br>позже
    @endcomponent

    @foreach($Crm as $_crm)


        @component('zADMIN.PAGE._wrap.menu.tile.radio', ['cssName' => 'content-xxs'])
            @slot('name', 'crm_id')
            @slot('id', $_crm->id)
            @slot('param', 'checked')
            @slot('value', $_crm->id)
            
            {{$_crm->name}}
        @endcomponent
    @endforeach
</div>