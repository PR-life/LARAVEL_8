@extends('zJJ._shema.aside')
@section('title', 'HTML ')
@push('css-body', '-html ')


@push('aside_10111826')
    @include('zJJ.menu.html.index')
@endpush




@section('content')

<div class="I aura [ margin top ]">

    <div class="group-link-underline">
        <h2>
            <span class="link link--lg link-underline">
                link-underline: Getting Started With Parallel Testing and Code Coverage in Laravel
            </span>
        </h2>
    </div>



<style>

.link {
border-bottom-width: 2px;
border-color: transparent;
/* transition-duration: .15s; */
/* transition-duration: .2s; */
/* transition-property: background-color,border-color,color,fill,stroke; */
/* transition-timing-function: cubic-bezier(.4,0,.2,1); */
/* transition-timing-function: cubic-bezier(.4,0,1,1); */
}


.link-underline {
background-image: linear-gradient(transparent,transparent),linear-gradient(#000,#000);
background-position: 100% 100%,0 100%;
background-repeat: no-repeat;
background-size: 100% 3px,0 3px;
border-bottom-width: 0;
transition: background-size .5s ease-in-out,background-position .5s ease-in-out;
}


.link-underline:hover{
background-position: 100% 100%,0 100%;
background-size: 0 3px,100% 3px;
}


</style>










    <div class="Pente aura Plot / dd / relative">

         

 


    </div>


<style>

.dd {
  background: #000;
 
}
   .dd::before,
    .dd::after {
        content: '';
        position: absolute;
        display: block;
    }

    .dd::before {
        top: 40%;
        left: 50%;
        width: 30px;
        height: 60px;
        background-image: url("data:image/svg+xml;charset=UTF-8,%3c?xml version='1.0' encoding='UTF-8'?%3e%3c!-- Generator: Adobe Illustrator 22.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0) --%3e%3csvg version='1.1' id='Слой_1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' x='0px' y='0px' viewBox='0 0 100 200' style='enable-background:new 0 0 100 200;' xml:space='preserve'%3e%3cstyle type='text/css'%3e .st0%7bfill:%23FFFFFF;%7d %3c/style%3e%3cg%3e%3ccircle class='st0' cx='49.5' cy='19.7' r='17.7'/%3e%3c/g%3e%3cg%3e%3ccircle class='st0' cx='35.9' cy='107.8' r='27.8'/%3e%3c/g%3e%3cg%3e%3ccircle class='st0' cx='71.4' cy='176.3' r='20.7'/%3e%3c/g%3e%3c/svg%3e");
        background-repeat: no-repeat;
        background-size: contain;
        background-position: center;
        animation: bubles infinite 3s;
        animation-timing-function: cubic-bezier(0.4, 0.4, 0.5, 0.1);
        animation-delay: .5s;
        opacity: 0;

    }

    .dd::after {
        top: 70%;
        left: 51%;
        width: 30px;
        height: 60px;
        background-image: url("data:image/svg+xml;charset=UTF-8,%3c?xml version='1.0' encoding='UTF-8'?%3e%3c!-- Generator: Adobe Illustrator 22.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0) --%3e%3csvg version='1.1' id='Слой_1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' x='0px' y='0px' viewBox='0 0 100 100' style='enable-background:new 0 0 100 100;' xml:space='preserve'%3e%3cstyle type='text/css'%3e .st0%7bfill:%23FFFFFF;%7d %3c/style%3e%3ccircle class='st0' cx='33.5' cy='33.5' r='22.5'/%3e%3ccircle class='st0' cx='72.5' cy='79.5' r='13.5'/%3e%3c/svg%3e");
        background-repeat: no-repeat;
        background-size: contain;
        background-position: center;
        animation: bubles infinite 6s;
        animation-timing-function: cubic-bezier(0.4, 0.4, 0.5, 0.1);
        animation-delay: 0s;
        opacity: 0;

    }


    @keyframes    bubles {
        from {
            transform: translate(0, 0);
            opacity: 0;
        }
        10% {
            opacity: 1;
        }
        40% {
            transform: translate(0, -30px);
            opacity: 0;
        }
        to {
            transform: translate(0, 0);
            opacity: 0;
        }
    }


    
</style>




</div>

 
@endsection



