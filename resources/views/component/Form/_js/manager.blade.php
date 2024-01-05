<script>


    const FORM = document.getElementById('form{{$Form}}');
    const EMAIL = document.getElementById('input{{$inputEmail}}_Manager');
    const WHATSAPP = document.getElementById('input{{$inputWhatsapp}}_Manager');
    const TELEGRAM = document.getElementById('input{{$inputTelegram}}_Manager');
    const VIBER = document.getElementById('input{{$inputViber}}_Manager');
      

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