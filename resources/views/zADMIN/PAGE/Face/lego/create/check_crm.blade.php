<div class="menu -tile -S / cloud / net">
		
    @component('zADMIN._wrap.menu.tile.radio', ['cssName' => 'content'])
        @slot('name', 'crm_id')
        @slot('id', 'save_null')
        @slot('value', '')
        @slot('param_from_bd', '')

        определить <br>позже
    @endcomponent

    @foreach($Crm as $_crm)
        @component('zADMIN._wrap.menu.tile.radio', ['cssName' => 'content'])
            @slot('name', 'crm_id')
            @slot('id', $_crm->id)
            @slot('value', $_crm->id)
            @slot('param_from_bd', null)
            
            {{$_crm->name}}
        @endcomponent
    @endforeach
</div>