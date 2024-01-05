@extends('zJJ._shema.aside')
@section('title', 'Deep ')
@push('css-body', '-deep ')


@push('aside_10111826')
    @include('zJJ.menu.deep.index')
@endpush




@section('content')


<div class="Pente aura">


    @component('_wrap._assembling.PenteSmsFlaber')
        @slot('id','demo_Flaber')
        @slot('cssWrapLeft','x-border space-m')
        @slot('slotSms')
            @include('_.demo.TalkSms')
        @endslot


		<div class="Blog">
			<div class="Chat -entropy / Entropy Void Edge">
				@include('_.demo.chat')
			</div>
            <div class="HWin"></div>
		</div>
    @endcomponent





</div>

<div class="HWin"></div>



 




 


{{-- <style>
	.x-3110 > ._wrap {
		--c-text:#446dff;
		background: linear-gradient(90deg, #0a81ff .06%, #446dff 100%);
	}

	.x-3110 > ._wrap p {
		--c-text:#fff;
	}

	.x-3110_2 > ._wrap {
		--c-text:#414649;
		background: linear-gradient(90deg, #4c5866 .06%, #414649 98%);
	}

	.x-3110_2 > ._wrap p {
		--c-text:#fff;
	}

</style> --}}

@endsection