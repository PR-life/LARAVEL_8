@extends('zJJ.PAGE.html.bg._shema.index')


@section('content')

<div class="Pente Font -L [ margin top bottom ]">
    <div class="_h -vw x-07112254 b600">Enterprise Ready Readys.</div>
</div>

<style>
.x-07112254{
background-image: linear-gradient(45deg,#a163f1,#6363f1 22%,#3498ea 40%,#40dfa3 67%, rgba(64, 223, 163, 0));
background-size: 150% 100%;
background-repeat: no-repeat;
-webkit-background-clip: text;
-webkit-text-fill-color: transparent;
background-clip: text;
animation: intro-gradient56 1.2s cubic-bezier(0.85, 0.26, 0.89, 0.93);
    animation-delay: 0s;
    animation-iteration-count: 1;
    animation-fill-mode: none;
animation-iteration-count: 1;
animation-fill-mode: backwards;
animation-delay: 0.4s;
}


@keyframes intro-gradient56{
0% {
background-position: 300% 100%;
}
100% {
background-position: 0% 0%;
}
}
</style>





    <div class="I aura / text [ margin top bottom ]">



        <div class="Pente">
            @include('zLara.PAGE.sandbox.html._brick.Font.index', ['css' => '-M x-17061125'])
        </div>


        <style>
            .x-17061125 ._h span{
                color: #00a3e0;
            }
        </style>



        <h2>Grey</h2>

        <div class="_text / p -text / Grey">Around is currently in public beta and will be free during this period. <br>We will always have a free option and will be announcing pricing for Teams later this year. <span class="b600">Grey</span></div>
        <div class="_text / p -text / Grey -c30">Around is currently in public beta and will be free during this period. <br>We will always have a free option and will be announcing pricing for Teams later this year. <span class="b600">Grey -c30</span></div>
        <div class="_text / p -text / Grey -c50">Around is currently in public beta and will be free during this period. <br>We will always have a free option and will be announcing pricing for Teams later this year. <span class="b600">Grey -c50</span></div>

        <div class="_text / p -text / x-17061132">Around is currently in public beta and will be free during this period. <br>We will always have a free option and will be announcing pricing for Teams later this year.</div>

        <style>
            .x-17061132 {
                color: rgb(127, 127, 127);
            }
        </style>



        <div class="Black -bg / space void / x-17061137_G">
            <div class="paragraphX2"></div>


            <div class="Font -M">
                <div class="_h / b600 / x-17061137 inline">Pricing</div>
            </div>
            <div class="Font -M">
                <div class="_h / b600 / x-17061138 inline">Pricing</div>
            </div>
            <div class="Font -M">
                <div class="_h / b600 / x-17061139 inline">Pricing</div>
            </div>
            <div class="Font -M">
                <div class="_h / b600 / x-17061140 inline">Pricing</div>
            </div>
            <div class="Font -M">
                <div class="_h / b600 / x-17061141 inline">Pricing</div>
            </div>


            <div class="paragraphX2"></div>
        </div>




        <style>
            .x-17061137_G ._h{
                color: rgb(255, 255, 255);
                /* background-clip: text; */
                /* -webkit-background-clip: text; */
                -webkit-text-fill-color: transparent;
            }
            .x-17061137 {
                /* color: transparent; */
                background: rgba(0, 0, 0, 0) 
                            linear-gradient(90deg, rgb(255, 255, 255), rgb(102, 102, 102)) 
                            repeat scroll 0% 0% padding-box text;
            }
            .x-17061138 {
                background: rgba(0, 0, 0, 0) 
                            linear-gradient(277.11deg, rgb(0, 60, 145) -19.22%, rgb(5, 157, 255) 49.14%, rgb(20, 179, 244) 117.04%) 
                            repeat scroll 0% 0% padding-box text;
            }
            .x-17061139 {
                background: rgba(0, 0, 0, 0) 
                            linear-gradient(273deg, rgb(227, 63, 161) -9.92%, rgb(251, 83, 67) 56.34%, rgb(253, 123, 66) 100%) 
                            repeat scroll 0% 0% padding-box text;
            }
            .x-17061140 {
                /* color: rgb(227, 63, 161); */
                background: rgba(0, 0, 0, 0) 
                            linear-gradient(105deg, rgb(20, 179, 244), rgb(101, 73, 213), rgb(227, 63, 161)) 
                            repeat scroll 0% 0% padding-box text;
            }
            .x-17061141 {
                background: linear-gradient(100deg,#df5e5e 7%,#ea68e0 22%,#657df5 42%,#00ffe2 90%);
            }



        </style>

 
    </div>
@endsection