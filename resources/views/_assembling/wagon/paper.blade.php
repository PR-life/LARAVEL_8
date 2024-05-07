{{-- <div class="Wagon {{$css ?? ''}}" data-item="{{$loop}}" data-year="{{$Var->year ?? ''}}">
	<div class="relative {{isset($Var->answer) ? "pointer" : ""}} OnOff Off" data-css data-toggle='Off On' {{isset($Var->answer) ? "data-click" : ""}}>
	 
	</div>	
	</div> --}}
	
{{-- vol-QA Family-OpenSans round-l
x-30012123 Wagon -w -wL -hS / Bone / space-m / relative555 index555 --}}

@component('_assembling.wagon.shema.index',['css03051331'=>'Bone','cssWagon' => '-h'])
 

	<div class="_head / space">
		<div class="h -lineHeight">{{$Var->name}}</div>
	</div>


	<div class="_body">
		<div class="content / space void-s">
			{!!$Var->text!!}
		</div>
		<div class="paragraph"></div>
		<div class="flex / space-leftS">
			<div class="Ico -S / round hidden mr-2">
				<img src="{{$Var->user->avatar}}">
			</div>
			<div>
				<div class="content-s Grey" title="{{$Var->created_at}}">
					{{$Var->dateAsCarbon->diffForHumans()}}
				</div>

				<div class="paragraph-s"></div>
				<div class="content-xxs Grey / Ellipsis line-1">
					<span>{{$Var->user->nickname ?? $Var->user->name}}</span>
					<span class="relative">
						<span class="Abs -all / flex cI cC Bg -dotCenter"></span>
						<span class="Op">__</span>
					</span>
					<span>{{$Var->user->rank}}</span>
				</div>
			</div>
		</div>
		<div class="paragraph"></div>
	</div>
@endcomponent

