<?
    isset($Var) ? '' : $Var = [];
?>

<div class="content-xs">sandbox</div>
<div class="paragraph"></div>

@component('zJJ.DEV._wrap.menuTag', ['id_package' => $id_package, 'css' => $css ?? ''])
<li {!!in_array('chirality', $Var) ? 'class="active"' : ''!!} data-item='1' data-packagetype='css' data-packagefoo='toggle' package='chirality'>
    <span class="a / noEvents">chirality</span>
</li>
@endcomponent
 