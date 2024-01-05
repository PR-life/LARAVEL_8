
<div class="content-s">
    <a class="h b600" href="{{route('jj.shema.category')}}">Category</a>
    <div class="paragraph"></div>
    @verbatim

        @include('_._skeleton.header.Category', $Z)<br/>

        <br>
        <br>

        @yield('bread')<br>
        @stack('bread')<br>

        <br>
        <br>

        @stack('topBefore')<br>
        @yield('top')<br>
        @stack('topAfter')<br>
    
        @stack('contentBefore')<br>
        @yield('content')<br>
    
        @stack('bottomBefore')<br>
        @stack('bottom')<br>
        @stack('bottomAfter')<br>

    @endverbatim
</div>
