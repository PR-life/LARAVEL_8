<div class="menu -tile -XXS / cloud / net">
		
    {{-- @component('zADMIN._wrap.menu.tile.radio', ['cssName' => 'content'])
        @slot('name', 'crm_id')
        @slot('id', 'save_null')
        @slot('value', 'none')
        @slot('param_from_bd', 'none')

        определить <br>позже
    @endcomponent --}}
    @component('zADMIN._wrap.menu.tile.radio', ['cssName' => 'content'])
        @slot('name', 'gender')
        @slot('id', 'gender_male')
        @slot('value', 'male')
        @slot('param_from_bd', null)
        
        <div class="h2">М</div>
    @endcomponent
    @component('zADMIN._wrap.menu.tile.radio', ['cssName' => 'content'])
        @slot('name', 'gender')
        @slot('id', 'gender_female')
        @slot('value', 'female')
        @slot('param_from_bd', null)
        
        <div class="h2">Ж</div>
    @endcomponent
    {{-- @foreach($Crm as $_crm) --}}
 
    {{-- @endforeach --}}
</div>