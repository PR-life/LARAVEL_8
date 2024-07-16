@component('zADMIN._wrap.Teaser.index', ['Var' => $Var, 'css14051235' => 'space-left'])
    <div class="flex bC / W-100">
        <div class="flex cI">
            <div class="_1">
                @include('zADMIN._repo.teaser.lego.name.customer')
            </div>
            <div class="Min -w1"></div>
            <div class="_4 none_80 / flex cI cross-s">
                {{-- <h1>{{$Var->crm->name ?? ''}}</h1> --}}
                {{-- @isset($Var->category->name)
                <div class="Tag -border / space-s round-s">
                    <a class="content-xxxs / letterUp Grey" href="{{route('admin.category.edit', $Var->category->id)}}">{{$Var->category->name}}</a>
                </div>
                @endisset --}}
                {{-- <ul class="menu -tag -XS vol-tail / flex">
                    @foreach($Var->tags as $_tag)
                    <li class="x-{{$_tag->slug}}">
                        <a class="a content-xxs / nowrap" href="{{route('admin.tag.edit', $_tag->id)}}">{{$_tag->name}}</a>                        
                    </li>
                    @endforeach
                </ul> --}}
            </div>
        </div>

        {{-- <div class="flex cI"> --}}
            <div class="flex cI / cross-s">

                @include('zADMIN._repo.teaser.lego.public_contact')

                <div class="mowrap">
                    <b class="content-s / Grey -c30" title="{{$Var->created_at}}">
                        @include('_wrap._text.ellipsis.name',['Var' => $Var->dateAsCarbon->diffForHumans()])
                    </b>
                </div>

                <div class="Min Max -w1 / none D-Db -on">
                    <div class="right-text W-100">
                        <span class="content-xxs / Grey -c30">id: {{$Var->id}}</span>
                    </div>    
                </div>
            </div>
        {{-- </div> --}}
    </div>
@endcomponent