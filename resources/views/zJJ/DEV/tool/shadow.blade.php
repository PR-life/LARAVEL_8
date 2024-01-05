<?
    isset($Var) ? '' : $Var = [];
?>

<div class="content-xs">shadow</div>
<div class="paragraph"></div>

@component('zJJ.DEV._wrap.menuTag', ['id_package' => $id_package, 'css' => $css ?? ''])
<li {!!in_array('shadow', $Var) ? 'class="active"' : ''!!}  data-item='1' data-packagetype='css' data-packagefoo='toggle' package='-shadow'>
    <span class="a noEvents">-shadow</span>
</li>
@endcomponent
 