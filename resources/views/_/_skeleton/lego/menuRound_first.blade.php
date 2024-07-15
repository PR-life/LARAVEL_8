@component('_._skeleton.wrap.menuRound', ['cssMenuRound_wrap' => 'flex cI W-100 / Hover pointer / off'])
@slot('loop1105','first')
@slot('name1105','Меню')

@slot('data')
data-click data-css data-toggle='On Off' data-node='wrap_MenuRound'
@endslot

@slot('burger11051411')
    <span class="Burger / flex cI cC / mr-3">
        <span class="_burger">
            <span class="_1 noEvents"></span>
            <span class="_2 noEvents"></span>
            <span class="_3 noEvents"></span>
        </span>
    </span>
@endslot

@slot('ico11051411')
    <div class="off / Ico -S / space-s contentBox ">
        @svg('arrow')
    </div>
    <div class="none on / Ico -XS / space-s contentBox">
        @svg('close')
    </div>
@endslot

@endcomponent
