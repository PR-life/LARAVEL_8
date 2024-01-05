@extends('zJJ.PAGE.text._shema.index')



@section('content')
    <div class="I aura [ margin top ]">


        <div class="Article [ margin bottom S ]">
            <div class="Wings">
                <div class="_win -t">
                    <div class="inline">
                        <div class="Badge -blue c2">
                            <div>Tutorials</div>
                            October 11th, 2022
                        </div>
                    </div>
                    <div class="paragraph-s"></div>
                </div>
            </div>
            @include('zJJ.PAGE._lego.Font.index', ['id' => 'Font_29111325'])
        </div>
    
{{-- 
        @component('zLara.PAGE.sandbox._lego.toolBox', ['id' => '17061418'])

            @slot('id_package', 'Font')

            <div>
                <div class="content-xs">Font</div>
                <div class="paragraph-s"></div>
                @include('zLara._lego.dev.Font.index',['id_package' => 'Font', 'Var' => ['void']])
                @include('zLara._lego.dev.Font.h',['id_package' => 'FontH', 'Var' => ['h']])
                @include('zLara._lego.dev.Font.p',['id_package' => 'FontP', 'Var' => ['p']])
            </div>	

    
        @endcomponent --}}


        @component('zJJ.DEV._wrap.wrap', ['id' => '15061245', 'css' => ''])
        <?
        $id = 'Font_29111325';
        ?>
        
        <div class="_l">
            <div class="flex / cross">
                <div>
                    @include('zJJ.DEV.tool.lib.Font', ['id_package' => $id, 'Var' => ['Font']])
                </div>
                {{-- <div>
                    @include('zJJ.DEV.tool.menuTag', ['id_package' => $id, 'Var' => ['tag']])
                </div> --}}
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
            @include('zJJ.DEV.tool.void', ['id_package' => $id, 'Var' => ['void']])
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
        







 
    </div>
@endsection