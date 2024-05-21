<div class="menu -tile {{$css_18051448 ?? '-XS'}} / cloud / net">
    @component('zADMIN._wrap.menu.tile.radio', ['cssName' => 'content'])
        @slot('name', 'public_contact')
        @slot('id', 'public_contact_def')
        @slot('value', null)
        @slot('param_from_bd', null)
        
        не выбран
    @endcomponent
    @component('zADMIN._wrap.menu.tile.radio', ['cssName' => 'content'])
        @slot('name', 'public_contact')
        @slot('id', 'public_contact_phone')
        @slot('value', 'phone')
        @slot('param_from_bd', $face->public_contact)
        
        Телефон
    @endcomponent
    @component('zADMIN._wrap.menu.tile.radio', ['cssName' => 'content'])
        @slot('name', 'public_contact')
        @slot('id', 'public_contact_email')
        @slot('value', 'email')
        @slot('param_from_bd', $face->public_contact)
        
        email
    @endcomponent
    @component('zADMIN._wrap.menu.tile.radio', ['cssName' => 'content'])
        @slot('name', 'public_contact')
        @slot('id', 'public_contact_whatsapp')
        @slot('value', 'whatsapp')
        @slot('param_from_bd', $face->public_contact)
        
        whatsapp
    @endcomponent
    @component('zADMIN._wrap.menu.tile.radio', ['cssName' => 'content'])
        @slot('name', 'public_contact')
        @slot('id', 'public_contact_telegram')
        @slot('value', 'telegram')
        @slot('param_from_bd', $face->public_contact)
        
        telegram
    @endcomponent
    @component('zADMIN._wrap.menu.tile.radio', ['cssName' => 'content'])
        @slot('name', 'public_contact')
        @slot('id', 'public_contact_viber')
        @slot('value', 'viber')
        @slot('param_from_bd', $face->public_contact)
        
        viber
    @endcomponent
</div>