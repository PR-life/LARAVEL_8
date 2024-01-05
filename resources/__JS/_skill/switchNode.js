export function switchNode(param){
	// console.log('switchNode')
	// console.log(param)
	if(!param.hasAttribute('data-node')) {
		return param;
	} else {
		switch (param.getAttribute('data-node')) {
			case 'body':
				return document.getElementById('body');
				break;
			case 'parent':
				return param.parentNode;
				break;
			case 'parentParent':
				return param.parentNode.parentNode
				break;
			default:
				return document.getElementById(param.getAttribute('data-node'))	
			}
	}

}