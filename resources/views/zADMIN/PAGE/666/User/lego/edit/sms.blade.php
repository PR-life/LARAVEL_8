<div class="void / Form -S">

    @component('_wrap.__.summary')
        @slot('id', 'wrapFlaber_sms_data')
        @slot('icoCloseName', 'closeRoll')
        @slot('name', 'Персональные данные')

        <dl class="-dot -leftS Void">
            <dt class="content-xs Grey"><label for="inputUser_email">email</label></dt>
            <dd><input id="inputUser_email" type="text" name="email" value="{{$user->email}}"></dd>
        </dl>

    @endcomponent
    
    @component('_wrap.__.summary')
        @slot('id', 'wrapFlaber_sms_security')
        @slot('icoCloseName', 'closeRoll')
        @slot('name', 'Безопасность')
        <dl class="-dot Void">
            <dt class="content-xs Grey"><label class="nowrap" for="inputNewPassword">новый пароль</label></dt>
            <dd><input id="inputNewPassword" type="text" name="new_password" value="{{old('new_password')}}" placeholder="минимум 6 символов"></dd>
        </dl>
        @error('new_password')
        <div class="content / Error -text">{{ $errors->first('new_password') }}</div>
        @enderror

    @endcomponent

</div>

