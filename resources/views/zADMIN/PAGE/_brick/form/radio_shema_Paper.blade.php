<div>
    <input id="shema_default" class="None" type="radio" name="shema" value="default" {{$Var == 'default' ? 'checked' : ''}}>
    <label for="shema_default" class="Bone content-xs / space-s round-s relative">
        По умолчанию
    </label>							
</div>
<div>
    <input id="shema_article" class="None" type="radio" name="shema" value="article" {{$Var == 'article' ? 'checked' : ''}}>
    <label for="shema_article" class="Bone content-xs / space-s round-s relative">
        Статья
    </label>							
</div>
<div>
    <input id="shema_news" class="None" type="radio" name="shema" value="news" {{$Var == 'news' ? 'checked' : ''}}>
    <label for="shema_news" class="Bone content-xs / space-s round-s relative">
        Новость
    </label>
</div>