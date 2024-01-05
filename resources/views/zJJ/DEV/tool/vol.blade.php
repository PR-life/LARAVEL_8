<?
    isset($Var) ? '' : $Var = [];
?>

<div class="content-xs">VOL</div>
<div class="paragraph"></div>
@component('zLara._lego.dev._wrap.index', ['id_package' => $id_package, 'css' => $css ?? ''])
<li {!!in_array('default', $Var) ? 'class="active"' : ''!!}  data-item='1' data-packagetype='css' data-packagefoo='toggle' package='-default'>
    <span class="a / noEvents">-default</span>
</li>
<li {!!in_array('vol1', $Var) ? 'class="active"' : ''!!}  data-item='2' data-packagetype='css' data-packagefoo='toggle' package='vol-1'>
    <span class="a / noEvents">vol-1</span>
</li>
<li {!!in_array('vol2', $Var) ? 'class="active"' : ''!!}  data-item='3' data-packagetype='css' data-packagefoo='toggle' package='vol-2'>
    <span class="a / noEvents">vol-2</span>
</li>
@endcomponent