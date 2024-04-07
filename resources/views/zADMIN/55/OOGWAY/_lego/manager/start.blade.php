 

<div class="margin top bottom S">

<div class="Blog / Chat -entropy / Entropy Void Edge">


    <div class="Q -M / face face-padding face-top" data-click="" data-css="" data-toggle="On">
        <div class="_wrap relative">
            <div class="content / Void / lineClamp var-3 owl-lineClamp / pointer">
                <p>
                    Андрей Владимирович, предлагаю запустить рекламную компанию в Я.Директ в регионе "Пятигорск" под текущие мероприятие
                </p>
            </div>
        </div>
        <div class="Preamble -row -S">
            <div class="content-s">Алексей, <span class="Grey -c50">fullstack-разработчик</span></div>
            <div class="content-s / Grey">
                07.08, 23:03
            </div>
        </div>
    </div>

    <div class="paragraphX2"></div>

    <div class="Manager -border / space round / Blog"> 

        <div class="face face-padding Face">
    

        <div class="Preamble / face face-s face-out id-2">
            <div class="author">
                Андрей Владимирович
            </div>
            <div class="content-xs Grey -c50">
                руководство
            </div>
        </div>
    
        <div class="paragraph"></div>
    
        <div class="flex -wrap cross cloud">
            @component('zADMIN._wrap.form.btn', ['route' => route('admin.oogway.manager.btn', $oogway->id)])
                <input type="hidden" name="id" value="{{$oogway->id}}">
                <input type="hidden" name="status" value="200">
                <button class="Btn cC -green / round-s b600">Да, в работу</button>
            @endcomponent
            @component('zADMIN._wrap.form.btn', ['route' => route('admin.oogway.manager.btn', $oogway->id)])
                <input type="hidden" name="id" value="{{$oogway->id}}">
                <input type="hidden" name="status" value="404">
                <button class="Btn cC -red / round-s b600">отменить</button>
            @endcomponent
            @component('zADMIN._wrap.form.btn', ['route' => route('admin.oogway.manager.btn', $oogway->id)])
                <input type="hidden" name="id" value="{{$oogway->id}}">
                <input type="hidden" name="status" value="302">
                <button class="Btn cC -yellow / round-s b600">затрудняюсь с ответом, нужно больше данных, подготовь ТЗ</button>
            @endcomponent
        </div>
    
        </div>
    
    
    </div>


</div>

</div>  

<div class="paragraphX2"></div>



 


 