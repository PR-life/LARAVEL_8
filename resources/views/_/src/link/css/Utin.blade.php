@push('linkCss')
<link rel="preload" href="{{ mix('/css/solo/zUTIN.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
@endpush
@push('noscript_linkCss')
<link href="{{ mix('/css/solo/zUTIN.css') }}" rel="stylesheet" type="text/css">
@endpush