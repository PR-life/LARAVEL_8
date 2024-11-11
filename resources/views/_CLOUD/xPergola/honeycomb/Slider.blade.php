@push('js-bottom-solo')
@include('_.js.skill.ScrollLeft')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        new ScrollLeft('scroll_05111044')
        new ScrollLeft('scroll_05111045')
        new ScrollLeft('scroll_05111046')
        new ScrollLeft('scroll_05111047')
    });
</script>
@endpush


<div id="Slider_prglsrvc" class="jsSlider Slider visible-1 / Anime">
 
	@include('_CLOUD.xPergola.honeycomb.lego.Slider.name')
    <div class="hill-s / none_mbl"></div>
    <div class="paragraph / none_PC"></div>
	<div class="flex dC / height-051100936">
		@include('_CLOUD.xPergola.honeycomb.lego.Slider.tabs')
 

		<div class="_slider / Abs_PC relative_mbl / round-s">
			@include('_._brick.img.squere')
		
			<div class="Shell / _indexMin / hidden">
                <div class="Track -solo" data-carousel="true">
                    <div class="item">

                        <div class="space-05111042">
                            <div class="h b500">Террасы и веранды</div>
                        </div>
                        <div class="paragraphX2"></div>
	 
						@include('_CLOUD.xPergola.honeycomb._wrap.Slider.slides.home')
			 
                    </div>
                    <div class="item / relative">
                        <div class="space-05111042">
                            <div class="h b500">Кафе и рестораны</div>
                        </div>
                        <div class="paragraphX2"></div>
	 
						@include('_CLOUD.xPergola.honeycomb._wrap.Slider.slides.caffe')
                    </div>
                    <div class="item">
                        <div class="space-05111042">
                            <div class="h b500">Биоклиматические <br>перголы</div>
                        </div>
                        <div class="paragraphX2"></div>
	 
						@include('_CLOUD.xPergola.honeycomb._wrap.Slider.slides.hostel')
                    </div>
                    <div class="item">
                        <div class="space-05111042">
                            <div class="h b500">Тентовые <br>перголы</div>
                        </div>
                        <div class="paragraphX2"></div>
	 
						@include('_CLOUD.xPergola.honeycomb._wrap.Slider.slides.city')
                    </div>    
                    <div class="item">
                        <div class="space-05111042">
                            <div class="h b500">ZIP-системы</div>
                        </div>
                        <div class="paragraphX2"></div>
	 
						@include('_CLOUD.xPergola.honeycomb._wrap.Slider.slides.city')
                    </div>    
                </div>
                <div class="sherpaSlider"></div>

       



            {{-- <div class="Slider / index -move / relative">
                <div class="Shell / _indexMin / hidden"></div>
            </div>
            <img class="Img -cover / H-100 4W-100" src="/images/hero/slider/slaid_5.png" alt="">
            <img class="Img -cover / H-100" src="/images/hero/slider/slaid_2.png" alt=""> --}}
        </div>
		
		
		</div>
	</div>
</div>

 



{{-- #Slider_prglsrvc {
    .Plot .Bg{
        background-image: url(/images/x_pergolservice/slider/01111207.jpg);
    }
} --}}

{{-- <div id="Slider_prglsrvc" class="Box aura / Edge -SPC" style="opacity:1">
    <div class="flex">
        @include('_CLOUD.xPergola.honeycomb.lego.Slider.aside')
        <div class="Pente aura / Plot plot-h / relative">
            <div class="Shell / _indexMin / hidden">
                <div class="Track -solo / Bg -gif">

                    <div class="item"></div>
                </div>
                <div class="Abs Ico Bg -gif / Visible" style="top:80%" visible-node='Slider' visible-param='Anime'></div>
            </div>
         </div>
    </div>
</div> --}}