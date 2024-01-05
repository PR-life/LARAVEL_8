@component('zJJ.mod.Opportunities.menu.wrap.index')
    @slot('package', 'Opportunities_list')    
    <li id="li_all_apk" class="active" data-item='1' data-packagefoo='radio' data-packagetype='css' package='all'>
        <span class="a noEvents nowrap">Все функции</span>
    </li>
    <li data-item='2' data-packagefoo='radio' data-packagetype='css' package='opredelyaet'>
        <span class="a noEvents">{{__('zImago/mod/Opportunities/index.menu_1')}}</span>
    </li>
    <li data-item='3' data-packagefoo='radio' data-packagetype='css' package='mozhet'>
        <span class="a noEvents">{{__('zImago/mod/Opportunities/index.menu_2')}}</span>
    </li>
    <li data-item='4' data-packagefoo='radio' data-packagetype='css' package='podberet'>
        <span class="a noEvents">{{__('zImago/mod/Opportunities/index.menu_3')}}</span>
    </li>
@endcomponent