@if (isset($Var->url_video))
	<div class="hMin b600 _edge">{!!$Var->name!!}</div>
@elseif (isset($Var->foto_count_teaser))
	<div class="hMin b500 _edge">{!!$Var->name!!}</div>
@else
	<div class="h">{!!$Var->name!!}</div>
@endif