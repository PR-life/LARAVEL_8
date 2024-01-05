<div>
    <input id="shemaTeaser_default" class="none" type="radio" name="shema_teaser" value="default" {{$Var == 'default' ? 'checked' : ''}}>
    <label for="shemaTeaser_default" class="Bone content-xs / space-s round-s relative">
        <span class="content-xxs"></span>
        <span>по <br>Умолчанию</span>
    </label>							
</div>
<div>
    <input id="shemaTeaser_news" class="none" type="radio" name="shema_teaser" value="news" {{$Var == 'news' ? 'checked' : ''}}>
    <label for="shemaTeaser_news" class="Bone content-xs / space-s round-s relative">
        <span class="content-xxs"></span>
        <span>для <br>Новости</span>
    </label>
</div>