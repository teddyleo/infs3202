var failedTries = 0;
var locked = false;
var failCount = 0;

$('.message a').click(function(){
   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
});

$("#loginbutton").click(function submitLogin() {
	if(!$('#name').val() || !$('#pass').val()) {
		if(!$('#name').val()) {
			$('#name').addClass('placecolor');
			$('#name').attr("placeholder", "Please enter an username");
			
		}
		if(!$('#pass').val()) {
			$('#pass').addClass('placecolor');
			$('#pass').attr("placeholder", "Please enter a password");
		}
	}
	else {
		$.ajax({
			type: 'POST', 
			url: 'php/account.php', 
			data: { name: $('#name').val(), pass: $('#pass').val(), action: "login"},
			success: function (x) {                
				if(x != "Pass" || locked) {
					$( ".container p" ).css( "padding-bottom", "20px" );
					failedTries++;
					if(failedTries == 5){
						locked = true;
						failCount += 1;
						$('#drag').show('fast');
						$('#unlock').show('fast');
					}
					$( ".errormessage" ).text("Username or Password you entered is invalid.  Please try again.");
					$( ".errormessage" ).css( "display", "block" );
					if(!locked && failCount > 0){
						resetDrag();
						locked = true;
					}
				} else {
					window.location.href = "home.php";
				}
			}
		});
	}
	return false;
});

$("#createbutton").click(function submitRegister() {
	if(!$('#namereg').val() || !$('#passreg').val() || !$('#emailreg').val()) {
		if(!$('#namereg').val()) {
			$('#namereg').addClass('placecolor');
			$('#namereg').attr("placeholder", "Please enter a username");
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
		$.ajax({
			type: 'POST', 
			url: 'php/account.php', 
			data: { email: $('#emailreg').val(), pass: $('#passreg').val(), name: $('#namereg').val(), action: "create"},
			success: function (x) {                
				if(x != "Pass") {
					$( ".container p" ).css( "padding-bottom", "20px" );
					$( ".errormessage" ).text(x);
					$( ".errormessage" ).css( "display", "block" );
				}
				else {
					window.location.href = "home.php";
				}
			}
		});
	}
	return false;
});

$('.register-form input').focus(function(){
   $('.register-form input').removeClass('placecolor');
});

$('.login-form input').focus(function(){
   $('.login-form input').removeClass('placecolor');
});