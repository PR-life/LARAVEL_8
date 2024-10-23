<div class="W-100 / index relative">

    @yield('bee')

    @stack('topBefore')
    @yield('top')
    @stack('topAfter')

    @yield('bread')

    @stack('contentBefore')
    @yield('content')

    @stack('bottomBefore')
    @stack('bottom')
    @stack('bottomAfter')
</div>