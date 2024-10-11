@switch($sms->label)
    @case('order')
        @include('zTHIS.PAGE.Thanks.head.order')
        @break

    @case('callback')
        {{-- @include('zTHIS.PAGE.Thanks.head.index') --}}
        @break

    @case('ask')
        {{-- @include('zTHIS.PAGE.Thanks.head.index') --}}
        @break

    @default
        @include('zTHIS.PAGE.Thanks.head.index')
@endswitch