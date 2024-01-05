<div class="wrap_guest / pointer" data-click data-goto='smsGuest' data-foo='click'>
    <div class="noEvents">
        <div class="Vote -def / flex cI / cross-xs space-left space-right round">
            <div class="flex cI / pointer">
                <div class="Ico mr-1">
                    @svg('vote')
                </div>
                <span class="content -lineHeight">{{$Var->liked_users_count ?? 0}}</span>
            </div>
        
            <div class="separator"></div>
        
            <div class="Ico rotate-l2 / pointer">
                @svg('vote')
            </div>
        </div>
    </div>
</div>