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
            @if($Var->blade_name)
            <span class="Grey">[ blade ]</span>
            @endif
            @include('_wrap._text.ellipsis.name',['Var' => $NAME])
        </span>
    </a>
</div>
