<div class="_ef -an / FIX OnOff / Task / flex cI cross-s round-s bg / {{$css ?? ''}} status-{{$status ?? '100'}}"
{{-- <div class="_ef -an / FIX OnOff / Task / flex cI cross-s round-s / {{$css ?? ''}} {{isset($done) == 200 ? 'status-done' : 'status-open'}}" --}}
@isset($fix) data-click data-css data-add='on' data-fix @endisset
>

	<div class="flex cI var-h pointer">

		<div class="content / ghost">__</div>
		<div class="_ico /">
			<div class="Ico -S / none x-200">
				@svg('check')
			</div>
			<div class="Ico -S / none x-102">
				<svg viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><rect stroke="currentColor" fill="none" x="1.09" y="8" width="9.5" height="9.5" rx="1.25" transform="rotate(-45 1.09 8)"></rect></svg>
			</div>
			<div class="Ico -S / none x-100">
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 16"><path fill="currentColor" fill-rule="evenodd" d="M6.906 1.085a7.047 7.047 0 0 1 2.188 0 .75.75 0 0 1-.232 1.482 5.546 5.546 0 0 0-1.724 0 .75.75 0 0 1-.232-1.482ZM4.933 2.502a.75.75 0 0 1-.166 1.048c-.466.34-.878.75-1.217 1.217a.75.75 0 0 1-1.213-.882 7.036 7.036 0 0 1 1.548-1.548.75.75 0 0 1 1.048.165Zm6.135 0a.75.75 0 0 1 1.047-.165 7.037 7.037 0 0 1 1.548 1.548.75.75 0 0 1-1.213.882 5.533 5.533 0 0 0-1.217-1.217.75.75 0 0 1-.165-1.048ZM1.943 6.28a.75.75 0 0 1 .624.857 5.546 5.546 0 0 0 0 1.724.75.75 0 0 1-1.482.232 7.047 7.047 0 0 1 0-2.188.75.75 0 0 1 .858-.625Zm12.114 0a.75.75 0 0 1 .858.625 7.048 7.048 0 0 1 0 2.188.75.75 0 1 1-1.482-.232 5.54 5.54 0 0 0 0-1.724.75.75 0 0 1 .624-.857ZM2.502 11.068a.75.75 0 0 1 1.048.165c.34.466.75.878 1.217 1.217a.75.75 0 0 1-.882 1.213 7.037 7.037 0 0 1-1.548-1.548.75.75 0 0 1 .165-1.047Zm10.996 0a.75.75 0 0 1 .165 1.047 7.037 7.037 0 0 1-1.548 1.548.75.75 0 0 1-.883-1.213 5.53 5.53 0 0 0 1.218-1.217.75.75 0 0 1 1.048-.165Zm-7.217 2.99a.75.75 0 0 1 .857-.625 5.54 5.54 0 0 0 1.724 0 .75.75 0 0 1 .232 1.482 7.048 7.048 0 0 1-2.188 0 .75.75 0 0 1-.625-.857Z" clip-rule="evenodd"></path></svg>
			</div>
		</div>
	</div>

	<div class="_cell x-name">
		<div class="content">
			{!!$name!!}
		</div>
		@isset($sms)
		<div class="paragraph"></div>
		<div class="content-xs Grey">ОЖИДАЕТ ОЧЕРЕДЬ</div>
		<div class="paragraph-s"></div>
		<div class="flex cI -Grey / cross-xxs">
			<div class="Ico -S">
				<svg viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path fill="currentColor" stroke="none" d="m12.73 3.32-2.05-2.05A1.74 1.74 0 0 0 9.45.75H4.5c-.98 0-1.75.8-1.75 1.75V13c0 .98.77 1.75 1.75 1.75h7c.96 0 1.75-.77 1.75-1.75V4.55c0-.46-.2-.9-.52-1.23Zm-.8 9.68c0 .25-.21.44-.43.44h-7a.43.43 0 0 1-.44-.44V2.53c0-.25.2-.44.44-.44h4.38v2.16c0 .5.38.88.87.88h2.16V13h.03ZM5.39 8.4c0 .39.27.66.65.66h3.94c.35 0 .65-.27.65-.65 0-.36-.3-.66-.65-.66H6.03c-.38 0-.66.3-.66.66Zm4.59 1.97H6.03c-.38 0-.66.3-.66.66 0 .38.28.66.66.66h3.94c.35 0 .65-.28.65-.66 0-.35-.3-.65-.65-.65Z"></path></svg>
			</div>
			{{-- <div class="Ico -S">@svg('chat-3')</div> --}}
			<span class="content-s b600 mr-2">0005</span>
			<div class="content-s" style="opacity: .5">
				{!!$sms!!}
			</div>
		</div>
		@endisset
 
	</div>

	{{-- <div class="_cell / var-h" data-click data-css data-add='on' data-node="parent" data-fix>
		<div class="Ico -S / x-check">
			@svg('info')
		</div>
	</div> --}}

	@isset($fix)
	@component('_wrap.popup.fix_in_div', ['css' => 'CursorDefault5555'])
		{!!$fix!!}
	@endcomponent
	@endisset
</div>
