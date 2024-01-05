<?
    isset($Var) ? '' : $Var = [];
?>

<div class="content-xs">menu</div>
<div class="paragraph"></div>

@component('zJJ.DEV._wrap.menuTag', ['id_package' => $id_package, 'css' => $css ?? ''])
    <li {!!in_array('block', $Var) ? 'class="active"' : ''!!} data-item='1' data-packagetype='css' data-packagefoo='toggle' package='-block'>
        <span class="a noEvents">-block</span>
    </li>
    <li {!!in_array('void', $Var) ? 'class="active"' : ''!!} data-item='2' data-packagefoo='toggle' data-packagetype='css' package='-void'>
        <span class="a noEvents">-void</span>
    </li>
    <li {!!in_array('round', $Var) ? 'class="active"' : ''!!} data-item='3' data-packagefoo='toggle' data-packagetype='css' package='-round'>
        <span class="a noEvents">-round</span>
    </li>
    <li {!!in_array('roundS', $Var) ? 'class="active"' : ''!!} data-item='4' data-packagefoo='toggle' data-packagetype='css' package='-roundS'>
        <span class="a noEvents">-roundS</span>
    </li>
@endcomponent

 



