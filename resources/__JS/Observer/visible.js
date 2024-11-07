document.addEventListener('DOMContentLoaded', function() {
	const options = {
	   root: null,
	   rootMargin: '-100px',
	   threshold: 0.0,
	};
	const elements = document.querySelectorAll('.Visible');
	const observer = new IntersectionObserver(callback, options);
 
	elements.forEach(element => observer.observe(element));
 
	function callback(entries, observer) {
	   entries.forEach(entry => {
		  const target = entry.target;
		  const isIntersecting = entry.isIntersecting;
		  
		  if (isIntersecting) {
			 handleVisibility(target);
			 if (!target.hasAttribute('visible-loop')) {
				observer.unobserve(target); // Остановить наблюдение после одной активации
			 }
		  } else {
			 toggleVisibility(target, false);
		  }
	   });
	}
 
	function handleVisibility(target) {
	   toggleVisibility(target, true);
 
	   if (target.hasAttribute('visible-click')) {
		  setTimeout(() => target.click(), 200);
	   }
 
	   if (target.hasAttribute('visible-node')) {
		  applyNodeClass(target);
		  target.removeAttribute('visible-node');
	   }
	}
 
	function toggleVisibility(element, isVisible) {
	   if (isVisible) {
		  element.classList.remove('visibleOff');
		  element.classList.add('visibleOn');
	   } else {
		  element.classList.remove('visibleOn');
		  element.classList.add('visibleOff');
	   }
	}
 
	function applyNodeClass(element) {
	   let div;
	   const nodeTarget = element.getAttribute('visible-node');
	   
	   switch (nodeTarget) {
		  case 'body':
			 div = document.body;
			 break;
		  case 'self':
			 div = element;
			 break;
		  case 'parent':
			 div = element.parentNode;
			 break;
		  case 'parentParent':
			 div = element.parentNode.parentNode;
			 break;
		  default:
			 div = document.getElementById(nodeTarget);
	   }
 
	   if (div) {
		  div.classList.add(element.getAttribute('visible-param'));
	   }
	}
 });
 