
@include('zADMIN._repo.teaser.brick.a_openTag', ['css16041455' => 'flex -wrap / h / cloud cross-xs'])
 
 



{{-- <a class="flex -wrap / h / cloud cross-xs" href="{{ 
    route('admin.'.mb_strtolower(class_basename($Var)).'.edit', ['tag' => $Var->id, 'schema' => $schema ?? null])
    }}"> --}}
    
        <span class="flex / cross-xxs">
            @if(isset($Var->group_id))
			    <span>[ {{$Var->group->name}} ]</span>
		    @endif
            <span>{!!$Var->name!!}</span>
            <span class="none En -on">{!!$Var->en_name!!}</span>
        </span>
    


        @if($Var->name_2)
            <span class="content-xxs / space-s round-s / Grey replica">{!!$Var->name_2!!} <span class="none En -on">{!!$Var->en_name_2!!}</span></span>
        @endif
        @if($Var->name_3)
            <span class="content-xxs / space-s round-s / Grey replica">{!!$Var->name_3!!} <span class="EN Grey -c30">{!!$Var->en_name_3!!}</span></span>
        @endif
        @if($Var->name_4)
            <span class="content-xxs / space-s round-s / Grey replica">{!!$Var->name_4!!} <span class="EN Grey -c30">{!!$Var->en_name_4!!}</span></span>
        @endif
        @if($Var->name_5)
            <span class="content-xxs / space-s round-s / Grey replica">{!!$Var->name_5!!} <span class="EN Grey -c30">{!!$Var->en_name_5!!}</span></span>
        @endif
        @if($Var->name_6)
            <span class="content-xxs / space-s round-s / Grey replica">{!!$Var->name_6!!} <span class="EN Grey -c30">{!!$Var->en_name_6!!}</span></span>
        @endif
        @if($Var->name_7)
            <span class="content-xxs / space-s round-s / Grey replica">{!!$Var->name_7!!} <span class="EN Grey -c30">{!!$Var->en_name_7!!}</span></span>
        @endif
        @if($Var->name_8)
            <span class="content-xxs / space-s round-s / Grey replica">{!!$Var->name_8!!} <span class="EN Grey -c30">{!!$Var->en_name_8!!}</span></span>
        @endif
        {{-- @include('zADMIN.combine.Teaser._wrap.ellipsis.name_plus_h2',['Var' => $Var->name ?? $Var->created_at]) --}}
    </a>
    