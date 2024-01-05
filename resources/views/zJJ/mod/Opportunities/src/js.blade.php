
@isset($js_id_event)
<script>
    let x22121238 = false;

    document.getElementById("milk_modOpportunities").addEventListener("click", function (event) {

        // console.log(222)
        document.getElementById("milk_modOpportunities").classList.add('Start');


        // if(document.getElementById("milk_modOpportunities").classList.contains('on')) {
        //     document.getElementById("milk_modOpportunities").classList.add('Start');
        // }

        // ja_endAnime_22121531
        // animationend

        document.getElementById("ja_endAnime_22121531").addEventListener("animationend", function (event) {
            
            setTimeout(function () {
                if(document.getElementById("milk_modOpportunities").classList.contains('on') && !x22121238) {
                    x22121238 = true;
                    // console.log(1111)
                    document.getElementById("foo_21121531").click();
                }
            }, 750);


        });

 

    },{once: true});
</script>
@endisset
 

<script>



    document.getElementById("foo_21121531").addEventListener("click", function (event) {
        document.getElementById("li_all_apk").click();
        document.getElementById("scr_25121053").scrollTop = 0;
    });

    document.getElementById("foo_21121532").addEventListener("click", function (event) {
        document.getElementById("li_all_apk").click();
        document.getElementById("scr_25121053").scrollTop = 0;
    });
    document.getElementById("foo_21121533").addEventListener("click", function (event) {
        document.getElementById("li_all_mod").click();
        document.getElementById("scr_25121053").scrollTop = 0;
    });
</script>

 