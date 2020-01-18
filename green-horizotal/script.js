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

$(document).ready(function() {

	$('#con_password').keyup(function() {
	
	  var pass11 = $('#password').val();
	  var pass22 = $('#con_password').val();
	
	  if ( pass11 == pass22 ) {
		$('#error22').css("background", "url(check.png)");
	  } else {
		$('#error22').css("background", "url(check-.png)");
	  }
	
	});
	
	});