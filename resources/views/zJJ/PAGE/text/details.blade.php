@extends('zJJ.PAGE.text._shema.index')


@section('content')
    <div class="I aura [ margin top bottom ]">
        <div id="Details" class="Details -line -edge -M / slim transparent">
            @include('_.demo.text.details', ['css' => ''])
        </div>

        <div>
            <div class="content-xs">Dl</div>
            <div class="paragraph-s"></div>
            @include('zJJ.DEV.tool.lib.details',['id_package' => 'Details', 'Var' => ['line','edge']])
        </div>

    </div>
@endsection