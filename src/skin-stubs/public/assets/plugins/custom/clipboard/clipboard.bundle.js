function unsecuredCopyToClipboard(text) {
    const textArea = document.createElement("textarea");
    textArea.value = text;
    document.body.appendChild(textArea);
    textArea.focus();
    textArea.select();
    try {
        document.execCommand('copy');
    } catch (err) {
        console.error('Unable to copy to clipboard', err);
    }
    document.body.removeChild(textArea);
}

function copyClipboard(value) {
    if (window.isSecureContext && navigator.clipboard) {
        navigator.clipboard.writeText(value);
    } else {
        unsecuredCopyToClipboard(value);
    }


    SwalMSkin.fire({
        icon: 'success',
        title: 'The token has been copied to the clipboard.',
        toast: true,
        position: 'bottom-end',
        showConfirmButton: false,
        timer: 5000,
        timerProgressBar: true,
        customClass: {
            title: 'fs-6 fw-semibold text-gray-900',
            popup: 'bg-light',
            icon: 'bg-light'
        },
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', SwalMSkin.stopTimer)
            toast.addEventListener('mouseleave', SwalMSkin.resumeTimer)
        }
    });
}
