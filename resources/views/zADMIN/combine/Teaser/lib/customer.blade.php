@component('zADMIN._wrap.Teaser.index', ['Var' => $Var, 'css' => 'space-left'])
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
                    {{$Var->dateAge}}
                </div>
            </div>

            <div class="_4">
                <ul class="menu -tag -S / flex">
                    @foreach($Var->tags as $_tag)
                    <li class="x-{{$_tag->slug}}">
                        <a class="content-xs / nowrap round-s" href="{{route('admin.tag.edit', $_tag->id)}}">{{$_tag->name}}</a>                        
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