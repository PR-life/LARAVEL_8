document.addEventListener("DOMContentLoaded", () => {
	document.getElementById('body').classList.add('load');
	setTimeout(() => document.getElementById('body').classList.add('START'), 250);
	setTimeout(() => document.getElementById('body').classList.remove('MXAT'), 400);
	setTimeout(() => document.getElementById('body').classList.add('SATIRA'), 500);
});

 