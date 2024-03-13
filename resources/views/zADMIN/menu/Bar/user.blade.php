@component('_wrap.Chunk.Aside.a')
    @slot('routeRegexp', 'admin/oogway*')
    @slot('routeName', 'admin.oogway.morda')
    @slot('cssIco', '-S')
    @slot('sizeName', 'content-xs')
    @slot('name', 'Управление проектом')
    @svg('oogway')
@endcomponent
@component('_wrap.Chunk.Aside.js_data')
    @slot('routeRegexp', 'admin/sherpa*')
    @slot('data', "data-click data-goto='milkSherpa' data-foo='click' data-css data-toggle='on'")
    @slot('cssIco', '-S')
    @slot('sizeName', 'content-xs')
    @slot('name', 'Шерпы')
    <svg viewBox="0 0 36 36" fill="none">
        <mask id="mask0_30_66475" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="4" width="36" height="25">
        <path fill="url(#paint0_linear_30_66475)" fill-rule="evenodd" clip-rule="evenodd" d="M0 10.5L6.73077 26.6538C6.73095 26.6543 6.73113 26.6547 6.73131 26.6551C7.19743 27.7724 8.28937 28.5 9.5 28.5H26.5C27.0095 28.5 27.498 28.3711 27.9277 28.1385L0 10.5Z"></path>
        <path fill="url(#paint1_linear_30_66475)" fill-rule="evenodd" clip-rule="evenodd" d="M9.50007 28.5H26.5001C27.7099 28.5 28.8012 27.7733 29.2679 26.6573C29.2683 26.6561 29.2688 26.655 29.2693 26.6538L36.0001 10.5L8.07239 28.1385C8.50205 28.3711 8.99055 28.5 9.50007 28.5Z"></path>
        <path fill="black" fill-rule="evenodd" clip-rule="evenodd" d="M9.4999 28.5H26.4999C27.143 28.5 27.7525 28.2947 28.2526 27.9348L17.9999 4.5L7.74719 27.9348C8.24727 28.2947 8.85684 28.5 9.4999 28.5Z"></path>
        </mask>

        <g mask="url(#mask0_30_66475)">
            <path d="M0 0H36V36H0V0Z" fill="#eee"></path>
        </g>
        <defs>
            <linearGradient id="paint0_linear_30_66475" x1="14.5629" y1="10.5" x2="14.5629" y2="28.5" gradientUnits="userSpaceOnUse">
                <stop></stop><stop offset="1" stop-opacity="0.7"></stop>
            </linearGradient>
            <linearGradient id="paint1_linear_30_66475" x1="21.4371" y1="10.5" x2="21.4371" y2="28.5" gradientUnits="userSpaceOnUse">
                <stop></stop><stop offset="1" stop-opacity="0.7"></stop>
            </linearGradient>
        </defs>
    </svg>
@endcomponent