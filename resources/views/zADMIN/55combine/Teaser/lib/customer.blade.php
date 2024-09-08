@component('zADMIN._wrap.teaser.index', ['Var' => $Var, 'css14051235' => 'space-left'])
    <div class="flex bC W-100">

        <div class="flex cI / cross-s">
            <div class="_1 / Max Min -w5">
                @include('zADMIN/combine/Teaser/lib/brick/Preamble/customer')
            </div>
            <div class="_2 / Max Min -w4">
                @include('zADMIN/combine/Teaser/lib/brick/public_contact')
            </div>
            <div class="_3 / Max Min -w2">
                <div class="content-xs / center-text">
                    {{$Var->age}}
                </div>
            </div>

            <div class="_4 none_80 / flex cI cross-s">
                @isset($Var->category->name)
                <div class="Tag -border / space-s round-s">
                    <a class="content-xxxs / letterUp Grey" href="{{route('admin.category.edit', $Var->category->id)}}">{{$Var->category->name}}</a>
                </div>
                @endisset
                <ul class="menu -tag -XS vol-tail / flex">
                    @foreach($Var->tags as $_tag)
                    <li class="x-{{$_tag->slug}}">
                        <a class="a content-xxs / nowrap" href="{{route('admin.tag.edit', $_tag->id)}}">{{$_tag->name}}</a>                        
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="flex cI / cross-s">
            @include('zADMIN.combine.Teaser._brick.data.customer',['Var' => $Var, 'css' => '_5'])
        </div>
    </div>
@endcomponent