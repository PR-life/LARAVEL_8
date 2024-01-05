var timeoutAct = false;
var triggerAct = 1;

export function actScroll() {
  if (triggerAct == 1) {
    document.getElementById("body").classList.add('act');
    --triggerAct;
  }

  if (timeoutAct !== false) {
    clearTimeout(timeoutAct);
  }

  timeoutAct = setTimeout(function () {
    document.getElementById("body").classList.remove('act');
    ++triggerAct;
  }, 100);
};