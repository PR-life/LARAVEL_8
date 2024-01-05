<?
    isset($Var) ? '' : $Var = [];
?>

@component('zLara._lego.dev._wrap.index', ['id_package' => $id_package, 'css' => $css ?? ''])

<li {!!in_array('ico', $Var) ? 'class="active"' : ''!!}  data-item='1' data-packagetype='css' data-packagefoo='toggle' package='-ico'>
    <span class="noEvents">-ico</span>
</li>

<li {!!in_array('icoS', $Var) ? 'class="active"' : ''!!}  data-item='2' data-packagetype='css' data-packagefoo='toggle' package='--icoS'>
    <span class="noEvents">--icoS</span>
</li>

<li {!!in_array('icoXS', $Var) ? 'class="active"' : ''!!}  data-item='3' data-packagetype='css' data-packagefoo='toggle' package='--icoXS'>
    <span class="noEvents">--icoXS</span>
</li>


<li {!!in_array('icoLeft', $Var) ? 'class="active"' : ''!!}  data-item='4' data-packagetype='css' data-packagefoo='toggle' package='ico-left'>
    <span class="noEvents">ico-left</span>
</li>

<li {!!in_array('icoOut ', $Var) ? 'class="active"' : ''!!}  data-item='5' data-packagetype='css' data-packagefoo='toggle' package='ico-out'>
    <span class="noEvents">ico-out</span>
</li>

<li {!!in_array('icoCenter ', $Var) ? 'class="active"' : ''!!}  data-item='6' data-packagetype='css' data-packagefoo='toggle' package='ico-center'>
    <span class="noEvents">ico-center</span>
</li>







<li {!!in_array('-space', $Var) ? 'class="active"' : ''!!} data-item='7' data-packagefoo='toggle' data-packagetype='css' package='-space'>
    <span class="noEvents">-space</span>
</li>

<li {!!in_array('-border', $Var) ? 'class="active"' : ''!!} data-item='8' data-packagefoo='toggle' data-packagetype='css' package='-border'>
    <span class="noEvents">-border</span>
</li>


<li {!!in_array('bg', $Var) ? 'class="active"' : ''!!} data-item='9' data-packagefoo='toggle' data-packagetype='css' package='-bg'>
    <span class="noEvents">-bg</span>
</li>
<li {!!in_array('bg2', $Var) ? 'class="active"' : ''!!} data-item='10' data-packagefoo='toggle' data-packagetype='css' package='-bg2'>
    <span class="noEvents">-bg2</span>
</li>
<li {!!in_array('bg3', $Var) ? 'class="active"' : ''!!} data-item='11' data-packagefoo='toggle' data-packagetype='css' package='-bg3'>
    <span class="noEvents">-bg3</span>
</li>
<li {!!in_array('bgGrey', $Var) ? 'class="active"' : ''!!} data-item='12' data-packagefoo='toggle' data-packagetype='css' package='-bgGrey'>
    <span class="noEvents">-bgGrey</span>
</li>
<li {!!in_array('bgGreen', $Var) ? 'class="active"' : ''!!} data-item='13' data-packagefoo='toggle' data-packagetype='css' package='-bgGreen'>
    <span class="noEvents">-bgGreen</span>
</li>
<li {!!in_array('bgRed', $Var) ? 'class="active"' : ''!!} data-item='14' data-packagefoo='toggle' data-packagetype='css' package='-bgRed'>
    <span class="noEvents">-bgRed</span>
</li>


 

<li {!!in_array('vol2', $Var) ? 'class="active"' : ''!!} data-item='15' data-packagefoo='toggle' data-packagetype='css' package='vol-2'>
    <span class="noEvents">vol-2</span>
</li>
{{-- <li {!!in_array('vol2', $Var) ? 'class="active"' : ''!!} data-item='2' data-packagefoo='toggle' data-packagetype='css' package='vol-2'>
    <span class="noEvents">vol-2</span>
</li> --}}

 
@endcomponent
 