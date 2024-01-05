@extends('_shema.Aside', ['linkCssMin' => '/css/minAdmin.css', 'linkCssApp' => '/css/appAdmin.css', 'cssMilk' => 'skimp-size_Aside'])
@include('zADMIN._shema._brick.src')

@push('css-body', 'x-aside Design x-Admin ')

@push('style')
.oneLine br{
	display:none;
}
@endpush

@push('Bar')
    @include('zADMIN._skeleton.Bar.admin')
@endpush

@push('bottomAfter')
    <div class="Plot Bg -gif55"></div>
@endpush

@section('top')
<div id="Top" class="Top -h / flex bC cI space-left / Goo -t / bg _indexMax">
    <div class="_l">
        <ul class="Bread / flex">
            <li>
                <a href="/admin">
                    <span class="content-xs">Главная</span>
                </a>
            </li>
            @stack('addBread')
        </ul>
    </div>
    <div class="_r / flex cross-xs / Edge-rightS">




 
        <div class="flex x-20101136 / OnOff" check-localstorage='filter_tags_1' data-check='active' param='on'>
            <div class="_open / pointer" data-click data-css data-node='parent' data-toggle='on'>
                <div data-click data-css data-node='filter_tags_1' data-toggle='Block'>
                    <div class="content" data-click data-remove="active" data-localstorage localstorage-name='filter_tags_1'>
                        <svg viewBox="0 0 24 24" fill="none">
                            <path stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M3 4.6C3 4.03995 3 3.75992 3.10899 3.54601C3.20487 3.35785 3.35785 3.20487 3.54601 3.10899C3.75992 3 4.03995 3 4.6 3H19.4C19.9601 3 20.2401 3 20.454 3.10899C20.6422 3.20487 20.7951 3.35785 20.891 3.54601C21 3.75992 21 4.03995 21 4.6V6.33726C21 6.58185 21 6.70414 20.9724 6.81923C20.9479 6.92127 20.9075 7.01881 20.8526 7.10828C20.7908 7.2092 20.7043 7.29568 20.5314 7.46863L14.4686 13.5314C14.2957 13.7043 14.2092 13.7908 14.1474 13.8917C14.0925 13.9812 14.0521 14.0787 14.0276 14.1808C14 14.2959 14 14.4182 14 14.6627V17L10 21V14.6627C10 14.4182 10 14.2959 9.97237 14.1808C9.94787 14.0787 9.90747 13.9812 9.85264 13.8917C9.7908 13.7908 9.70432 13.7043 9.53137 13.5314L3.46863 7.46863C3.29568 7.29568 3.2092 7.2092 3.14736 7.10828C3.09253 7.01881 3.05213 6.92127 3.02763 6.81923C3 6.70414 3 6.58185 3 6.33726V4.6Z"/>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="_off / notActive pointer" data-click data-css data-node='parent' data-toggle='on'>
                <div data-click data-css data-node='filter_tags_1' data-toggle='Block'>
                    <div class="content" data-click data-add="active" data-localstorage localstorage-name='filter_tags_1'>
                        <svg viewBox="0 0 24 24" fill="none">
                            <path stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M15 15L21 21M21 15L15 21M10 21V14.6627C10 14.4182 10 14.2959 9.97237 14.1808C9.94787 14.0787 9.90747 13.9812 9.85264 13.8917C9.7908 13.7908 9.70432 13.7043 9.53137 13.5314L3.46863 7.46863C3.29568 7.29568 3.2092 7.2092 3.14736 7.10828C3.09253 7.01881 3.05213 6.92127 3.02763 6.81923C3 6.70414 3 6.58185 3 6.33726V4.6C3 4.03995 3 3.75992 3.10899 3.54601C3.20487 3.35785 3.35785 3.20487 3.54601 3.10899C3.75992 3 4.03995 3 4.6 3H19.4C19.9601 3 20.2401 3 20.454 3.10899C20.6422 3.20487 20.7951 3.35785 20.891 3.54601C21 3.75992 21 4.03995 21 4.6V6.33726C21 6.58185 21 6.70414 20.9724 6.81923C20.9479 6.92127 20.9075 7.01881 20.8526 7.10828C20.7908 7.2092 20.7043 7.29568 20.5314 7.46863L17 11"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>





        <div class="flex x-20101136 / OnOff" check-localstorage='Filter' data-check='active' param='on'>
            
            <div class="_open / pointer" data-click data-css data-node='parent' data-toggle='on'>
                <div data-click data-css data-node='Filter' data-toggle='Block'>
                    <div class="content" data-click data-remove="active" data-localstorage localstorage-name='Filter'>
                        <svg viewBox="0 0 16 16" fill="none">
                            <path fill="currentColor" d="M10.5 7.2A3.201 3.201 0 0 1 7.46 5H1a1 1 0 0 1 0-2h6.46a3.201 3.201 0 0 1 6.08 0H15a1 1 0 1 1 0 2h-1.46a3.201 3.201 0 0 1-3.04 2.2ZM1 11a1 1 0 0 0 0 2h1.46a3.201 3.201 0 0 0 6.08 0H15a1 1 0 1 0 0-2H8.54a3.201 3.201 0 0 0-6.08 0H1Zm5.9 1a1.4 1.4 0 1 1-2.8 0 1.4 1.4 0 0 1 2.8 0Zm5-8a1.4 1.4 0 1 0-2.8 0 1.4 1.4 0 0 0 2.8 0Z"></path>
                        </svg>
                    </div>
                </div>
            </div>

            <div class="_off / notActive pointer" data-click data-css data-node='parent' data-toggle='on'>
                <div data-click data-css data-node='Filter' data-toggle='Block'>
                    <div class="content" data-click data-add="active" data-localstorage localstorage-name='Filter'>
                        <svg viewBox="0 0 16 16" fill="none">
                            <path fill="currentColor" d="M10.5 7.2A3.201 3.201 0 0 1 7.46 5H1a1 1 0 0 1 0-2h6.46a3.201 3.201 0 0 1 6.08 0H15a1 1 0 1 1 0 2h-1.46a3.201 3.201 0 0 1-3.04 2.2ZM1 11a1 1 0 0 0 0 2h1.46a3.201 3.201 0 0 0 6.08 0H15a1 1 0 1 0 0-2H8.54a3.201 3.201 0 0 0-6.08 0H1Zm5.9 1a1.4 1.4 0 1 1-2.8 0 1.4 1.4 0 0 1 2.8 0Zm5-8a1.4 1.4 0 1 0-2.8 0 1.4 1.4 0 0 0 2.8 0Z"></path>
                        </svg>
                    </div>
                </div>
            </div>    

        </div>


















        {{-- <div class="flex cross-xxs">

 

            <div class="-Btn pointer / space-s round-xs" data-click data-css data-add='active' data-loop data-localstorage localstorage-name='Filter'>
                <div class="Ico -XS / noEvents">

                    
                </div>
            </div>
            <div class="-Btn pointer / space-s round-xs" data-click data-css data-add='active' data-loop data-localstorage localstorage-name='Filter'>
                <div class="Ico -XS / noEvents">

                    
                </div>
            </div>


        </div> --}}

        <div class="flex cI / x-20101136">
            <div class="-Btn pointer / space-xs round-xs / v-EN -off" data-click data-node='body' data-css data-add='EN' data-loop data-localstorage localstorage-name='body'>
                <span class="content-xs / noEvents">En</span>
            </div>
            <div class="-Btn -active pointer / space-xs round-xs / v-EN -on" data-click data-node='body' data-css data-remove='EN' data-loop data-localstorage localstorage-name='body'>
                <span class="content-xs / noEvents">En</span>
            </div>
        </div>
    </div>
</div>
@endsection


@push('milk')

<div id="milkSherpa" class="Aside_2 -menu x-asideClose / Fix HWin / index relative" data-click data-css data-toggle='On'>
    <div class="Abs -rt / Close -white / _indexMax" data-close></div>
    <div class="_wrap / Abs -all" data-stopClick>
        
        <div class="hill"></div>
        <div class="Jolt -r">


            <a class="Chunk cI pr-2" href="/admin/sherpa/excel">
                <div class="_ico / flex eC / Pr -x4">
                    <div class="Ico -S">
                        <svg fill="currentColor" stroke="none" viewBox="0 0 16 16"><path d="m12.73 3.32-2.05-2.05A1.74 1.74 0 0 0 9.45.75H4.5c-.98 0-1.75.8-1.75 1.75V13c0 .98.77 1.75 1.75 1.75h7c.96 0 1.75-.77 1.75-1.75V4.55c0-.46-.2-.9-.52-1.23Zm-.8 9.68c0 .25-.21.44-.43.44h-7a.43.43 0 0 1-.44-.44V2.53c0-.25.2-.44.44-.44h4.38v2.16c0 .5.38.88.87.88h2.16V13h.03ZM5.39 8.4c0 .39.27.66.65.66h3.94c.35 0 .65-.27.65-.65 0-.36-.3-.66-.65-.66H6.03c-.38 0-.66.3-.66.66Zm4.59 1.97H6.03c-.38 0-.66.3-.66.66 0 .38.28.66.66.66h3.94c.35 0 .65-.28.65-.66 0-.35-.3-.65-.65-.65Z"></path></svg>
                    </div>
                </div>
                <div class="_item chunk-100_Ico round-s">
                    <span class="content-s / slctn pointer">Excel</span>         
                </div>
            </a>

            
        </div>
    </div>
</div>
@endpush