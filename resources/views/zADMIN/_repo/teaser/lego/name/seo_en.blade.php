<?
    if ($Var->name) {
        $NAME = $Var->name;
    } elseif ($Var->text) {
        $NAME = Str::limit(strip_tags($Var->text),40);
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
            @include('_wrap._text.ellipsis.name',['Var' => $NAME])
            @include('_wrap._text.ellipsis.name',['Var' => $Var->en_name ?? '<em>en_name</em>', 'css' => 'En none / content-m b400 / Min -w3'])
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
