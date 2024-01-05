@extends('zJJ._shema.aside')
@section('title', 'HTML ')
@push('css-body', '-html ')


@push('aside_10111826')
    @include('zJJ.menu.html.index')
@endpush




@section('content')
<div class="Pente aura / Edge -SPC"> 
    <div class="inline">
        @component('zJJ.PAGE.html.nav.lego.menuKite')
            @slot('id', '10112054')
            @slot('css', '-shadow -round kite-spaceM / Round')
            @slot('name_1', 'Домашняя')
            @slot('name_2', 'Профессиональная')
        @endcomponent
    </div>
</div>


@component('zJJ.DEV._wrap.wrap', ['id' => '15061245', 'css' => ''])
<?
$id = 'menu_10112054';
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




<div class="Pente aura / margin top">
    <div class="inline">
        <div class="space-l" style="background-color: #f2f3f7">
            <ul class="x2910 / menu -tag / Kite kite-round" data-click="" data-switch="">
                <li class="active" data-item="1">
                    <a class="block Ellipsis / noEvents" href="/equipment/apk/dl-home"><span class="Ellipsis">Домашняя</span></a>
                </li>
                <li data-item="2">
                    <a class="block Ellipsis / noEvents" href="/equipment/apk/dl"><span class="Ellipsis">Профессиональная</span></a>
                </li>
            </ul>
    
            <style>
                .menu.-tag.Kite.x2910 {
                    --bg-menu-kite:#eaedf1;
                    --bg-menu:transparent;
                    --bg-menu-hover:transparent;
                }
    
                .x2810 li.active {
                    box-shadow: 0 8px 20px rgba(117,115,111,.2);
                }
    
                .x2910 {
                    padding: 6px 1px 3px 6px;
                    box-shadow: inset 0.2rem 0.2rem 0 0 rgba(255, 255, 255, 0.9), 0.4rem 0.4rem 0.8rem rgba(210, 220, 233, 0.8), -0.5rem -0.5rem 1rem #fff;
                }
            </style>
        </div>
    </div>
</div>







<div class="I aura / flex cross">
    <div class="Wagon -h -w / Bg -gif -samolet / index active pointer" data-click data-css data-toggle='active'></div>
    <div class="Wagon -h -w / Bg -samolet samolet-hover / index"></div>
</div>


@endsection



