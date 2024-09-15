<? echo "<style>"?>
    @include('_.src.cssMin')
    @stack('style')
    @media (min-width:820px) and (max-width:8000px){
    @stack('style_PC')
    }
    @media (min-width:819px) and (max-width:1080px){
    @stack('style_beyond')
    }
    @media  screen and (max-width:819px){
    @stack('style_mbl')
    }
<? echo "</style>"?>