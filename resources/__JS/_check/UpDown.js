let ScrollOldValue = window.pageYOffset;
let ScrollTrigger = false;

export function checkUpDown() {
  let newValue = window.pageYOffset;

  if (ScrollOldValue - newValue < 0 && ScrollTrigger) {
    body.classList.remove('up');
	ScrollTrigger = false;
  } else if (ScrollOldValue - newValue > 0 && !ScrollTrigger) {
    body.classList.add('up');
	ScrollTrigger = true;
  }

  ScrollOldValue = newValue;
}