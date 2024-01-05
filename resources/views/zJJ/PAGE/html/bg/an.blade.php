@extends('zJJ.PAGE.html.bg._shema.index')



@section('content')
    <div class="I aura [ margin top ]">

        <div class="Pente aura padding top bottom">

            <div class="dynamic-background video-translation__background" style="--box-top: -384.82078552246094px; --box-left: 175.09585571289062px; --box-size: 1669.7915649414062px;"><div class="video-translation__circle video-translation__circle_green"><div class="video-translation__spot video-translation__spot_green"></div></div><div class="video-translation__circle video-translation__circle_blue"><div class="video-translation__spot video-translation__spot_blue"></div></div><div class="video-translation__circle video-translation__circle_purple"><div class="video-translation__spot video-translation__spot_purple"></div></div></div>
            
            
            <style>
            
            
            body {
              background-color: #000;
            }
            
            
            .dynamic-background {
                overflow: hidden;
              position: absolute;
              top: var(--box-top);
              left: var(--box-left);
              height: var(--box-size);
              width: var(--box-size);
              z-index: 0;
              will-change: transform,opacity;
              pointer-events: none;
            }
            .video-translation__circle {
              position: absolute;
              width: 70%;
              height: 70%;
              -webkit-transform: scaleY(.8);
              transform: scaleY(.8);
              opacity: .7;
            }
            .video-translation__circle_green {
              left: 30%;
              top: 10%;
              -webkit-animation: green-way 6s normal infinite;
              animation: green-way 6s normal infinite;
            }
            .video-translation__circle_blue {
              left: 0;
              top: 10%;
              -webkit-animation: blue-way 6s normal infinite;
              animation: blue-way 6s normal infinite;
            }
            
            .video-translation__circle_purple {
              left: 15%;
              top: 25%;
              -webkit-animation: purple-way 6s normal infinite;
              animation: purple-way 6s normal infinite;
            }
            
            
            .video-translation__spot {
              width: 100%;
              height: 100%;
              -webkit-transition: .4s;
              transition: .4s;
              -webkit-mask-image: radial-gradient(closest-side at center,hsla(0,0%,100%,.78),hsla(0,0%,100%,.73),hsla(0,0%,100%,.58),hsla(0,0%,100%,.45),hsla(0,0%,100%,.32),hsla(0,0%,100%,.25),hsla(0,0%,100%,.16),hsla(0,0%,100%,.09),hsla(0,0%,100%,.04),hsla(0,0%,100%,.02),transparent);
              mask-image: radial-gradient(closest-side at center,hsla(0,0%,100%,.78),hsla(0,0%,100%,.73),hsla(0,0%,100%,.58),hsla(0,0%,100%,.45),hsla(0,0%,100%,.32),hsla(0,0%,100%,.25),hsla(0,0%,100%,.16),hsla(0,0%,100%,.09),hsla(0,0%,100%,.04),hsla(0,0%,100%,.02),transparent);
            }
            .video-translation__spot_green {
              background: #03bdea;
            }
            .video-translation__spot_blue {
              background: #0038ff;
            }
            .video-translation__spot_purple {
              background: #f80a99;
            }
            
            
            
            @keyframes  green-way {
            0% {
              left: 30%;
              top: 10%;
              -webkit-transform: rotate(240deg) scaleY(.8);
              transform: rotate(240deg) scaleY(.8);
            }
            33% {
              left: 15%;
              top: 22%;
              -webkit-transform: rotate(120deg) scaleY(.8);
              transform: rotate(120deg) scaleY(.8);
            }
            66% {
              left: 0;
              top: 10%;
              -webkit-transform: rotate(0deg) scaleY(.8);
              transform: rotate(0deg) scaleY(.8);
            }
            100% {
              left: 30%;
              top: 10%;
              -webkit-transform: rotate(240deg) scaleY(.8);
              transform: rotate(240deg) scaleY(.8);
            }
            }
            
            
            @keyframes  blue-way {
            0% {
              left: 0;
              top: 10%;
              -webkit-transform: rotate(1turn) scaleY(.8);
              transform: rotate(1turn) scaleY(.8);
            }
            33% {
              left: 35%;
              top: 10%;
              -webkit-transform: rotate(260deg) scaleY(.8);
              transform: rotate(260deg) scaleY(.8);
            }
            66% {
              left: 15%;
              top: 22%;
              -webkit-transform: rotate(90deg) scaleY(.8);
              transform: rotate(90deg) scaleY(.8);
            }
            100% {
              left: 0;
              top: 10%;
              -webkit-transform: rotate(0deg) scaleY(.8);
              transform: rotate(0deg) scaleY(.8);
            }
            }
            
            @keyframes  purple-way {
            0% {
              left: 15%;
              top: 22%;
              -webkit-transform: rotate(120deg) scaleY(.8);
              transform: rotate(120deg) scaleY(.8);
            }
            33% {
              left: 0;
              top: 10%;
              -webkit-transform: rotate(0deg) scaleY(.8);
              transform: rotate(0deg) scaleY(.8);
            }
            66% {
              left: 30%;
              top: 10%;
              -webkit-transform: rotate(240deg) scaleY(.8);
              transform: rotate(240deg) scaleY(.8);
            }
            100% {
              left: 15%;
              top: 22%;
              -webkit-transform: rotate(120deg) scaleY(.8);
              transform: rotate(120deg) scaleY(.8);
            }
            }
            
            
            </style>
            
            
            
                </div>
 
    </div>
@endsection