<?
    isset($Var) ? '' : $Var = [];
?>

<div class="content-xs">color</div>
<div class="paragraph"></div>

@component('zJJ.DEV._wrap.menuTag', ['id_package' => $id_package, 'css' => $css ?? ''])
<li {!!in_array('bright', $Var) ? 'class="active"' : ''!!} data-item='1' data-packagefoo='toggle' data-packagetype='css' package='-bright'>
    <span class="a / noEvents">-bright</span>
</li>
<li {!!in_array('dark', $Var) ? 'class="active"' : ''!!} data-item='2' data-packagefoo='toggle' data-packagetype='css' package='-dark'>
    <span class="a / noEvents">-dark</span>
</li>
<li {!!in_array('white', $Var) ? 'class="active"' : ''!!} data-item='3' data-packagefoo='toggle' data-packagetype='css' package='-white'>
    <span class="a / noEvents">-white</span>
</li>
<li {!!in_array('whitePC', $Var) ? 'class="active"' : ''!!} data-item='4' data-packagefoo='toggle' data-packagetype='css' package='-whitePC'>
    <span class="a / noEvents">-whitePC</span>
</li>
<li {!!in_array('transparent', $Var) ? 'class="active"' : ''!!} data-item='5' data-packagefoo='toggle' data-packagetype='css' package='transparent'>
    <span class="a / noEvents">transparent</span>
</li>
@endcomponent