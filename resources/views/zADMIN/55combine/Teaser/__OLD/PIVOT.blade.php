@component('zADMIN._wrap.Teaser.index', ['Var' => $Var, 'css' => 'space-left'])

    <div class="flex cI / cross-s">


        <div class="_1 flex cC cI Ico">      
            <span class="content-s">{{$Var->task_id}}</span>
        </div>
        <div class="_1 flex cC cI Ico">      
            <span class="content-s">{{$Var->tasks_id}}</span>
        </div>

 

        <div class="W-100"></div>


    </div>
@endcomponent