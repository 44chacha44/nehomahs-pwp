$(document).ready(function() {

	/**
	 * jQuery Validate Function
	 *
	 * This function provides front-end validation for your form.
	 * If all tests set up here pass, the form data is AJAX submitted
	 * to the mailer.php file.
	 *
	 * Update this file as needed for your form.
	 * All ids and name values must match up to your form here.
	 *
	 * @author Rochelle Lewis <rlewis37@cnm.edu>
	 **/

	/** begin validate function here*/
	$("#my-contact-form"). validate(
		{
			debug: true,
			errorClass: "alert alert-danger",
			errorLabelContainer: "#output-area",
			errorElement: "div",

			// rules here define what is good or bad input
			// each rule starts with the form input elements NAME attribute
			rules: {
				firstName: {
					require: true
				},
				lastName: {
					require: true
				},
				emailAddress: {
					email: true,
					required: true
				},
				message: {
					required: true,
					maxLength: 2000,
					minLength: 10
				}
			},
			// error messages to display to the end user when rules above don't pass
			messages: {
						firstName: {
								required: "who dis is?"
				},
						lastName: {
								required: "who dis is?"
				},
						emailAddress: {
								email: "real email addy required",
								required: "gimme your email addy"
				},
						message: {
								required: "tell us your thoughts",
								maxLength: "2000 characters max",
								minLength: "10 characters min"
				}
			},

			// AJAX submit the form data to back end if rules pass
			submitHandler: function(form) {
				$("my-contact-form").ajaxSubmit({
					type: "POST",
					url: $("#my-contact-form").attr("action"),

					success: function(ajaxOutput) {
						// clear the output areas formatting
						$("#output-area").css("display", "");

						//write the servers reply to the output area
						$("#output-area").html(ajaxOutput);

						// reset the form if it was successful
						if($(".alert-success").length >= 1) {
							$("#my-contact-form")[0].reset();
						}
					}
				})
			}
		}); /* end validate function here*/
})