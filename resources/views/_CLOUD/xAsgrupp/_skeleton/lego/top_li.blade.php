<div class="none_mbl none_beyond / flex cross-m / Family-OpenSans -Grey">
    @include('_CLOUD.xAsgrupp._skeleton.brick.btn_search')
    <a class="content-xxs / flex cI / none_beyond" rel="nofollow" href="{{__('_const/asgrupp.emailLink')}}" onclick="ym(97704993,'reachGoal','click_contact_email')">
        <span class="Ico -S / mr-1">@svg('email')</span>
        <span>{{__('_const/asgrupp.emailView')}}</span>
    </a>
</div>
<a class="flex cI / Grey / none_beyond" rel="nofollow" href="tel:{{__('_const/asgrupp.phoneCode')}}" title="{{__('_const/asgrupp.title')}}, Москва {{__('_const/asgrupp.phoneView')}}">
    <span class="Ico -S / mr-1">@svg('tel')</span>
    <span class="content-xxs / none_mbl">{{__('_const/asgrupp.phoneView')}}</span>
</a>
<div class="none_mbl / Min -w1">
    @guest()
        <a href="{{route('login')}}" class="Btn -auto -shadow slimS vol-white round-m / Shift -right -step / none_beyond">войти</a>
        <a href="{{route('login')}}" class="content / none Beyond">войти</a>
    @endguest
    @auth()
        <div class="flex eC">
            <div class="Ava -S -def"></div>
        </div>
    @endauth
</div>