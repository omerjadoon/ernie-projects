$(document).ready(function(){
	var formId = "#payment-form";
	//provide your public key here
	Stripe.setPublishableKey('pk_test_7Q71bOm8iPESKR19JiGqBLjg00Sz6AMigN');
	
	$(function() {
		var $form = $(formId);
		
		$form.submit(function(event) {

			// Disable the submit button to prevent repeated clicks:
			$form.find('.submit')
				.prop('value', 'Sending...')
				.prop('disabled', true);
				$('#paynow-btn').val("Processing...");

			// Request a token from Stripe:
			Stripe.card.createToken($form, stripeResponseHandler);

			// Prevent the form from being submitted:
			return false;
		});
	});


	function stripeResponseHandler(status, response) {
		console.log(response);

		// Grab the form:
		var $form = $(formId);

		if (response.error) { // Problem!

			// Show the errors on the form:
			 
			$('.payment-msg')
				.removeClass('success')
				.addClass('error')
				.html(response.error.message);

			$form.find('.submit')
				.prop('value', 'Submit Payment')
				.prop('disabled', false); // Re-enable submission
				$('#paynow-btn').val("Pay Now");

		} else { // Token was created!

			// Get the token ID:
			var token = response.id;

			console.log("hello"+camount);
			$form.append($('<input type="hidden" name="description">').val(cname));
			$form.append($('<input type="hidden" name="name">').val(cname));
			$form.append($('<input type="hidden" name="amount">').val(camount));
			$form.append($('<input type="hidden" name="product_id">').val("share"));

			// Insert the token ID into the form so it gets submitted to the server:
			$form.append($('<input type="hidden" name="stripe_token">').val(token));

			// Submit the form:
			 
			$.post('charge.php', $form.serialize(), function(response) {
				console.log(response);
					if (response.errors) {
						

						var str = "<ul>";
						for (var i in response.errors) {
							str += "<li>" + response.errors[i] + "</li>";
						}
						str += "</ul>";

						$('.payment-msg')
							.removeClass('success')
							.addClass('error')
							.html(str);

						$form.find('.submit')
							.prop('value', 'Submit Again')
							.prop('disabled', false); // Re-enable submission
							$('#paynow-btn').val("Pay Again");

					} else {

						// var str = "<ul>";
						// for (var i in response) {
						// 	str += "<li>" + i + ": " + response[i] + "</li>";
						// }
						// str += "</ul>";

						// $('.payment-msg')
						// 	.removeClass('error')
						// 	.addClass('success')
						// 	.html(str);
						jQuery.noConflict();

						$('#myModal').modal('show');

						$form.find('.submit')
						.prop('value', 'Pay Again')
						.prop('disabled', false); // Re-enable submission	

						$('#paynow-btn').val("Pay Again");
					}
				}, 'json'
			);
		
		}
	};


});