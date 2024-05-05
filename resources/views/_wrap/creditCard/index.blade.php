<div class="item / CreditCard dimension-CreditCard {{$cssCreditCard ?? 'Bg -gif'}} / round / relative">
    @include('_._brick.img.creditCard', ['css' => ''])
    <div class="Abs -all / flex dC bC / _indexMax">
        {!!$slot!!}
    </div>
</div>