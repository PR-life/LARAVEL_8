<div class="menu -tile {{$css_18051412 ?? '-XS'}} / cloud / net">
    @component('zADMIN._wrap.menu.tile.radio', ['cssName' => 'content'])
        @slot('name', 'gender')
        @slot('id', 'gender_male')
        @slot('value', 'male')
        @slot('param_from_bd', $face->gender)
        
        Муж
    @endcomponent
    @component('zADMIN._wrap.menu.tile.radio', ['cssName' => 'content'])
        @slot('name', 'gender')
        @slot('id', 'gender_female')
        @slot('value', 'female')
        @slot('param_from_bd', $face->gender)
        
        Жен
    @endcomponent
</div>