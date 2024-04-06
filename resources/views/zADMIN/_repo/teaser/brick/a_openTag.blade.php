<a class="{{$cssA ?? 'content-m b600'}} / W-100 / flex dC" 
href="{{ route('admin.'.mb_strtolower(class_basename($Var)).'.edit', [
        mb_strtolower(class_basename($Var)) => $Var->id,
        'name' => $_request['name'] ?? null,
        'page' => $_request['page'] ?? null,
        'tag_id' => $_request['tag_id'] ?? null,
        'category_id' => $_request['category_id'] ?? null,
        'group_id' => $_request['group_id'] ?? null
    ])
}}"
>