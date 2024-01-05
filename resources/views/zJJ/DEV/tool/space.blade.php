<?
    isset($Var) ? '' : $Var = [];
?>

<div class="content-xs">cross</div>
<div class="paragraph"></div>

@component('zJJ.DEV._wrap.menuTag', ['id_package' => $id_package, 'css' => $css ?? ''])
<li {!!in_array('space', $Var) ? 'class="active"' : ''!!} data-item='1' data-packagetype='css' data-packagefoo='toggle' package='space'>
    <span class="a / noEvents">space</span>
</li>
<li {!!in_array('spaceS', $Var) ? 'class="active"' : ''!!} data-item='2' data-packagefoo='toggle' data-packagetype='css' package='space-s'>
    <span class="a / noEvents">space-s</span>
</li>
<li {!!in_array('spaceM', $Var) ? 'class="active"' : ''!!} data-item='3' data-packagefoo='toggle' data-packagetype='css' package='space-m'>
    <span class="a / noEvents">space-m</span>
</li>
<li {!!in_array('spaceL', $Var) ? 'class="active"' : ''!!} data-item='4' data-packagefoo='toggle' data-packagetype='css' package='space-l'>
    <span class="a / noEvents">space-l</span>
</li>
@endcomponent
 