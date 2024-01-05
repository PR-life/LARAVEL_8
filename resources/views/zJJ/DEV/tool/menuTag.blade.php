<?
    isset($Var) ? '' : $Var = [];
?>

<div class="content-xs">menuTag</div>
<div class="paragraph"></div>

@component('zJJ.DEV._wrap.menuTag', ['id_package' => $id_package, 'css' => $css ?? ''])
<li {!!in_array('tag', $Var) ? 'class="active"' : ''!!} data-item='1' data-packagetype='css' data-packagefoo='toggle' package='-tag'>
    <span class="a / noEvents">-tag</span>
</li>
<li {!!in_array('tag80', $Var) ? 'class="active"' : ''!!} data-item='2' data-packagefoo='toggle' data-packagetype='css' package='-tag80'>
    <span class="a / noEvents">-tag80</span>
</li>
@endcomponent

 
