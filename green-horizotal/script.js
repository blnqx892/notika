$(document).ready(function() {

	$('#contra2').keyup(function() {

		var pass1 = $('#contra1').val();
		var pass2 = $('#contra2').val();

		if ( pass1 == pass2 ) {
			$('#error2').css("background", "url(check.png)");
		} else {
			$('#error2').css("background", "url(check-.png)");
		}

	});

});