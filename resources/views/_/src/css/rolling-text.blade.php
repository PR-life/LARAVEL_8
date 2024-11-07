
@push('style_mbl')
{{-- .rolling-text .block:last-child {
  --c-text: #fff;
  --c-h: #fff;
} --}}
@endpush

@push('style')
#body.MXAT .rolling-text {
    opacity: 0;
}

.rolling-text .block {
    font-size:inherit;
    line-height:inherit;
}

._h.rolling-text {
    height: var(--Font-CALC-h1-height);
}
.rolling-text {
    overflow: hidden;
}

{{-- 

    

.Font ._h.rolling-text {

    
  display: inline-block;

  height: var(--Font-h1-height-CALC);
}


 --}}


.rolling-text.-hover:hover .letter,
.rolling-text.play .letter {
    transform: translateY(-100%);
}

{{-- baza --}}

.rolling-text {
    --c-text: transparent;
    --c-h: transparent;
  
    display: inline-block;
    overflow: hidden;
  }

.rolling-text .letter {      
    display: inline-block;
    transition: transform 0.6s cubic-bezier(0.76, 0, 0.24, 1);
}



.letter:nth-child(1) {
    transition-delay: 0s;
}
  
  .letter:nth-child(2) {
    transition-delay: 0.015s;
  }
  
  .letter:nth-child(3) {
    transition-delay: 0.03s;
  }
  
  .letter:nth-child(4) {
    transition-delay: 0.045s;
  }
  
  .letter:nth-child(5) {
    transition-delay: 0.06s;
  }
  
  .letter:nth-child(6) {
    transition-delay: 0.075s;
  }
  
  .letter:nth-child(7) {
    transition-delay: 0.09s;
  }
  
  .letter:nth-child(8) {
    transition-delay: 0.105s;
  }
  
  .letter:nth-child(9) {
    transition-delay: 0.12s;
  }
  
  .letter:nth-child(10) {
    transition-delay: 0.135s;
  }
  
  .letter:nth-child(11) {
    transition-delay: 0.15s;
  }
  
  .letter:nth-child(12) {
    transition-delay: 0.165s;
  }
  
  .letter:nth-child(13) {
    transition-delay: 0.18s;
  }
  
  .letter:nth-child(14) {
    transition-delay: 0.195s;
  }
  
  .letter:nth-child(15) {
    transition-delay: 0.21s;
  }
  
  .letter:nth-child(16) {
    transition-delay: 0.225s;
  }
  
  .letter:nth-child(17) {
    transition-delay: 0.24s;
  }
  
  .letter:nth-child(18) {
    transition-delay: 0.255s;
  }
  
  .letter:nth-child(19) {
    transition-delay: 0.27s;
  }
  
  .letter:nth-child(20) {
    transition-delay: 0.285s;
  }
  
  .letter:nth-child(21) {
    transition-delay: 0.3s;
  }

  .letter:nth-child(22) {
    transition-delay: 0.315s;
  }
  .letter:nth-child(23) {
    transition-delay: 0.33s;
  }
  .letter:nth-child(24) {
    transition-delay: 0.345s;
  }
  .letter:nth-child(25) {
    transition-delay: 0.36s;
  }
  .letter:nth-child(26) {
    transition-delay: 0.375s;
  }
  .letter:nth-child(27) {
    transition-delay: 0.39s;
  }
  .letter:nth-child(28) {
    transition-delay: 0.405s;
  }
  .letter:nth-child(29) {
    transition-delay: 0.42s;
  }
  .letter:nth-child(30) {
    transition-delay: 0.435s;
  }
  .letter:nth-child(31) {
    transition-delay: 0.45s;
  }
  .letter:nth-child(32) {
    transition-delay: 0.465s;
  }
  .letter:nth-child(33) {
    transition-delay: 0.48s;
  }

.letter:nth-child(34) {
    transition-delay: 0.495s;
}

.anime-06111830 {
  animation: anime_06111830 10s ease;
  animation-fill-mode: forwards;
}


/* @-for $i from 0 through 20 {
    .letter:nth-child(#{$i + 1}) {
    transition-delay: $delay * $i;
    }
} */
@endpush