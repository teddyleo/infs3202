var locked1 = true;
var locked2 = true;

function submitPassChange() {
	if(!$('#oldpass').val() || !$('#newpass').val() || locked1) {
		if(!$('#oldpass').val()) {
			$('#oldpass').addClass('placecolor');
			$('#oldpass').attr("placeholder", "Please enter old password");
		}
		if(!$('#newpass').val()) {
			$('#newpass').addClass('placecolor');
			$('#newpass').attr("placeholder", "Please enter new password");
		}
		if(locked1){
			$('#unlock1').css({'color':'red'});
		}
	} else {
		resetDrag('drag1', '#unlock1');
		$('#oldpass').val("");
		$('#newpass').val("");
	}
}

function submitEmailChange() {
	if(!$('#oldemail').val() || !$('#newemail').val() || locked2) {
		if(!$('#oldemail').val()) {
			$('#oldemail').addClass('placecolor');
			$('#oldemail').attr("placeholder", "Please enter old address");
		}
		if(!$('#newemail').val()) {
			$('#newemail').addClass('placecolor');
			$('#newemail').attr("placeholder", "Please enter new address");
		}
		if(locked2){
			$('#unlock2').css({'color':'red'});
		}
	} else {
		resetDrag('drag2', '#unlock2');
		$('#oldemail').val("");
		$('#newemail').val("");
	}
}

$('.passchange-form input').focus(function(){
   $('.passchange-form input').removeClass('placecolor');
});

$('.emailchange-form input').focus(function(){
   $('.emailchange-form input').removeClass('placecolor');
});