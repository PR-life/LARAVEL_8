@component('zJJ.mod.Opportunities.menu.wrap.index')
    @slot('package', 'Opportunities_list')    
    <li id="li_all_mod" class="active" data-item='1' data-packagefoo='radio' data-packagetype='css' package='all'>
        <span class="a noEvents nowrap">Все модули</span>
    </li>
    <li data-item='2' data-packagefoo='radio' data-packagetype='css' package='tempolab'>
        <span class="a noEvents">Tempolab</span>
    </li>
    <li data-item='3' data-packagefoo='radio' data-packagetype='css' package='tempoheart'>
        <span class="a noEvents">Tempoheart</span>
    </li>
    <li data-item='4' data-packagefoo='radio' data-packagetype='css' package='neurostim'>
        <span class="a noEvents">Neurostim</span>
    </li>
    <li data-item='5' data-packagefoo='radio' data-packagetype='css' package='dynamicbia'>
        <span class="a noEvents">DynamicbIA</span>
    </li>
    <li data-item='6' data-packagefoo='radio' data-packagetype='css' package='linebia'>
        <span class="a noEvents">LinebIA</span>
    </li>
@endcomponent