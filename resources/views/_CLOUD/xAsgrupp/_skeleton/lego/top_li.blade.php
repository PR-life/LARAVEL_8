<div class="none_mbl none_beyond / flex cross-m / Family-OpenSans -Grey">
    <div id="btn_milkSearch" class="flex cI / content-xxs / pointer" data-click data-css data-node='body' data-toggle='-veil fix' data-veil='btn_milkSearch' data-goto='milk_search' data-foo='click' onclick="document.getElementById('input_2320114').focus()">
        <div class="Ico -XS / mr-2">@svg('search')</div>
        <span>Поиск по сайту</span>
    </div>
    <a class="content-xxs / flex cI / none_beyond" rel="nofollow" href="{{__('_const/asgrupp.emailLink')}}" onclick="ym(97704993,'reachGoal','click_contact_email')">
        <span class="Ico -S / mr-1">@svg('email')</span>
        <span>{{__('_const/asgrupp.emailView')}}</span>
    </a>
</div>
<a class="flex cI / Grey / none_beyond" rel="nofollow" href="tel:{{__('_const/asgrupp.phoneCode')}}" title="{{__('_const/asgrupp.title')}}, Москва {{__('_const/asgrupp.phoneView')}}">
    <span class="Ico -S / mr-1">@svg('tel')</span>
    <span class="content-xxs / none_mbl">{{__('_const/asgrupp.phoneView')}}</span>
</a>
<div class="none_mbl / Min -w1 / Shift -right -step">
    @guest()
        <a href="" class="Btn -auto slimS vol-grey round-m / none_beyond">войти</a>
        <a href="" class="content / Beyond">войти</a>
    @endguest
    @auth()
        <div class="flex eC">
            <div class="Ava -S -def"></div>
        </div>
    @endauth
</div>