<?
    isset($Var) ? '' : $Var = [];
?>

<div class="content-xs">Font</div>
<div class="paragraph"></div>

@component('zJJ.DEV._wrap.menuTag', ['id_package' => $id_package, 'css' => $css ?? ''])
<li {!!in_array('Font', $Var) ? 'class="active"' : ''!!}  data-item='1' data-packagetype='css' data-packagefoo='toggle' package='Font'>
    <span class="a noEvents">Font</span>
</li>
@endcomponent
 