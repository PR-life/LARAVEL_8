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
            @if($Var->mockup == 'link')
            <span class="_mockup">MOCKUP:link</span>
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
</div>
