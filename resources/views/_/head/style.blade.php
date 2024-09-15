<? echo "<style>"?>
    @include('_.src.cssMin')
    @stack('style')
    @media (min-width:800px) and (max-width:8000px){
    @stack('style_PC')
    }
    @media (min-width:799px) and (max-width:1080px){
    @stack('style_beyond')
    }
    @media  screen and (max-width:799px){
    @stack('style_mbl')
    }
<? echo "</style>"?>