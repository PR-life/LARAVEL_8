<?
    isset($Var) ? '' : $Var = [];
?>

<div class="content-xs">size</div>
<div class="paragraph"></div>

@component('zJJ.DEV._wrap.menuTag', ['id_package' => $id_package, 'css' => $css ?? ''])
<li {!!in_array('XS', $Var) ? 'class="active"' : ''!!}  data-item='1' data-packagetype='css' data-packagefoo='toggle' package='-XS'>
    <span class="a / noEvents">-XS</span>
</li>
<li {!!in_array('S', $Var) ? 'class="active"' : ''!!} data-item='2' data-packagefoo='toggle' data-packagetype='css' package='-S'>
    <span class="a / noEvents">-S</span>
</li>
<li {!!in_array('M', $Var) ? 'class="active"' : ''!!} data-item='3' data-packagefoo='toggle' data-packagetype='css' package='-M'>
    <span class="a / noEvents">-M</span>
</li>
<li {!!in_array('L', $Var) ? 'class="active"' : ''!!} data-item='4' data-packagefoo='toggle' data-packagetype='css' package='-L'>
    <span class="a / noEvents">-L</span>
</li>
<li {!!in_array('XL', $Var) ? 'class="active"' : ''!!} data-item='5' data-packagefoo='toggle' data-packagetype='css' package='-XL'>
    <span class="a / noEvents">-XL</span>
</li>
<li {!!in_array('Min', $Var) ? 'class="active"' : ''!!} data-item='6' data-packagefoo='toggle' data-packagetype='css' package='Min'>
    <span class="a / noEvents">Min</span>
</li>
<li {!!in_array('Max', $Var) ? 'class="active"' : ''!!} data-item='7' data-packagefoo='toggle' data-packagetype='css' package='Max'>
    <span class="a / noEvents">Max</span>
</li>
@endcomponent

 
 