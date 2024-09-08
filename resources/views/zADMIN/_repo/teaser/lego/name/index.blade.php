@php
    $NAME = '';
@endphp

@include('zADMIN._repo.teaser.lego.name.code.switch_name', ['NAME' => $NAME])

<div class="wrap-name / flex cI">
    @include('zADMIN._repo.teaser.lego.name.brick.icoStatus')


    @include('zADMIN._repo.teaser.brick.a_openTag')
        @include('zADMIN._repo.teaser.lego.name.brick.name')
    </a>
</div>
