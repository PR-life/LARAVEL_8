@extends('zJJ.PAGE.html.bg._shema.index')
 

@section('content')
    <div class="Box aura [ margin top bottom ]">






        @include('zJJ.PAGE.html.bg.lego.grid')

        








        <div class="Ico -M bgZebra v1"></div>


        <style>
            .bgZebra {
                background-image: linear-gradient(-45deg, #fff 0, #fff 25%, #f2f3f5 25%, #f2f3f5 50%, #fff 50%, #fff 75%, #f2f3f5 75%);
                background-size: var(--bgZebra-size) var(--bgZebra-size);
                background-position: 0 0;
                -webkit-animation: buttonsending 1s linear infinite;
                animation: buttonsending 1s linear infinite;
            }
            @-webkit-keyframes buttonsending {
                100% {
                    background-position: var(--bgZebra-size) 0;
                }
            }
        </style>






        <div class="Plot / bgEdu">

        </div>


        <style>
            .bgEdu {
                background: radial-gradient(circle at 653px 343px, rgba(50, 50, 50, 0), rgba(80, 80, 80, 0.1), rgba(80, 80, 80, 0.5), rgba(80, 80, 80, 0.7), rgba(80, 80, 80, 0.8), rgba(80, 80, 80, 0.9));
            }
        </style>


        <div class="Plot / bgBg v1 -an">

        </div>


        <style>
            .bgBg.-an {
                background-size: 400% 400%;
                animation: BarBelowCrackdownGradient 90s ease infinite;
            }
            .bgBg.v1 {
                background: linear-gradient(90deg, #4334ff, #b340ff, #ff4c56, #f4b10c, #ff4c56, #b340ff, #4334ff);
                background-size: auto;
            }
        </style>



        <div class="Plot flex cC cI / relative index / x-0211_3 x-Kino">
 
            <img class="relative _indexMin" src="https://yastatic.net/s3/ott-static/landings/production/default/1.57.0-68/for-tv.c0c6ac7880fbc8e1bd465edfcaee8cc9.png" alt="" height="404px" width="720px">

            <div class="x-cover / Abs -all"></div>
 
        </div>


        <style>
            .x-0211_3 {
                background-color: red;
                /* background-color: #141414; */
            }

            .x-cover {
                background-image: linear-gradient(180deg,rgba(20,20,20,0) 55%,rgba(20,20,20,.21) 70%,#141414 96%),radial-gradient(circle at 100% 0,rgba(20,20,20,0),rgba(20,20,20,.49) 62%,#141414);
            }
        
            .x-Kino::after {
                content: '';
                z-index: 50;
                position: absolute;
                top: 0rem;
                left: 4rem;
                width: calc(var(--h)*.85);
                height: calc(var(--h)*.85);
                min-height: 400px;
                min-width: 400px;
                background-image: radial-gradient(circle at 50% 50%,hsla(0,0%,100%,0.2) 0,hsla(0,0%,100%,0) 70%);
            }


        </style>


        





        <div class="Plot / relative index" style="height:200px; background:#000">
            <div class="stars / Abs -all"></div>
            <div class="Abs -all / hidden">                
                <div class="Abs -all / anime-levitation">
                    <div class="Abs -all / twinkling"></div>
                </div>
            </div>
        </div>
 



        <style>
            .anime-levitation {
                animation-name: levitation;
                animation-duration: 3s;
                animation-iteration-count: infinite;
                animation-direction: alternate-reverse;
                animation-timing-function: ease-in-out;
            }
    
            @keyFrames levitation{
                0% {
                    transform: translateY(-26px);
                }
                100% {
                    transform: translateY(0);
                }
                0% {
                    transform: translateY(-26px);
                }
                100% {
                    transform: translateY(0);
                }
            }
        </style>

        <style>
            @keyframes  move-twink-back {
                from {background-position:0 0;}
                to {background-position:-10000px 5000px;}
            }

            .stars {
                background:url('/images-0/lib/_css/stars/stars.png') repeat top center;
            }
            
            .twinkling{
                background:transparent url('/images-0/lib/_css/stars/twinkling.png') repeat top center;              
                animation:move-twink-back 400s linear infinite;
            }
        </style>


    </div>
@endsection