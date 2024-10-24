<div class="none_mbl none_beyond / flex cross-m / Family-OpenSans -Grey">
    <a class="content-xxs / flex cI / none_beyond" rel="nofollow" href="{{__('_const/this.emailLink')}}" onclick="ym(97704993,'reachGoal','click_contact_email')">
        <span class="Ico -S / mr-1">@svg('email')</span>
        <span>{{__('_const/this.emailView')}}</span>
    </a>
</div>
<a class="flex cI / Grey / none_beyond" rel="nofollow" href="tel:{{__('_const/this.phoneCode')}}" title="{{__('_const/this.title')}}, Москва {{__('_const/this.phoneView')}}">
    <span class="Ico -S / mr-1">@svg('tel')</span>
    <span class="content-xxs / none_mbl">{{__('_const/this.phoneView')}}</span>
</a>
<div class="none_mbl / Min -w1">
    @guest()
        <a href="{{route('login')}}" class="Btn -autoS -shadow vol-white round-m slim-xs / Shift555 -right -step / none_beyond55">
            <span class="content-min">войти</span>
        </a>
        {{-- <a href="{{route('login')}}" class="content / none Beyond">войти</a> --}}
    @endguest
    @auth()
        <div class="flex eC">
            <div class="Ava -S -def"></div>
        </div>
    @endauth
</div>