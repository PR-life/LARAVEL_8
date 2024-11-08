@switch($sms->label)
    @case('order')
        @include('zTHIS.PAGE.Thanks.head.order')
        @break

    @case('availability_check')
        @include('zTHIS.PAGE.Thanks.head.availability_check')
        @break

    @case('callback')
        @include('zTHIS.PAGE.Thanks.head.callback')
        @break

    @case('quiz')
        @include('zTHIS.PAGE.Thanks.head.callback')
        @break

    @case('ask')
        @include('zTHIS.PAGE.Thanks.head.ask')
        @break


    @default
        @include('zTHIS.PAGE.Thanks.head.index')
@endswitch