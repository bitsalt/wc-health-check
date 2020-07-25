const allowSubmit = function(lang) {
   let msg = 'Please check the reCAPTCHA box.';
   if(lang == 'es') {
      msg = 'Por favor, proceda a realizar la verificación reCAPTCHA.';
   }
   let recaptcha = $("#g-recaptcha-response").val();
   if (recaptcha === "") {
      event.preventDefault();
      $('#recaptchaAlert').removeClass('d-none');		
      $('#recaptchaAlert').text(msg);
   }
}

const phoneFormat = function() {
    let field = $('#contact_number');
    let text = field.val();
    let num = text.replace(/(\d{3})(\d{3})(\d{4})/, '($1) $2-$3');
    field.val(num);
}

$.validator.setDefaults({
    debug: false
    //success: "valid"
});
$( "#chromeForm" ).validate({
    rules: {
        student_id: {
            required: true,
            number: true
        },
        school_select: { required: true},
        student_first_name: { required: true},
        student_last_name: { required: true},
        parent_email: { required: true },
        parent_first_name: { required: true},
        parent_last_name: { required: true},
        contact_number: {
            required: true,
            phoneUS: true
        },
        language_select: { required: true},
        problem_text: { required: true}
    }
});
