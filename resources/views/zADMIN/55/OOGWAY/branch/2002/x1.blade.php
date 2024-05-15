@component('_wrap.Flaber.admin.edit')

@slot('flaber')
    {{-- @include('zADMIN.PAGE.Sms.lego.edit.sms')	 --}}
@endslot

 
<div class="Article">
    <div class="text">
        {!!$oogway->text!!}
    </div>
</div>

<div class="paragraphX2"></div>



<div class="Details -M -line">
    <details>
        <summary><span>Итоги</span><i></i></summary>
    </details>
    <details>
        <summary><span>Техническое задание</span><i></i></summary>
    </details>
</div>

{{-- @include('zADMIN.PAGE.Sms.lego.edit.body')	 --}}

@endcomponent




