jQuery(document).ready(function(){


	jQuery(".upload_in").click(function(e){
		jQuery("#file_upload").click();
	});

	jQuery(".send_faq").click(function(e){
		jQuery(".trigger_submit").click();
	});

	jQuery( "#file_upload" ).change(function() {
	  	var filename = this.value;
	    var lastIndex = filename.lastIndexOf("\\");
	    if (lastIndex >= 0) {
	        filename = filename.substring(lastIndex + 1);
	    }
	    jQuery('#after_change').html(filename);
	});

	jQuery("#file_form").on('submit', function( event ) {
	  	event.preventDefault();

		validate_faq_form(jQuery(this));

	});
  });

function validate_faq_form(form){
	//properties
	console.log(form);
	var form_data   = new FormData(form[0]);
	var errors 		= false;
	var fullname 	= jQuery("#fullname");
	var email 		= jQuery("#email");
	var phone 		= jQuery("#phone");
	var cat_choose  = jQuery("#cat_choose option:selected").data('name');
	var subject  	= jQuery("#subject");
	var question    = jQuery("#question");
	var check_in    = jQuery('.check_in').is(':checked') ? true : false;
	var email_error,fullname_error,phone_error,question_error;

	//remove all aerrors mark
	form.find(".err").removeClass('err');

	//validate fields
	if (check_in) {

		if (fullname.val() === "") {
			fullname.addClass('err');
			errors = true;
		}

		if (email.val() === "" || !isValidEmailAddress(email.val())) {
			email.addClass('err');
			errors = true;
		}

		if (phone.val() === "") {
			phone.addClass('err');
			errors = true;
		}

		if (question.val() === "") {
			question.addClass('err');
			errors = true;
		}

		if(!errors) {
			form_data.append('action', 'faq_insert');
			form_data.append('cat_choose', cat_choose);
			ajax_send_faq(form_data,cat_choose);
		}
	}
	else{
		jQuery("label.check1").addClass("err");
	}
}
function ajax_send_faq(form_data,cat_choose) {
	showLoader();

	jQuery.ajax({
        url: ajax.ajaxurl,
        data: form_data,
        cache: false,
        processData: false,
        contentType: false,
        type: 'POST',
       	 	success: function (response) {
				hideLoader();
	            var result = jQuery.parseJSON(response);
	            location.reload();
		    }
    });
}

function showLoader(){
	jQuery('.faq_loader').addClass('active');
}
function hideLoader(){
	jQuery('.faq_loader').addClass('active');
}
  	function isValidEmailAddress(emailAddress) {
   	 var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
	    return pattern.test(emailAddress);
	};


	function uploadOnChange() {
	    var filename = this.value;
	    var lastIndex = filename.lastIndexOf("\\");
	    if (lastIndex >= 0) {
	        filename = filename.substring(lastIndex + 1);
	    }
	    console.log(filename);

	    jQuery('#after_change').html(filename);
	}
