<div class="flex cross-s / relative edge-left">
    <div class="flex cI" title="{{__('mod/Responses.name')}}">
        <div class="Ico mr-1">
            @svg('chat')
        </div>
        <span class="content -lineHeight">{{$Var->comments_count}}</span>
    </div>
    <div class="flex cI">
        <div class="Ico mr-1">
            @svg('vote')
        </div>
        <span class="content -lineHeight">{{$Var->liked_users_count ?? ''}}</span>
    </div>
    {{-- <a class="Abs -all" href="{{$routeName}}"></a> --}}
</div>
