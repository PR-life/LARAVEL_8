<div class="menu -tile -XS / cloud / net">
    @foreach($roles as $id => $_role)
        @component('zADMIN.PAGE._wrap.menu.tile.radio', ['cssName' => 'content-xxs'])
            @slot('name', 'role')
            @slot('id', 'role_'.$id)
            @slot('param', old('role'))
            @slot('value', $id)
            
            {{$_role}}
        @endcomponent
    @endforeach
</div>
@error('role')
    <div class="content-s / Error -text">{{ $errors->first('role')}}</div>
@enderror