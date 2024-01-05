<?
    isset($Var) ? '' : $Var = [];
?>

<div class="content-xs">cross</div>
<div class="paragraph"></div>

@component('zJJ.DEV._wrap.menuTag', ['id_package' => $id_package, 'css' => $css ?? ''])
<li {!!in_array('face', $Var) ? 'class="active"' : ''!!}  data-item='1' data-packagetype='css' data-packagefoo='toggle' package='face'>
    <span class="noEvents">face</span>
</li>
<li {!!in_array('face-bottom', $Var) ? 'class="active"' : ''!!} data-item='2' data-packagefoo='toggle' data-packagetype='css' package='face-bottom'>
    <span class="noEvents">face-bottom</span>
</li>
<li {!!in_array('face-top', $Var) ? 'class="active"' : ''!!} data-item='3' data-packagefoo='toggle' data-packagetype='css' package='face-top'>
    <span class="noEvents">face-top</span>
</li>
<li {!!in_array('face-xs', $Var) ? 'class="active"' : ''!!} data-item='4' data-packagefoo='toggle' data-packagetype='css' package='face-xs'>
    <span class="noEvents">face-xs</span>
</li>
<li {!!in_array('face-s', $Var) ? 'class="active"' : ''!!} data-item='5' data-packagefoo='toggle' data-packagetype='css' package='face-s'>
    <span class="noEvents">face-s</span>
</li>
<li {!!in_array('face-m', $Var) ? 'class="active"' : ''!!} data-item='6' data-packagefoo='toggle' data-packagetype='css' package='face-m'>
    <span class="noEvents">face-m</span>
</li>
<li {!!in_array('face-padding', $Var) ? 'class="active"' : ''!!} data-item='7' data-packagefoo='toggle' data-packagetype='css' package='face-padding'>
    <span class="noEvents">face-padding</span>
</li>
<li {!!in_array('face-out', $Var) ? 'class="active"' : ''!!} data-item='8' data-packagefoo='toggle' data-packagetype='css' package='face-out'>
    <span class="noEvents">face-out</span>
</li>
<li {!!in_array('face-none', $Var) ? 'class="active"' : ''!!} data-item='9' data-packagefoo='toggle' data-packagetype='css' package='face-none'>
    <span class="noEvents">face-none</span>
</li>
@endcomponent
 