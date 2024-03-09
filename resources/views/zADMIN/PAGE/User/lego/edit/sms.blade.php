<div class="void / Form -S">

    @component('_wrap.__.summary')
        @slot('id', 'wrapFlaber_sms_data')
        @slot('name', 'Персональные данные')

        <dl class="-dot -leftS Void">
            <dt class="content-xs Grey"><label for="inputUser_email">email</label></dt>
            <dd><input id="inputUser_email" type="text" name="email" value="{{$user->email}}"></dd>
        </dl>

    @endcomponent


</div>
