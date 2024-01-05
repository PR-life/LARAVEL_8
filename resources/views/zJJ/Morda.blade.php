@extends('zJJ._shema.index')
@push('css-body', '-morda ')

@push('10111703')
    @include('_._skeleton.Top')
@endpush


@push('menu')

    <div class="I aura">
        @include('zJJ.menu._tag.morda')
    </div>
    <div class="paragraph"></div>
    <div class="I aura">
        @include('zJJ.menu._tile.sandbox')
    </div>
    <div class="paragraph"></div>
    <div class="I aura">
        @include('zJJ.menu._tile.deep')
    </div>
    <div class="paragraphX2"></div>
    <div class="I aura">
        @include('zJJ.menu._tile.storage')
    </div>
    {{-- <div class="I aura">
        <div class="paragraph"></div>
        @include('zLara.menu.Tile.file')
    </div> --}}
@endpush




{{-- @section('content')
    <div class="I aura [ margin top ]">


        <h2>Дерективы</h2>
        <div class="Grid x3 / Roll_mbl -edge">
            <div class="void">
                @include('zLara._lego.docs.col_1')
            </div>
            <div class="void">
                @include('zLara._lego.docs.col_2')
            </div>
            <div class="void">
                @include('zLara._lego.docs.col_3')
            </div>
        </div>


 
    </div>
@endsection --}}