@extends('zJJ._shema.aside')
@section('title', 'HTML ')
@push('css-body', '-html ')


@push('aside_10111826')
    @include('zJJ.menu.html.index')
@endpush




@section('content')
<div class="Pente aura / Edge -SPC"> 
    <div class="inline">
        <div class="Btn cC">button</div>
    </div>
</div>


@component('zJJ.DEV._wrap.wrap', ['id' => '28111605', 'css' => ''])
<?
$id = 'menu_28111603';
?>

<div class="_l">
    <div class="flex / cross">
        <div>
            @include('zJJ.DEV.tool.menu', ['id_package' => $id])
        </div>
        <div>
            @include('zJJ.DEV.tool.menuTag', ['id_package' => $id, 'Var' => ['tag']])
        </div>
    </div>
    <div class="paragraphX2"></div>
    @include('zJJ.DEV.tool.vol', ['id_package' => $id])
    <div class="paragraphX2"></div>
    <div class="hMin">Skill</div>
    <div id="css_tool_skill" class="OnOff / space" data-click data-css data-toggle='on' data-localstorage localstorage-id>
        @include('zJJ.DEV._brick.Close')
        <div class="_open space" data-stopclick>
            @include('zJJ.DEV.tool.skill.Roll', ['id_package' => $id])
            <div class="paragraphX2"></div>
        </div>
    </div>
    @include('zJJ.DEV.tool.CLASS', ['id_package' => $id])
</div>

<div class="_r">
    @include('zJJ.DEV.tool.size', ['id_package' => $id])
    <div class="paragraphX2"></div>
    @include('zJJ.DEV.tool.all', ['id_package' => $id])
    <div class="paragraph"></div>
    @include('zJJ.DEV.tool.cross', ['id_package' => $id])
    <div class="paragraph"></div>
    @include('zJJ.DEV.tool.round', ['id_package' => $id])
    <div class="paragraph"></div>
    @include('zJJ.DEV.tool.space', ['id_package' => $id])
    <div class="paragraph"></div>
    @include('zJJ.DEV.tool.text', ['id_package' => $id])
    <div class="paragraph"></div>
    @include('zJJ.DEV.tool.color', ['id_package' => $id])
    <div class="paragraph"></div>
    @include('zJJ.DEV.tool.shadow', ['id_package' => $id])
    <div class="paragraph"></div>
    @include('zJJ.DEV.tool._sandbox', ['id_package' => $id])
</div>
 
@endcomponent


 
@endsection



