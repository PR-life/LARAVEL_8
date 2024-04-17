<div class="flex cI x-footer / orb cross-xs">
    <form id="logout-form" class="show-asideOpen" action="{{ route('logout') }}" method="POST">
        @csrf
        <button class="Ico -S / pointer transparent">
            <svg><use xlink:href="#svg-exit"></use></svg>
        </button>
    </form>
    <a class="Ico -S" href="/" target="_blank">
        @svg('webLite')
    </a>
</div>