<?
    isset($Var) ? '' : $Var = [];
?>

<div class="content-xs">Roll</div>
<div class="paragraph"></div>
@component('zLara._lego.dev._wrap.index', ['id_package' => $id_package, 'css' => $css ?? ''])
<li {!!in_array('RollPC', $Var) ? 'class="active"' : ''!!}  data-item='1' data-packagetype='css' data-packagefoo='toggle' package='Roll_PC'>
    <span class="a / noEvents">Roll_PC</span>
</li>
<li {!!in_array('Roll80', $Var) ? 'class="active"' : ''!!}  data-item='2' data-packagetype='css' data-packagefoo='toggle' package='Roll_80'>
    <span class="a / noEvents">Roll_80</span>
</li>
<li {!!in_array('Rollmbl', $Var) ? 'class="active"' : ''!!}  data-item='3' data-packagetype='css' data-packagefoo='toggle' package='Roll_mbl'>
    <span class="a / noEvents">Roll_mbl</span>
</li>
@endcomponent

@component('zLara._lego.dev._wrap.index', ['id_package' => $id_package, 'css' => $css ?? ''])
<li {!!in_array('scrollBar', $Var) ? 'class="active"' : ''!!}  data-item='1' data-packagetype='css' data-packagefoo='toggle' package='-scrollBar'>
    <span class="a / noEvents">-scrollBar</span>
</li>
<li {!!in_array('scrollBarPC', $Var) ? 'class="active"' : ''!!}  data-item='2' data-packagetype='css' data-packagefoo='toggle' package='-scrollBarPC'>
    <span class="a / noEvents">-scrollBarPC</span>
</li>
<li {!!in_array('space', $Var) ? 'class="active"' : ''!!}  data-item='3' data-packagetype='css' data-packagefoo='toggle' package='-space'>
    <span class="a / noEvents">-space</span>
</li>
<li {!!in_array('spaceM', $Var) ? 'class="active"' : ''!!}  data-item='3' data-packagetype='css' data-packagefoo='toggle' package='-spaceM'>
    <span class="a / noEvents">-spaceM</span>
</li>
<li {!!in_array('edge', $Var) ? 'class="active"' : ''!!}  data-item='4' data-packagetype='css' data-packagefoo='toggle' package='-edge'>
    <span class="a / noEvents">-edge</span>
</li>
<li {!!in_array('edgePC', $Var) ? 'class="active"' : ''!!}  data-item='5' data-packagetype='css' data-packagefoo='toggle' package='-edgePC'>
    <span class="a / noEvents">-edgePC</span>
</li>
<li {!!in_array('edgeS', $Var) ? 'class="active"' : ''!!}  data-item='5' data-packagetype='css' data-packagefoo='toggle' package='-edgeS'>
    <span class="a / noEvents">-edgeS</span>
</li>
<li {!!in_array('edgeSPC', $Var) ? 'class="active"' : ''!!}  data-item='5' data-packagetype='css' data-packagefoo='toggle' package='-edgeSPC'>
    <span class="a / noEvents">-edgeSPC</span>
</li>
<li {!!in_array('edgeMbl', $Var) ? 'class="active"' : ''!!}  data-item='5' data-packagetype='css' data-packagefoo='toggle' package='-edgeMbl'>
    <span class="a / noEvents">-edgeMbl</span>
</li>
<li {!!in_array('edgeM', $Var) ? 'class="active"' : ''!!}  data-item='5' data-packagetype='css' data-packagefoo='toggle' package='-edgeM'>
    <span class="a / noEvents">-edgeM</span>
</li>
<li {!!in_array('edgeMMbl', $Var) ? 'class="active"' : ''!!}  data-item='5' data-packagetype='css' data-packagefoo='toggle' package='-edgeMMbl'>
    <span class="a / noEvents">-edgeMMbl</span>
</li>

<li {!!in_array('Tool', $Var) ? 'class="active"' : ''!!}  data-item='5' data-packagetype='css' data-packagefoo='toggle' package='Tool'>
    <span class="a / noEvents">Tool</span>
</li>
<li {!!in_array('Tool', $Var) ? 'class="active"' : ''!!}  data-item='6' data-packagetype='css' data-packagefoo='toggle' package='Tool'>
    <span class="a / noEvents">Tool</span>
</li>
@endcomponent