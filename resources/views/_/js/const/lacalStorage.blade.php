if(localStorage.getItem('body') != null){
	let arr = JSON.parse(localStorage.getItem('body'));
	for (let i in arr){
		document.getElementById('body').classList.add(arr[i]);
	}
} else {
	localStorage.setItem('body', JSON.stringify(['menuOff']))
}