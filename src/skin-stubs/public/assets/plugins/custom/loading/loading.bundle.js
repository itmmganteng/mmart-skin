function showLoading(){
    SwalMSkin.fire({
        title: 'Loading...',
        html: 'Request is being processed',
        showConfirmButton: false,
        timerProgressBar: true,
        allowOutsideClick: false,
        allowEscapeKey: false,
        heightAuto: false,
        padding: 40,
        didOpen: () => {
            SwalMSkin.showLoading();
            const b = SwalMSkin.getHtmlContainer().querySelector('b')
        },
        willClose: () => {
            clearInterval()
        }
    });
}

function hideLoading(){
    SwalMSkin.close();
}

function showLoadingButton(button)
{
    button.attr('data-kt-indicator', 'on');
}

function hideLoadingButton(button)
{
    button.removeAttr('data-kt-indicator');
}
