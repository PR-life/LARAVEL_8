<?unset($_GET['page'])?>

@extends('zADMIN._schema.index')

@section('title')Faq @endsection

@push('addBread')
    <li>
        <span>
            <span class="content-xs">Контент</span>
        </span>
    </li>
@endpush

@push('bee')
    @include('zADMIN._lego.Bee.nameIndex',['name' => 'Faq', 'add' => route('admin.faq.create'), 'Model' => 'Faq'])
    @include('zADMIN.PAGE._lego.filter.SHEMA.index.faqs')
@endpush

@include('zADMIN.PAGE._lego.filter._lego.filter_for_table.index',['Model' => 'Faq', 'model' => 'faq'])

 
@section('content')

    @component('zADMIN._wrap.index', ['css' => 'relative'])
        @component('zADMIN._wrap.max', ['css' => 'index'])
            @component('zADMIN._wrap.Table.index', ['css'=> '-faqs', 'Model' => 'Faq'])

                @foreach($faqs as $_faq)    
                 
                    @if($_GET == [])
                        @continue($_faq->faq_id != null)
                    @endif

                    @include('zADMIN._repo.teaser.index', ['Var' => $_faq])

                    @if(count($_faq->childrenFaqs))
                        <div class="children -lvl_1 / round">
                            @foreach ($_faq->childrenFaqs as $_childFaq)
                                @include('zADMIN._repo.teaser.index', ['Var' => $_childFaq, 'css' => ' -S'])
                            @endforeach
                        </div>
                    @endif
                    
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
