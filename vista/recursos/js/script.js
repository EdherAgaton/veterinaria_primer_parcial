$(document).ready(function(){

	// AGREGANDO CLASE ACTIVE AL PRIMER ENLACE ====================
	$('.category_list .category_item[category="all"]').addClass('ct_item-active');

	// FILTRANDO PRODUCTOS  ============================================

	$('.category_item').click(function(){
		var catProduct = $(this).attr('category');
		console.log(catProduct);

		// AGREGANDO CLASE ACTIVE AL ENLACE SELECCIONADO
		$('.category_item').removeClass('ct_item-active');
		$(this).addClass('ct_item-active');

		// OCULTANDO PRODUCTOS =========================
		$('.product-item').css('transform', 'scale(0)');
		function hideProduct(){
			$('.product-item').hide();
		} setTimeout(hideProduct,400);

		// MOSTRANDO PRODUCTOS =========================
		function showProduct(){
			$('.product-item[category="'+catProduct+'"]').show();
			$('.product-item[category="'+catProduct+'"]').css('transform', 'scale(1)');
		} setTimeout(showProduct,400);
	});

	// MOSTRANDO TODOS LOS PRODUCTOS =======================

	$('.category_item[category="all"]').click(function(){
		function showAll(){
			$('.product-item').show();
			$('.product-item').css('transform', 'scale(1)');
		} setTimeout(showAll,400);
	});
});

// MOSTRANDO TODOS LOS PRODUCTOS =======================

function showStep(step) {
    document.querySelectorAll('.register-form-step').forEach(function(stepDiv) {
        stepDiv.classList.remove('active');
    });
    document.getElementById('step-' + step).classList.add('active');

    // Mostrar y ocultar los botones de navegación y el botón de registro
    const prevButton = document.querySelector('.btn-prev');
    const nextButton = document.querySelector('.btn-next');
    const submitButton = document.querySelector('.register-btn-submit');

    if (step === 1) {
        prevButton.disabled = true;
        nextButton.style.display = 'inline-block';
        submitButton.style.display = 'none';
    } else if (step === 3) {
        nextButton.style.display = 'none';
        submitButton.style.display = 'block';
        prevButton.style.display = 'inline-block';
    } else {
        prevButton.disabled = false;
        nextButton.style.display = 'inline-block';
        submitButton.style.display = 'none';
    }
}

document.querySelectorAll('.btn-next').forEach(button => {
    button.addEventListener('click', () => {
        const currentStep = document.querySelector('.register-form-step.active');
        const nextStep = currentStep.nextElementSibling;
        if (nextStep && nextStep.classList.contains('register-form-step')) {
            currentStep.classList.remove('active');
            nextStep.classList.add('active');
            showStep(parseInt(nextStep.id.split('-')[1]));
        }
    });
});

document.querySelectorAll('.btn-prev').forEach(button => {
    button.addEventListener('click', () => {
        const currentStep = document.querySelector('.register-form-step.active');
        const prevStep = currentStep.previousElementSibling;
        if (prevStep && prevStep.classList.contains('register-form-step')) {
            currentStep.classList.remove('active');
            prevStep.classList.add('active');
            showStep(parseInt(prevStep.id.split('-')[1]));
        }
    });
});

showStep(1);