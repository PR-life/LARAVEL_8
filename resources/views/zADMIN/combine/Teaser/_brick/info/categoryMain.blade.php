<div class="Min -w5 / space round void-s / _badge" style="background: #222222">
    <a class="content-xs" title="name" href="{{route('admin.category.edit', $Var->id)}}">{!!$Var->name!!}</a>
    <div class="content-xxs" title="title">{!!$Var->title ?? '<em>title</em>'!!}</div>
    <div class="content-xxs" title="description">{!!$Var->description ?? '<em>description</em>'!!}</div>

    <div class="content-xxs" title="name_tag">{!!$Var->name_tag ?? '<em>name_tag</em>'!!}</div>
    <div class="content-xxs" title="name_seo">{!!$Var->name_seo ?? '<em>name_seo</em>'!!}</div>
    <div class="content-xxs" title="h1">{!!$Var->h1 ?? '<em>h1</em>'!!}</div>
</div>