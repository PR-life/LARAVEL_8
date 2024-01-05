<div class="content-s">
    <div class="h b600">Index</div>
    <div class="paragraph"></div>
    @verbatim

        @include('_._skeleton.Top') <br>
        @include('_._skeleton.header') <br>
        @include('_._skeleton.menuMain') <br>

        <br>
        @yield('breadBack')<br>
        @yield('head')<br>

        <br>
        <br>

        @yield('breadBack')<br>
        @stack('head')<br>

        <br>
        <div class="hMin">Wrap</div>
        <br>

        @yield('bee')<br>

        <br>

        @stack('topBefore')<br>
        @yield('top')<br>
        @stack('topAfter')<br>

        <br>

        @stack('bread')<br>
    
        <br>

        @stack('contentBefore')<br>
        @yield('content')<br>
    
        <br>

        @stack('bottomBefore')<br>
        @stack('bottom')<br>
        @stack('bottomAfter')<br>

        <br>
        <br>

        @stack('basementBefore')<br>
        @stack('basement')<br>
        @stack('basementAfter')<br>


        <br>
        <br>

        @include('_._skeleton.Slump')<br>
        @include('_._skeleton.Geek')<br>
        @stack('milk')<br>
        @include('_._skeleton.Pop')<br>


    @endverbatim
</div>