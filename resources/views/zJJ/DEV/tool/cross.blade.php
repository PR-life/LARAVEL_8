<?
    isset($Var) ? '' : $Var = [];
?>

<div class="content-xs">cross</div>
<div class="paragraph"></div>

@component('zJJ.DEV._wrap.menuTag', ['id_package' => $id_package, 'css' => $css ?? ''])
<li {!!in_array('cross', $Var) ? 'class="active"' : ''!!}  data-item='1' data-packagetype='css' data-packagefoo='toggle' package='cross'>
    <span class="a noEvents">cross</span>
</li>
<li {!!in_array('crossS', $Var) ? 'class="active"' : ''!!} data-item='2' data-packagefoo='toggle' data-packagetype='css' package='cross-s'>
    <span class="a noEvents">cross-s</span>
</li>
<li {!!in_array('crossXS', $Var) ? 'class="active"' : ''!!} data-item='3' data-packagefoo='toggle' data-packagetype='css' package='cross-xs'>
    <span class="a noEvents">cross-xs</span>
</li>
<li {!!in_array('crossXXS', $Var) ? 'class="active"' : ''!!} data-item='4' data-packagefoo='toggle' data-packagetype='css' package='cross-xxs'>
    <span class="a noEvents">cross-xxs</span>
</li>
@endcomponent
 