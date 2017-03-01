function notifiacion_ajax(milisec, type, text) {
    var email_noty = noty(
        {
            dismissQueue: true,
            force: false,
            maxVisible: 5,
            timeout: milisec,
            progressBar: true,
            type: type,
            text: text
        }
    );
}