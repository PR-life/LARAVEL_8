@extends('zTHIS.zJs._shema.INDEX')

@push('js-bottom-link')
	<script src="/lib/js/anime.js"></script>
	{{-- <script src="/js/_sherpa/Math/index.js"></script> --}}
@endpush

@push('js-bottom-solo')
<script>
    const SVG_PATHS = [
        {value: 'M161.23691003228475,-142.91547838970675C181.22293223201214,-103.52046591026897,150.56953271518822,-38.07519551682116,132.17827658263366,25.22354638199265C113.78702045007908,88.52228828080645,107.65790770179386,149.67450168498627,78.41569906755855,164.33349172080008C49.17349043332327,178.9924817566139,-3.181814086862076,147.15824842406178,-56.01312467781069,120.21665030992501C-108.8444352687593,93.27505219578826,-162.15175193047116,71.2260893000669,-187.94767695994662,24.05229400148208C-213.74360198942205,-23.12150129710275,-212.02813538666103,-95.42012899855102,-176.1182906212972,-138.44965006594194C-140.20844585593338,-181.47917113333287,-70.10422292796669,-195.23958556666642,0.2606104941560024,-195.44741550061937C70.62544391627868,-195.65524543457227,141.25088783255737,-182.3104908691445,161.23691003228475,-142.91547838970675Z'},
        {value: 'M170.78591811428797,-133.0305582253273C215.9575780453791,-79.55375495201808,243.49376881596302,-8.846467656081344,223.1542396176616,39.17174551675614C202.81471041936013,87.18995868959364,134.59946125217326,112.51909773933187,75.54352166932024,131.03996490556673C16.48758208646723,149.56083207180157,-33.40904791205195,161.27342735453303,-79.08302414200442,146.1982143784705C-124.7570003719569,131.123001402408,-166.20832283334266,89.25998016755149,-178.1244821030258,39.85381293333588C-190.04064137270893,-9.552354300879733,-172.42163745068942,-66.50166753445447,-137.81169656823468,-117.56782735657032C-103.20175568577996,-168.63398717868614,-51.60087784288998,-213.81699358934307,5.6031256243542105,-218.28533716933066C62.8071290915984,-222.75368074931828,125.6142581831968,-186.50736149863656,170.78591811428797,-133.0305582253273Z'},
        {value: 'M154.9381779423472,-120.05907383094858C193.12285450280197,-75.6770039176596,211.11545693276526,-11.692292218962868,194.79896584777973,38.31340346486829C178.48247476279414,88.31909914869944,127.85689016285976,124.34577881766502,78.96974803750525,137.8542743126357C30.082605912150722,151.36276980760638,-17.06609373862393,142.3530811285822,-68.12265455956624,124.33974129409943C-119.17921538050855,106.32640145961666,-174.14363737161855,79.3094104696753,-189.6325264693978,36.198603365814726C-205.12141556717702,-6.912203738045851,-181.13477177162554,-66.11682695582563,-142.95009521117078,-110.49889686911462C-104.76541865071601,-154.8809667824036,-52.38270932535801,-184.4404833912018,2.9970206827941106,-186.8305276316603C58.37675069094623,-189.22057187211877,116.75350138189246,-164.44114374423756,154.9381779423472,-120.05907383094858Z'},
        {value: 'M117.72894557886714,-73.05236786699797C158.83840587586738,-42.33606848517338,202.74758382893438,6.980863902887076,196.4645967689552,48.985107129531144C190.18160970897603,90.98935035617522,133.70645763595073,125.6809044214029,72.42140346998403,158.19299073037413C11.136349304017353,190.70507703934538,-54.95860695489066,221.03769559206015,-110.07736740992392,203.95152631572867C-165.19612786495716,186.8653570393972,-209.33869251611566,122.3603999340195,-224.99704159360058,51.88873165803174C-240.65539067108548,-18.582936617956026,-227.82952417489687,-95.02131606455384,-185.5826479803512,-125.9972232026608C-143.3357717858055,-156.97313034076777,-71.66788589290275,-142.4865651703839,-16.679071625984644,-129.1854493973976C38.30974264093346,-115.88433362441128,76.61948528186691,-103.76866724882257,117.72894557886714,-73.05236786699797Z'},
        {value: 'M193.2321776439259,-155.76418621349498C237.91637361892617,-98.06531007383057,253.0107747344638,-18.436026617922067,232.5059893167388,45.71687890662718C212.0012038990138,109.86978443117641,155.89723194802608,158.54631202436642,95.01470971263701,181.98360695305897C34.13218747724793,205.42090188175155,-31.52888504254253,203.61896414594673,-90.7329472073219,178.79857165911304C-149.93700937210124,153.9781791722794,-202.6840611818695,106.13933193441692,-217.75899422020188,47.56356879171059C-232.83392725853423,-11.012194350995722,-210.23674152543072,-80.32487339854588,-167.66488936015773,-137.5416208479716C-125.09303719488479,-194.75836829739737,-62.54651859744239,-239.87918414869867,5.863736118510218,-244.55535766263915C74.27399083446282,-249.2315311765797,148.54798166892564,-213.46306235315942,193.2321776439259,-155.76418621349498Z'}
    ];
    
    const MORPH_SVG = anime({
      targets: '#morph',
      d: [
            SVG_PATHS[1],
            SVG_PATHS[2],
            SVG_PATHS[3],
            SVG_PATHS[4],
            SVG_PATHS[0]
        ],
      easing: 'linear',
      duration: 20000,
      loop: true
    });
    </script>


<script>
	let x = document.querySelector('.square');

	let animateScaling = anime({
		targets: '.square',
		scaleY: 0.5,
		autoplay: false
	});

	window.addEventListener('scroll', function(e) {
		let ggg = 1 + window.pageYOffset / 100
		// animationOpacitySeek.seek(window.pageYOffset * 10)
		// animateScaling.restart;
		// animationOpacitySeek.seek(ggg * 2)
		// x.style.transform = `scaleY(${ggg})`;
		// if(type == '1') Track.style.transform = `translate3d(${-slideWidth * count}px, 0px, 0px)`;
		document.querySelector('.play-scale').click()
		// console.log(ggg)
	});
	document.querySelector('.play-scale').onclick = animateScaling.restart;
</script> 
@endpush


@push('milk')
 
@endpush



@section('content')

<div class="Space -v">


    <div class="Pente aura / x-10020845">
        {{-- <svg viewBox="0 0 500 500" xmlns="http://www.w3.org/2000/svg" filter="url(#blur)"> --}}
        <svg viewBox="0 0 500 500" xmlns="http://www.w3.org/2000/svg">
            <g transform="translate(250,250)">
                <defs>
                    <linearGradient id="MyGradient"><stop offset="10%" stop-color="#F60" /><stop offset="90%" stop-color="#FF6" /> </linearGradient>
                    <filter	filter id="blur" x="0" y="0">
                        <feGaussianBlur in="SourceGraphic" stdDeviation="15" />
                    </filter>
                </defs>
                <path id="morph" stroke="none" stroke-width="0" d="M161.23691003228475,-142.91547838970675C181.22293223201214,-103.52046591026897,150.56953271518822,-38.07519551682116,132.17827658263366,25.22354638199265C113.78702045007908,88.52228828080645,107.65790770179386,149.67450168498627,78.41569906755855,164.33349172080008C49.17349043332327,178.9924817566139,-3.181814086862076,147.15824842406178,-56.01312467781069,120.21665030992501C-108.8444352687593,93.27505219578826,-162.15175193047116,71.2260893000669,-187.94767695994662,24.05229400148208C-213.74360198942205,-23.12150129710275,-212.02813538666103,-95.42012899855102,-176.1182906212972,-138.44965006594194C-140.20844585593338,-181.47917113333287,-70.10422292796669,-195.23958556666642,0.2606104941560024,-195.44741550061937C70.62544391627868,-195.65524543457227,141.25088783255737,-182.3104908691445,161.23691003228475,-142.91547838970675Z"/>
            </g>
        </svg>
    </div>
    
    
    
    <style>
        .x-10020845 svg {
            width: 600px;
            height: 600px;
        }
    
        svg {
            fill: #f06;
            /* filter:url(#blur); */
            /* fill: url(#MyGradient); */
        }
    
    
    </style>
    


</div>



<div class="Pente aura">
	{{-- <div class="Fix"> --}}
		<div id="anime-demo">
			<div class="square blue"></div>
		</div>
	{{-- </div> --}}
	<div class="controls">
		<button class="Btn cC / play-scale">Animate Scaling</button>
	</div>
</div>


<style>
	.square {
	pointer-events: none;
	width: 2px;
	height: 50px;
	background: #000;
	transform-origin: top;
	transition:transform linear .2s;
	border-radius: 40px;
	
	}

	body.act .square{
		background: linear-gradient(to top, rgba(0,0,0,0) 0%, rgba(13,14,19,1) 80%);
	}

	body.up .square{
		transform-origin: bottom;
	}

	body.up.act .square{
		background: linear-gradient(to bottom, rgba(0,0,0,0) 0%, rgba(13,14,19,1) 80%);
	}
</style>
  

 
 
<div class="Plot -h"></div>
<div class="Plot -h"></div>

@endsection