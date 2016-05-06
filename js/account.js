function submitPassChange() {
	if(!$('#oldpass').val() || !$('#newpass').val()) {
		if(!$('#oldpass').val()) {
			$('#oldpass').addClass('placecolor');
			$('#oldpass').attr("placeholder", "Please enter old password");
		}
		if(!$('#newpass').val()) {
			$('#newpass').addClass('placecolor');
			$('#newpass').attr("placeholder", "Please enter new password");
		}
	}
}

function submitEmailChange() {
	if(!$('#oldemail').val() || !$('#newemail').val()) {
		if(!$('#oldemail').val()) {
			$('#oldemail').addClass('placecolor');
			$('#oldemail').attr("placeholder", "Please enter old address");
		}
		if(!$('#newemail').val()) {
			$('#newemail').addClass('placecolor');
			$('#newemail').attr("placeholder", "Please enter new address");
		}
	}
}

$('.passchange-form input').focus(function(){
   $('.passchange-form input').removeClass('placecolor');
});

$('.emailchange-form input').focus(function(){
   $('.emailchange-form input').removeClass('placecolor');
});