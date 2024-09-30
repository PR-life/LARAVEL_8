<?
    if ($Var->name) {
        $NAME = $Var->name;
    } elseif ($Var->text) {
        $NAME = Str::limit(strip_tags($Var->text),40);
    } elseif ($Var->article) {
        $NAME = Str::limit(strip_tags($Var->article),40);
    } else {
        $NAME = $Var->created_at;
    };
?>

<div class="wrap-name / flex cI">

    <div class="Abs -left -t -b / flex dC cC pr-1 / Grey / none D-Status -on">
         @include('zADMIN._repo.teaser.brick.icoStatus')
    </div>
    @include('zADMIN._repo.teaser.brick.a_openTag')
        <span class="_name / flex cI cross-xxs">
            @if($Var->mockup)
            <span class="_mockup">MOCKUP:{{$Var->mockup}}</span>
            @endif
            @if($Var->group_id)
            <span class="_mockup">[ {{$Var->group->name}} ]</span>
            @endif
            @include('_wrap._text.ellipsis.name',['Var' => $NAME])
            <span class="En none">
                @include('_wrap._text.ellipsis.name',['Var' => $Var->en_name ?? '<em>en_name</em>', 'css' => 'content-m b400 / Min -w3'])
            </span>
        </span>
        <span class="_title / flex dC / none D-Seo -on"> 
            {!!$Var->title ?? '<em>title</em>'!!}
            <span class="none En -on"> 
                {!!$Var->en_title ?? '<em>en_title</em>'!!}
                <span class="paragraph block"></span>
            </span> 
        </span>
    </a>

    @if($Var->surrogate)
    <a class="none D-Relation -on / flex cI {{$Var->id == $Var->surrogate->surrogate->id ? 'Green' : ''}}" href="{{ route(strtolower('admin.' . (class_basename($Var)) . '.edit'), [mb_strtolower(class_basename($Var->surrogate)) => $Var->surrogate->id])}}">
        <svg viewBox="0 0 27.7 27.7">
            <g fill="currentColor">
                <path d="M25.899,5.935h-15.81c-0.991,0-1.801,0.771-1.801,1.721v1.639h15.81v0.45v4.128v0.314H8.288v1.845 c0,0.95,0.81,1.722,1.801,1.722h15.81c0.996,0,1.801-0.771,1.801-1.722V7.656C27.7,6.706,26.895,5.935,25.899,5.935z"/>
                <path d="M3.599,18.302v-0.418v-4.126V13.41h15.808v-1.74c0-0.952-0.805-1.723-1.801-1.723H1.798 C0.805,9.947,0,10.717,0,11.669v8.374c0,0.952,0.805,1.723,1.798,1.723h15.808c0.996,0,1.801-0.771,1.801-1.723v-1.741H3.599z"/>
            </g>
        </svg>
        <span class="ml-2 / content-min Ellipsis nowrap / Max -w2">{{$Var->surrogate->name}}</span>
    </a>

    @endif
</div>
