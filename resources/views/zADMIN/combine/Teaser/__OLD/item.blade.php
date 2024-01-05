@component('zADMIN._wrap.Teaser.index', ['Var' => $Var, 'css' => 'space-left'])

    @slot('cell_2')
        <div class="paragraph"></div>
        <div class="flex sC / cross-s">
            <div class="_1 / void-s / Min Max -w7">
                <div class="content" title="h1">{!!$Var->h1 ?? '<em>h1</em>'!!}</div>
                {{-- <div class="content" title="prev_h1">{!!$Var->prev_h1 ?? '<em>prev_h1</em>'!!}</div> --}}
                {{-- <div class="content" title="prev_h2">{!!$Var->prev_h2 ?? '<em>prev_h2</em>'!!}</div> --}}
                {{-- <div class="content" title="prev_p">{!!$Var->prev_p ?? '<em>prev_p</em>'!!}</div> --}}
            </div>
            <div class="_2 / Min Max -w9">
    
            </div>
        </div>
    @endslot


    @slot('cell_3')
        <div class="paragraph"></div>
        <div class="flex sC / cross-s">
            <div class="_1 / Min Max -w7">
                <span class="content">{!!$Var->title ?? '<em>title</em>'!!}</span>
            </div>
            <div class="_2"></div>
            <div class="_3 / Min Max -w9">
                <span class="content">{!!$Var->description ?? '<em>description</em>'!!}</span>
            </div>
        </div>
    @endslot
    <div class="flex cI / cross-s">
        <div class="_1 flex cI / Min Max -w5">
            <a class="content b600 / W-100" href="{{$route}}">
                @include('zADMIN.combine.Teaser._wrap.ellipsis',['Var' => $Var->name])
            </a>
        </div>

        <div class="_3 / Min Max -w2">
            @include('zADMIN.combine.Teaser._brick.slug')
        </div>

        <div class="_1 / Min Max -w3">
            <span class="content-s / nowrap Ellipsis">
                <span>{!!$Var->category->name ?? '<em>без катеории</em>'!!}</span>
            </span>
        </div>

        {{-- @include('zADMIN.combine.Teaser._brick.data',['Var' => $Var, 'css' => '_4']) --}}


        <div class="_5">
            @include('zADMIN._brick.manager.basket', ['class' => class_basename($Var), 'id' => $Var->id])
        </div>


    </div>
@endcomponent