@if($Var->featured)
<div class="Ico -XS">@svg('statusFeatured')</div>
@endif
@if($Var->group_id)
<div class="Ico -XS" title="{{$Var->group->name}}">@svg('statusGroup')</div>
@endif