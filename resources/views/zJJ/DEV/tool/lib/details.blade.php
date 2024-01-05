<?
    isset($Var) ? '' : $Var = [];
?>

@component('zLara._lego.dev._wrap.index', ['id_package' => $id_package, 'css' => $css ?? ''])
<li {!!in_array('bg', $Var) ? 'class="active"' : ''!!}  data-item='1' data-packagetype='css' data-packagefoo='toggle' package='-bg'>
    <span class="noEvents">-bg</span>
</li>
<li {!!in_array('edge', $Var) ? 'class="active"' : ''!!} data-item='2' data-packagefoo='toggle' data-packagetype='css' package='-edge'>
    <span class="noEvents">-edge</span>
</li>
<li {!!in_array('edgeSummary', $Var) ? 'class="active"' : ''!!} data-item='3' data-packagefoo='toggle' data-packagetype='css' package='-edgeSummary'>
    <span class="noEvents">-edgeSummary</span>
</li>
<li {!!in_array('edgeIco', $Var) ? 'class="active"' : ''!!} data-item='4' data-packagefoo='toggle' data-packagetype='css' package='-edgeIco'>
    <span class="noEvents">-edgeIco</span>
</li>
<li {!!in_array('edgeI', $Var) ? 'class="active"' : ''!!} data-item='5' data-packagefoo='toggle' data-packagetype='css' package='-edgeI'>
    <span class="noEvents">-edgeI</span>
</li>
<li {!!in_array('edge_mbl', $Var) ? 'class="active"' : ''!!} data-item='6' data-packagefoo='toggle' data-packagetype='css' package='-edge_mbl'>
    <span class="noEvents">-edge_mbl</span>
</li>
<li {!!in_array('rightM', $Var) ? 'class="active"' : ''!!} data-item='7' data-packagefoo='toggle' data-packagetype='css' package='-rightM'>
    <span class="noEvents">-rightM</span>
</li>
<li {!!in_array('rightM', $Var) ? 'class="active"' : ''!!} data-item='8' data-packagefoo='toggle' data-packagetype='css' package='-rightM'>
    <span class="noEvents">-rightM</span>
</li>
<li {!!in_array('rightM', $Var) ? 'class="active"' : ''!!} data-item='9' data-packagefoo='toggle' data-packagetype='css' package='-rightM'>
    <span class="noEvents">-rightM</span>
</li>



<li {!!in_array('shiftLeftPC', $Var) ? 'class="active"' : ''!!} data-item='10' data-packagefoo='toggle' data-packagetype='css' package='-shiftLeftPC'>
    <span class="noEvents">-shiftLeftPC</span>
</li>
<li {!!in_array('shiftLeftI', $Var) ? 'class="active"' : ''!!} data-item='11' data-packagefoo='toggle' data-packagetype='css' package='-shiftLeftI'>
    <span class="noEvents">-shiftLeftI</span>
</li>




<li {!!in_array('line', $Var) ? 'class="active"' : ''!!} data-item='12' data-packagefoo='toggle' data-packagetype='css' package='-line'>
    <span class="noEvents">-line</span>
</li>
<li {!!in_array('lineFlip', $Var) ? 'class="active"' : ''!!} data-item='13' data-packagefoo='toggle' data-packagetype='css' package='line-flip'>
    <span class="noEvents">line-flip</span>
</li>
<li {!!in_array('lineStopFirst', $Var) ? 'class="active"' : ''!!} data-item='14' data-packagefoo='toggle' data-packagetype='css' package='line-stop--first'>
    <span class="noEvents">line-stop--first</span>
</li>


<li {!!in_array('summaryS', $Var) ? 'class="active"' : ''!!} data-item='15' data-packagefoo='toggle' data-packagetype='css' package='-summaryS'>
    <span class="noEvents">-summaryS</span>
</li>
<li {!!in_array('detailsArrowLeft', $Var) ? 'class="active"' : ''!!} data-item='15' data-packagefoo='toggle' data-packagetype='css' package='details-arrow-left'>
    <span class="noEvents">details-arrow-left</span>
</li>
 
@endcomponent

{{-- <li {!!in_array('lineHeight', $Var) ? 'class="active"' : ''!!} data-item='2' data-packagefoo='toggle' data-packagetype='css' package='-lineHeight'>
    <span class="noEvents">-lineHeight</span>
</li> --}}