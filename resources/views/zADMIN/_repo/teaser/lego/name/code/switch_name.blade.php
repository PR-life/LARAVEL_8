<?php
    if ($Var->name) {
        $NAME = $Var->name;
    } elseif ($Var->text) {
        $NAME = Str::limit(strip_tags($Var->text),40);
    } elseif ($Var->article) {
        $NAME = Str::limit(strip_tags($Var->article),40);
    } else {
        $NAME = $Var->created_at;
    }
?>