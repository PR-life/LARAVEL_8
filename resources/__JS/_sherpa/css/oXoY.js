export function oX(node, relativeToElement = false) {
	node.addEventListener('mousemove', (e) => {
		// Получаем размеры элемента один раз при инициализации
		const rect = node.getBoundingClientRect();

		window.requestAnimationFrame(() => {
			// Если `relativeToElement` true, то используем координаты относительно элемента
			const x = relativeToElement ? Math.round(e.clientX - rect.left) : Math.round(e.clientX);
			node.style.setProperty('--oX', x + 'px');
		});
	});
}

export function oY(node, relativeToElement = false) {
	node.addEventListener('mousemove', (e) => {
		// Получаем размеры элемента один раз при инициализации
		const rect = node.getBoundingClientRect();

		window.requestAnimationFrame(() => {
			// Если `relativeToElement` true, то используем координаты относительно элемента
			const y = relativeToElement ? Math.round(e.clientY - rect.top) : Math.round(e.clientY);
			node.style.setProperty('--oY', y + 'px');
		});
	});
}

export function thisOXOY(node) {
	node.addEventListener('mouseover', () => {
		// Получаем размеры элемента при наведении курсора
		const rect = node.getBoundingClientRect();
		node.style.setProperty('--oXthis', Math.trunc(rect.x)+ 'px');
		node.style.setProperty('--oYthis', Math.abs(Math.trunc(rect.y)) + 'px');
	});
}

// export function thisOXOYsolo(node) {
// 	// Получаем размеры элемента один раз и задаем свойства
// 	const rect = node.getBoundingClientRect();
// 	node.style.setProperty('--oXthis', Math.trunc(rect.x));
// 	node.style.setProperty('--oYthis', Math.trunc(rect.y));
// }
