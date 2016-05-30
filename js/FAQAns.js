function toggleAnswer(riddle, id) {
	var p = riddle.concat(' p');
	var h3 = riddle.concat(' h3');
	var h4 = riddle.concat(' h4');
	var up = riddle.concat(' #up');
	var down = riddle.concat(' #down');
	if($(p).is(':visible')){
		$(p).hide('fast');
		$(h3).show('fast');
		$(h4).hide('fast');
		$(down).show('fast');
		$(up).hide('fast');
	} else {
		$(p).show('fast');
		$(h3).hide('fast');
		$(h4).show('fast');
		$(down).hide('fast');
		$(up).show('fast');
	}
}