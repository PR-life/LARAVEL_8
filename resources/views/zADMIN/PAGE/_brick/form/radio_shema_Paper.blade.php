<div>
    <input id="schema_default" class="None" type="radio" name="schema" value="default" {{$Var == 'default' ? 'checked' : ''}}>
    <label for="schema_default" class="Bone content-xs / space-s round-s relative">
        По умолчанию
    </label>							
</div>
<div>
    <input id="schema_article" class="None" type="radio" name="schema" value="article" {{$Var == 'article' ? 'checked' : ''}}>
    <label for="schema_article" class="Bone content-xs / space-s round-s relative">
        Статья
    </label>							
</div>
<div>
    <input id="schema_news" class="None" type="radio" name="schema" value="news" {{$Var == 'news' ? 'checked' : ''}}>
    <label for="schema_news" class="Bone content-xs / space-s round-s relative">
        Новость
    </label>
</div>