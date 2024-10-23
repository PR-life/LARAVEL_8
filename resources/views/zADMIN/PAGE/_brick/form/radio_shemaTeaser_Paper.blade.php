<div>
    <input id="schemaTeaser_default" class="none" type="radio" name="schema_teaser" value="default" {{$Var == 'default' ? 'checked' : ''}}>
    <label for="schemaTeaser_default" class="Bone content-xs / space-s round-s relative">
        <span class="content-xxs"></span>
        <span>по <br>Умолчанию</span>
    </label>							
</div>
<div>
    <input id="schemaTeaser_news" class="none" type="radio" name="schema_teaser" value="news" {{$Var == 'news' ? 'checked' : ''}}>
    <label for="schemaTeaser_news" class="Bone content-xs / space-s round-s relative">
        <span class="content-xxs"></span>
        <span>для <br>Новости</span>
    </label>
</div>