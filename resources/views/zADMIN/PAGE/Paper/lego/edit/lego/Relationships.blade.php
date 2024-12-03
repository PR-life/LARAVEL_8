@switch(class_basename($paper))
    @case('Paper')
        @include('zADMIN.PAGE.Paper.lego.edit.lego.Relationships.Paper')
        @break
    @case('Telegram')
        @include('zADMIN.PAGE.Paper.lego.edit.lego.Relationships.Telegram')
        @break
    @default
    
@endswitch



 