export function controlForm(param) {

    const form = param;
	

	// console.log(form.querySelector("[js-focus]"));

    if (form) {
        // Показываем форму (реализуйте вашу логику показа здесь)
        // form.style.display = "block";

        // Находим первый input или textarea внутри формы
        const firstInput = form.querySelector("[js-focus]");

        console.log(firstInput);

        if (firstInput) {
            // Устанавливаем фокус
            firstInput.focus();
        }

        // Удаляем атрибут control-form
        if (form.hasAttribute('control-form')) {
            form.removeAttribute('control-form');
            // console.log("Атрибут 'control-form' удалён у формы");
        }

    }
}
