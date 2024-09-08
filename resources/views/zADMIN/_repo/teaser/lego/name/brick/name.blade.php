<span class="_name / flex cI cross-xxs">
    @if($Var->mockup)
    <span class="_mockup">MOCKUP:{{$Var->mockup}}</span>
    @endif
    @if($Var->group_id)
    <span class="_mockup">[ {{$Var->group->name}} ]</span>
    @endif
    @include('_wrap._text.ellipsis.name',['Var' => $NAME])
    <span class="En none">
        @include('_wrap._text.ellipsis.name',['Var' => $Var->en_name ?? '<em>en_name</em>', 'css' => 'content-m b400 / Min -w3'])
    </span>
</span>