<div class="space-left / Bee / flex cI bg">

    <div class="flex cI / -Grey / cross-xs">

        <div class="flex cI">
            <div class="Ico / mr-2">
                @svg('oogway')
            </div>

            <div class="h2 -lineHeight / b600 / Article">{{$Var->name ?? 'Управление проектом'}}</div>
        </div>

        @isset($Var->name)
        <div class="flex eI">



            <div class="flex cI / cross-xxs">
                <div class="flex cI cross-xxs / x-opacity pointer">
                    <div class="Ico -XS">
                        @svg('tool')
                    </div>
                    <div class="h -lineHeight / b100">Vol</div>
                </div>
                <div class="h -lineHeight / noEvents">1</div>
            </div>
            <div class="content noEvents">.</div>
            <div class="flex cI / cross-xxs">
                 
                <div class="h -lineHeight / noEvents">0</div>
                <div class="flex cI cross-xxs / x-opacity pointer">
                    <div class="h -lineHeight / b100">version</div>
                    <div class="Ico -XS">
                        @svg('tool')
                    </div>
                </div>
            </div>



        </div>
        @endisset


    </div>


</div>