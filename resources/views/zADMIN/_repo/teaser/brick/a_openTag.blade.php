<a class="{{$css16041455 ?? 'W-100 / flex content-m b600 dC'}}" 
href="{{ route('admin.'.mb_strtolower(class_basename($Var)).'.edit', [
        mb_strtolower(class_basename($Var)) => $Var->id,
        'textsms' => $_request['textsms'] ?? null,
        'name' => $_request['name'] ?? null,
        'page' => $_request['page'] ?? null,
        'tag_id' => $_request['tag_id'] ?? null,
        'category_id' => $_request['category_id'] ?? null,
        'group_id' => $_request['group_id'] ?? null
    ])
}}"
>