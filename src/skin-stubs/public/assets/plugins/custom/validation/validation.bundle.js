function removeValidationError(form_selector){
    $(form_selector).find('.invalid-feedback').remove();
    $(form_selector+' .form-control').removeClass('is-invalid');
    $(form_selector+' .input-group').removeClass('is-invalid');
    $(form_selector+' .position-relative').removeClass('is-invalid');
    $(form_selector+' .select2-selection').removeClass('is-invalid');
    $(form_selector+' .form-check-input').removeClass('is-invalid');
}

function parseValidationError(form_selector, error){
    removeValidationError(form_selector);
    var atribute_error = Object.keys(error);
    atribute_error.forEach(atribute => {
        if (atribute.includes('.')){
            let a = atribute.split('.');
            let b = a[0];
            for(let i = 1; i < a.length; i++){
                b += '['+a[i]+']';
            }
            if($(form_selector).find('[name="'+b+'"]').parent().hasClass('d-flex')){
                $(form_selector).find('[name="'+b+'"]').addClass('is-invalid');
                $(form_selector).find('[name="'+b+'"]').parent().addClass('is-invalid');
                $(form_selector).find('[name="'+b+'"]').parent().parent().append('<div class="invalid-feedback">'+error[atribute][0]+'</div>');
            } else {
                $(form_selector).find('[name="'+b+'"]').addClass('is-invalid');
                $(form_selector).find('[name="'+b+'"]').parent().append('<div class="invalid-feedback">'+error[atribute][0]+'</div>');
            }
        } else if ($(form_selector).find('[name="'+atribute+'"]').parent().hasClass('input-group') || $(form_selector).find('[name="'+atribute+'[]"]').parent().hasClass('input-group')){
            $(form_selector).find('[name="'+atribute+'"]').addClass('is-invalid');
            $(form_selector).find('[name="'+atribute+'"]').parent().addClass('is-invalid');
            $(form_selector).find('[name="'+atribute+'"]').parent().parent().append('<div class="invalid-feedback">'+error[atribute][0]+'</div>');

            $(form_selector).find('[name="'+atribute+'[]"]').addClass('is-invalid');
            $(form_selector).find('[name="'+atribute+'[]"]').parent().addClass('is-invalid');
            $(form_selector).find('[name="'+atribute+'[]"]').parent().parent().append('<div class="invalid-feedback">'+error[atribute][0]+'</div>');
        } else if ($(form_selector).find('[name="'+atribute+'"]').parent().hasClass('position-relative') || $(form_selector).find('[name="'+atribute+'[]"]').parent().hasClass('position-relative')){
            $(form_selector).find('[name="'+atribute+'"]').addClass('is-invalid');
            $(form_selector).find('[name="'+atribute+'"]').parent().addClass('is-invalid');
            $(form_selector).find('[name="'+atribute+'"]').parent().parent().append('<div class="invalid-feedback">'+error[atribute][0]+'</div>');

            $(form_selector).find('[name="'+atribute+'[]"]').addClass('is-invalid');
            $(form_selector).find('[name="'+atribute+'[]"]').parent().addClass('is-invalid');
            $(form_selector).find('[name="'+atribute+'[]"]').parent().parent().append('<div class="invalid-feedback">'+error[atribute][0]+'</div>');
        } else if ($(form_selector).find('[name="'+atribute+'"]').parent().hasClass('form-check') || $(form_selector).find('[name="'+atribute+'[]"]').parent().hasClass('form-check')){
            $(form_selector).find('[name="'+atribute+'"]').addClass('is-invalid');
            $(form_selector).find('[name="'+atribute+'"]').parent().addClass('is-invalid');
            $(form_selector).find('[name="'+atribute+'"]').parent().parent().find('.invalid-feedback').remove();
            $(form_selector).find('[name="'+atribute+'"]').parent().parent().append('<div class="invalid-feedback">'+error[atribute][0]+'</div>');

            $(form_selector).find('[name="'+atribute+'[]"]').addClass('is-invalid');
            $(form_selector).find('[name="'+atribute+'[]"]').parent().parent().addClass('is-invalid');
            $(form_selector).find('[name="'+atribute+'[]"]').parent().parent().parent().find('.invalid-feedback').remove();
            $(form_selector).find('[name="'+atribute+'[]"]').parent().parent().parent().append('<div class="invalid-feedback">'+error[atribute][0]+'</div>');
        } else if ($(form_selector).find('[name="'+atribute+'"]').hasClass('form-select') || $(form_selector).find('[name="'+atribute+'[]"]').hasClass('form-select')) {
            $(form_selector).find('[name="'+atribute+'"]').addClass('is-invalid');
            $(form_selector).find('[name="'+atribute+'"]').parent().find('.select2-selection').addClass('is-invalid');
            $(form_selector).find('[name="'+atribute+'"]').parent().append('<div class="invalid-feedback">'+error[atribute][0]+'</div>');

            $(form_selector).find('[name="'+atribute+'[]"]').addClass('is-invalid');
            $(form_selector).find('[name="'+atribute+'[]"]').parent().find('.select2-selection').addClass('is-invalid');
            $(form_selector).find('[name="'+atribute+'[]"]').parent().append('<div class="invalid-feedback">'+error[atribute][0]+'</div>');
        } else {
            $(form_selector).find('[name="'+atribute+'"]').addClass('is-invalid');
            $(form_selector).find('[name="'+atribute+'"]').parent().append('<div class="invalid-feedback">'+error[atribute][0]+'</div>');

            $(form_selector).find('[name="'+atribute+'[]"]').addClass('is-invalid');
            $(form_selector).find('[name="'+atribute+'[]"]').parent().append('<div class="invalid-feedback">'+error[atribute][0]+'</div>');
        }

        if($(form_selector).find('[name="'+atribute+'"]').hasClass('flatpickr-input')){
            $(form_selector).find('[name="'+atribute+'"]').parent().find('.input').addClass('is-invalid');
        }
    });
    $(form_selector).find('[name="'+atribute_error[0]+'"]').focus();
}

function removeTabError(form_selector){
    $('.icon-tab-invalid').remove();
}

function parseTabError(form_selector, error){
    removeTabError(form_selector);
    var atribute_error = Object.keys(error);
    atribute_error.forEach(atribute => {
        if (atribute.includes('.')){
            let a = atribute.split('.');
            let b = a[0];
            for(let i = 1; i < a.length; i++){
                b += '['+a[i]+']';
            }
            atribute = b;
        }
        let id = $(form_selector).find('[name="'+atribute+'"]').closest('.tab-pane').attr('id');
        let tab = $('[data-bs-toggle="pill"][href="#'+id+'"]');
        if(tab.find('.icon-tab-invalid').length < 1){
            tab.prepend('<i class="ti ti-info-alt text-danger me-1 icon-tab-invalid"></i>');
        }
    });
}
