<script>


    const FORM = document.getElementById('{{$Form}}');
    const EMAIL = document.getElementById('{{$inputEmail}}') ?? document.getElementById('js_input_hidden');
    const WHATSAPP = document.getElementById('{{$inputWhatsapp}}') ?? document.getElementById('js_input_hidden');
    const TELEGRAM = document.getElementById('{{$inputTelegram}}') ?? document.getElementById('js_input_hidden');
    const VIBER = document.getElementById('{{$inputViber}}') ?? document.getElementById('js_input_hidden');
      
    
    FORM.addEventListener("submit", function (event) {
    
      if (
        EMAIL.value.length < 2 &&
        WHATSAPP.value.length < 2 &&
        TELEGRAM.value.length < 2 &&
        VIBER.value.length < 2
        ) {
        event.preventDefault();
        showError(null, FORM);
      }
    
    });
    
    
    function showError(param, form) {
    
        form.classList.add('-error')
        x643635 = function() {
            form.classList.remove('-error')
        }

        setTimeout(x643635, 1500);
        
    }
    
</script>
    
    
    
    
    {{-- @if ($errors->newSms->any())
    @push('js-bottom-solo')
        <script>
            
            document.getElementById('Message_save').classList.add('-bg');
    
    
            let x_09082028 = function foo(){
    
            const element = document.getElementById('formCallback')
            const topPos = element.getBoundingClientRect().top - 120;
    
                window.scrollTo({
                    top: topPos,
                    behavior: 'smooth'
                })
            }
            
            document.addEventListener("DOMContentLoaded", x_09082028)
        </script>
    @endpush
    @endif --}}