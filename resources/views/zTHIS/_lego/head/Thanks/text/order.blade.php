@php
    $contacts = [
        'phone' => 'Наш менеджер свяжется <br>с вами по номеру <span class="a b600 nowrap">' . $sms->phone . '</span> в ближайшее время в рабочие часы.',
        'email' => 'Данные о заказе будут отправлены на почту <span class="a b600 nowrap">' . $sms->email . '</span>.',
        'whatsapp' => 'Данные о заказе пришлем на whatsapp <span class="a b600 nowrap">' . $sms->whatsapp . '</span>.',
        'telegram' => 'Данные о заказе пришлем в telegram @<span class="a b600 nowrap">' . $sms->telegram . '</span>.',
        'viber' => 'Данные о заказе пришлем на viber <span class="a b600 nowrap">' . $sms->viber . '</span>.'
    ];
@endphp

<div class="p widest">    
    @foreach ($contacts as $key => $message)
        @if (!empty($sms->$key))
            {!! $message !!}
            @break
        @endif
    @endforeach
</div>