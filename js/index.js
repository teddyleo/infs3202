$('.message a').click(function(){
   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
});

function submitLogin() {
	if(!$('#email').val() || !$('#pass').val()) {
		if(!$('#email').val()) {
			$('#email').addClass('placecolor');
			$('#email').attr("placeholder", "Please enter an email");
			
		}
		if(!$('#pass').val()) {
			$('#pass').addClass('placecolor');
			$('#pass').attr("placeholder", "Please enter a password");
		}
	}
	else {
		$('.login-form').submit();
	}
}

function submitRegister() {
	if(!$('#namereg').val() || !$('#passreg').val() || !$('#emailreg').val()) {
		if(!$('#namereg').val()) {
			$('#namereg').addClass('placecolor');
			$('#namereg').attr("placeholder", "Please enter a name");
		}
		if(!$('#passreg').val()) {
			$('#passreg').addClass('placecolor');
			$('#passreg').attr("placeholder", "Please enter a password");
		}
		if(!$('#emailreg').val()) {
			$('#emailreg').addClass('placecolor');
			$('#emailreg').attr("placeholder", "Please enter an email address");
		}
	}
	else {
		$('.register-form').submit();
	}
}

$('.register-form input').focus(function(){
   $('.register-form input').removeClass('placecolor');
});

$('.login-form input').focus(function(){
   $('.login-form input').removeClass('placecolor');
});