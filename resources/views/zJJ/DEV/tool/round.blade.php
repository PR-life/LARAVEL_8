<?
    isset($Var) ? '' : $Var = [];
?>

<div class="content-xs">round</div>
<div class="paragraph"></div>

@component('zJJ.DEV._wrap.menuTag', ['id_package' => $id_package, 'css' => $css ?? ''])
<li {!!in_array('round', $Var) ? 'class="active"' : ''!!} data-item='1' data-packagetype='css' data-packagefoo='toggle' package='round'>
    <span class="a / noEvents">round</span>
</li>
<li {!!in_array('roundS', $Var) ? 'class="active"' : ''!!} data-item='2' data-packagetype='css' data-packagefoo='toggle' package='round-s'>
    <span class="a / noEvents">round-s</span>
</li>
@endcomponent
 