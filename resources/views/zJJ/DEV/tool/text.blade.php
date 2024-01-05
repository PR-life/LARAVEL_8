<?
    isset($Var) ? '' : $Var = [];
?>

<div class="content-xs">text</div>
<div class="paragraph"></div>

@component('zJJ.DEV._wrap.menuTag', ['id_package' => $id_package, 'css' => $css ?? ''])
<li {!!in_array('lineHeight', $Var) ? 'class="active"' : ''!!} data-item='1' data-packagetype='css' data-packagefoo='toggle' package='-lineHeight'>
    <span class="a / noEvents">-lineHeight</span>
</li>
@endcomponent
