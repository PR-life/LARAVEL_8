<div class="flex cI">
    @component('zADMIN._wrap.manager.btn.Top')
        @slot('id_node','filter_tags_1')
        @slot('ico','tags')
    @endcomponent
    @component('zADMIN._wrap.manager.btn.Top')
        @slot('id_node','Filter')
        @slot('ico','filter')
    @endcomponent
</div>


<div class="flex cI / cross-xxs">

    @include('zADMIN._skeleton.manager.brick.btn_shield')
    @include('zADMIN._skeleton.manager.brick.btn_lite')

    <div class="_last">
        @component('zADMIN._wrap.manager.btn.addBody')
            @slot('class_contol','D-En')
            @slot('param','EN')
            @slot('name','En')
        @endcomponent
        @component('zADMIN._wrap.manager.btn.removeBody')
            @slot('class_contol','D-En')
            @slot('param','EN')
            @slot('name','En')
        @endcomponent
    </div>
 
</div>