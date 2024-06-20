<div class="void / Form -S">


    @component('_wrap.__.summary')
        @slot('icoCloseName', 'closeRoll')
        @slot('id', 'user')
        @slot('name', 'База')

        <dl class="-dot Void / Form -XS / net">
            <dt class="content-xs Grey"><label for="inputRole">role</label></dt>
            <dd><span class="content-xs"><input id="inputRole" type="text" name="role" value="{{$user->role}}" placeholder="..."></span></dd>
        </dl>
        <div class="paragraph"></div>
        <div class="_shell vol-Abs">
            <input id="inputEmail" type="text" name="email" value="{{$user->email ?? old('email')}}" placeholder=".">
            <label class="Abs" for="inputEmail">@svg('plus')email</label>
        </div>

    @endcomponent

 

    @component('_wrap.__.summary')
        @slot('icoCloseName', 'closeRoll')
        @slot('id', 'password')
        @slot('name', 'Пароль')


        <div class="paragraph"></div>
        <div class="_shell vol-Abs">
            <input id="inputNewPassword" type="text" name="new_password" value="{{old('new_password')}}" placeholder=".">
            <label class="Abs" for="inputNewPassword">@svg('plus')новый пароль</label>
        </div>
    @endcomponent




</div>
