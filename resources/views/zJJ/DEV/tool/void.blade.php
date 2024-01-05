<?
    isset($Var) ? '' : $Var = [];
?>

<div class="content-xs">Void</div>
<div class="paragraph"></div>

@component('zJJ.DEV._wrap.menuTag', ['id_package' => $id_package, 'css' => $css ?? ''])
<li {!!in_array('Void', $Var) ? 'class="active"' : ''!!} data-item='1' data-packagetype='css' data-packagefoo='toggle' package='Void'>
    <span class="a / noEvents">Void</span>
</li>
<li {!!in_array('void', $Var) ? 'class="active"' : ''!!} data-item='2' data-packagefoo='toggle' data-packagetype='css' package='-void'>
    <span class="a / noEvents">-void</span>
</li>
@endcomponent
 