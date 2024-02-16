<div class="paragraph"></div>
<div class="Grid x{{$Var->foto_count_teaser}}">
@for ($i = 1; $i <= $Var->foto_count_teaser; $i++)
	<img class="zmng" src="/images/{{$Var->url_foto}}/140/{{ $i }}.jpg" data-original="/images/{{$Var->url_foto}}/{{ $i }}.jpg" loading="lazy">
@endfor
</div>

