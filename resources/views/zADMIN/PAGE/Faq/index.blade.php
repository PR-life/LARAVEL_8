@extends('zADMIN._shema.index')

@section('title')Admin @endsection

@push('addBread')
<li>
    <span>
        <span class="content-xs">Контент</span>
    </span>
</li>
@endpush

@push('topAfter')
    @include('zADMIN.PAGE._lego.filter.btnVol')
    @include('zADMIN._lego.Bee.nameIndex',['name' => 'FAQ', 'add' => route('admin.faq.create'), 'ico' => 'barMenu_relations'])
    @include('zADMIN.PAGE._lego.filter.SHEMA.index.faqs')
    @include('zADMIN.PAGE._lego.filter.table-index', ['Var' => 'faq'])
@endpush

 

@section('content')

    @component('zADMIN._wrap.index')
        @component('zADMIN._wrap.max', ['css' => 'index'])
            @component('zADMIN.PAGE._wrap.Table.index', ['css'=> '-faqs'])
                {{-- @foreach($faqs as $faq)     
                    @include('zADMIN.combine.Teaser.lib.seo', ['Var' => $faq])
                @endforeach --}}
                @foreach($faqs as $faq)    
                 
                    @include('zADMIN.combine.Teaser.lib.seo', ['Var' => $faq])


                



                    @if(count($faq->childrenFaqs))
                        <div class="children -lvl_1 / round">
                            @foreach ($faq->childrenFaqs as $childFaq)
                                @include('zADMIN.combine.Teaser.lib.seo', ['Var' => $childFaq])
                                @if(count($childFaq->friendFaqs))
                                <div class="Pivot -bg / space round">
                                    <ul class="-S ul">
                                        @foreach($childFaq->friendFaqs as $childfriendFaq)
                                            <li>
                                                <a href="{{route('admin.faq.edit',$childfriendFaq->id)}}">{{$childfriendFaq->name}}</a>
                                            </li>
                                         @endforeach
                                    </ul>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    @endif
                    
                    @if(count($faq->friendFaqs))
                        <div class="Pivot -bg / published pause v-Data -on / space round">
                            <ul class="-S ul">
                            @foreach ($faq->friendFaqs as $friendFaq)
                            <li>
                                <a href="{{route('admin.faq.edit',$friendFaq->id)}}">{{$friendFaq->name}}</a>
                            </li>
                            @endforeach
                            </ul>
                        </div>
                    @endif
         

                    {{-- <div class="belongs / round">
                        @foreach ($faq->belongTo as $belongFaq)
                            <h4>{{$belongFaq->name}}</h4>
                        @endforeach
                    </div> --}}


                @endforeach
            @endcomponent

            @if($paginator)
                @include('zADMIN.mod.paginator', ['Var' => $faqs])
            @endif
            
        @endcomponent
    @endcomponent

@endsection
