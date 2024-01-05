<?
    isset($Var) ? '' : $Var = [];
?>

<div class="content-xs">CLASS</div>
<div class="paragraph"></div>

@component('zJJ.DEV._wrap.menuTag', ['id_package' => $id_package, 'css' => $css ?? ''])
<li {!!in_array('Void', $Var) ? 'class="active"' : ''!!} data-item='1' data-packagetype='css' data-packagefoo='toggle' package='Void'>
    <span class="a / noEvents">Void</span>
</li>
<li {!!in_array('Edge', $Var) ? 'class="active"' : ''!!} data-item='2' data-packagefoo='toggle' data-packagetype='css' package='Edge'>
    <span class="a / noEvents">Edge</span>
</li>
<li {!!in_array('text', $Var) ? 'class="active"' : ''!!} data-item='3' data-packagefoo='toggle' data-packagetype='css' package='text'>
    <span class="a / noEvents">text</span>
</li>
@endcomponent