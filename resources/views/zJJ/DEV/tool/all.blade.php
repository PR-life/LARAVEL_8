<?
    isset($Var) ? '' : $Var = [];
?>

<div class="content-xs">ALL</div>
<div class="paragraph"></div>

@component('zJJ.DEV._wrap.menuTag', ['id_package' => $id_package, 'css' => $css ?? ''])
<li {!!in_array('lie', $Var) ? 'class="active"' : ''!!} data-item='1' data-packagetype='css' data-packagefoo='toggle' package='lie'>
    <span class="a / noEvents">lie</span>
</li>
<li {!!in_array('slim', $Var) ? 'class="active"' : ''!!} data-item='2' data-packagefoo='toggle' data-packagetype='css' package='slim'>
    <span class="a / noEvents">slim</span>
</li>
<li {!!in_array('wide', $Var) ? 'class="active"' : ''!!} data-item='3' data-packagefoo='toggle' data-packagetype='css' package='wide'>
    <span class="a / noEvents">wide</span>
</li>
<li {!!in_array('cloud', $Var) ? 'class="active"' : ''!!} data-item='4' data-packagefoo='toggle' data-packagetype='css' package='cloud'>
    <span class="a / noEvents">cloud</span>
</li>
@endcomponent