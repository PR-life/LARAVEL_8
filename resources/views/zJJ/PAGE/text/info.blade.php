@extends('zJJ.PAGE.text._shema.index')


@section('content')
    <div class="I aura [ margin top bottom ]">

        <div id="Info" class="Info -ico ico-left / Max">
            <span class="content">
                Но окончательный диагноз может поставить только врач!
            </span>
       </div>
 
        <div>
            <div class="content-xs">face</div>
            <div class="paragraph-s"></div>
            @include('zJJ.DEV.tool.lib.info',['id_package' => 'Info', 'Var' => ['ico','icoLeft']])
        </div>

    </div>
@endsection