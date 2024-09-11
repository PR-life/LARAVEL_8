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
    @include('zADMIN._repo.teaser.lego.name.brick.icoStatus')


    @include('zADMIN._repo.teaser.brick.a_openTag')
        @include('zADMIN._repo.teaser.lego.name.brick.name')
    </a>
</div>
