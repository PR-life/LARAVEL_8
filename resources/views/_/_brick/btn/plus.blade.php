@isset($link)
<a class="orbit" href="{{$link}}">
@endisset
<svg class="Ico" viewBox="0 0 86 86">
	<defs>
		<linearGradient id="editorjs-logo-a" x1="50%" y1="0%" x2="50%" y2="100%">
			<stop stop-color="#39FFD7" offset="0%"></stop>
			<stop stop-color="#308EFF" offset="100%"></stop>
		</linearGradient>
	</defs>
	<g fill-rule="nonzero" fill="none">
		<circle fill="url(#editorjs-logo-a)" cx="42" cy="42" r="42"></circle>
		<rect fill="#FFF" x="38" y="17" width="8" height="50" rx="4"></rect>
		<rect fill="#FFF" x="17" y="38" width="50" height="8" rx="4"></rect>
	</g>
</svg>
@isset($link)
</a>
@endisset