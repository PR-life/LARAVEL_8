<ul id="active_menuPluraTab" class="menu -plura -block / pointer" 
    data-click data-switch data-package='tab_EditTabBody' 
    data-stop 
    data-localstorage localstorage-id='switch'
    data-check="active"
>
    <li id="li_19051339_1" class="{{$css_li_1 ?? ''}}" data-item='1' data-packagetype='css' data-packagefoo='radio' package="Tabs -x1"><span class="a p noEvents">{{$menu_1 ?? 'меню 1'}}</span></li>
    @isset($menu_2)
    <li id="li_19051339_2" class="{{$css_li_2 ?? ''}}" data-item='2' data-packagetype='css' data-packagefoo='radio' package="Tabs -x2"><span class="a p noEvents">{{$menu_2 ?? 'меню 2'}}</span></li>
    @endisset
    @isset($menu_3)
    <li id="li_19051339_3" class="{{$css_li_3 ?? ''}}" data-item='3' data-packagetype='css' data-packagefoo='radio' package="Tabs -x3"><span class="a p noEvents">{{$menu_3 ?? 'меню 3'}}</span></li>
    @endisset
    @isset($menu_4)
    <li id="li_19051339_4" class="{{$css_li_4 ?? ''}}" data-item='4' data-packagetype='css' data-packagefoo='radio' package="Tabs -x4"><span class="a p noEvents">{{$menu_4 ?? 'меню 4'}}</span></li>
    @endisset
    @isset($menu_5)
    <li id="li_19051339_5" class="{{$css_li_5 ?? ''}}" data-item='5' data-packagetype='css' data-packagefoo='radio' package="Tabs -x5"><span class="a p noEvents">{{$menu_5 ?? 'меню 5'}}</span></li>
    @endisset
    @isset($menu_6)
    <li id="li_19051339_6" class="{{$css_li_6 ?? ''}}" data-item='6' data-packagetype='css' data-packagefoo='radio' package="Tabs -x6"><span class="a p noEvents">{{$menu_6 ?? 'меню 6'}}</span></li>
    @endisset
    @isset($menu_7)
    <li id="li_19051339_7" class="{{$css_li_7 ?? ''}}" data-item='7' data-packagetype='css' data-packagefoo='radio' package="Tabs -x7"><span class="a p noEvents">{{$menu_7 ?? 'меню 7'}}</span></li>
    @endisset
    @isset($menu_8)
    <li id="li_19051339_8" class="{{$css_li_8 ?? ''}}" data-item='8' data-packagetype='css' data-packagefoo='radio' package="Tabs -x8"><span class="a p noEvents">{{$menu_8 ?? 'меню 8'}}</span></li>
    @endisset
    @isset($menu_9)
    <li id="li_19051339_9" class="{{$css_li_9 ?? ''}}" data-item='9' data-packagetype='css' data-packagefoo='radio' package="Tabs -x9"><span class="a p noEvents">{{$menu_9 ?? 'меню 9'}}</span></li>
    @endisset
</ul>	
{!!$slot!!}