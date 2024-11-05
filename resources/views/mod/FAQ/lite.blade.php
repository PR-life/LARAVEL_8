<div class="-Details Details -M -line -bg -bgMbl -shiftLeftI -edgeI -edge_mbl transparent">
    @foreach($Var as $_faq)
        @include('mod.FAQ.lego.item.def',['css' => 'x-'.$loop->iteration,'cssSummary'=>'-M'])
     @endforeach
</div>
