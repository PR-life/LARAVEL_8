@extends('zADMIN._shema.index')

@section('title')Faq @endsection

@push('addBread')
<li>
    <span>
        <span class="content-xs">Контент</span>
    </span>
</li>
@endpush

@push('bee')
    @include('zADMIN._lego.Bee.nameIndex',['name' => 'Faq', 'add' => route('admin.faq.create')])
    @include('zADMIN.PAGE._lego.filter.SHEMA.index.faqs')
@endpush

@include('zADMIN.PAGE._lego.filter._lego.filter_for_table.index',['Model' => 'faq'])

 
@section('content')

    @component('zADMIN._wrap.index', ['css' => 'relative'])
        @component('zADMIN._wrap.max', ['css' => 'index'])
            @component('zADMIN._wrap.Table.index', ['css'=> '-faqs'])

                @foreach($faqs as $faq)    
                 
                    @include('zADMIN._repo.teaser.faq', ['Var' => $faq])

                    {{-- @if(count($faq->childrenFaqs))
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
                    @endif --}}
                    
                    {{-- @if(count($faq->friendFaqs))
                        <div class="Pivot -bg / published pause v-DB -on / space round">
                            <ul class="-S ul">
                            @foreach ($faq->friendFaqs as $friendFaq)
                            <li>
                                <a href="{{route('admin.faq.edit',$friendFaq->id)}}">{{$friendFaq->name}}</a>
                            </li>
                            @endforeach
                            </ul>
                        </div>
                    @endif --}}
         




                @endforeach
            @endcomponent


            @include('zADMIN.mod.paginator', ['Var' => $faqs])

        @endcomponent
    @endcomponent

@endsection
