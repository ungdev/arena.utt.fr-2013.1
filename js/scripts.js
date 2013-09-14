$(function() {

$('#submit').removeAttr('disabled'); // when we load the page make sure this button is OK
$('.message').css({"display": "none"});	// hide the message class
						
var emailsVal = $('#email').val(); // get the current value of #email

$("#email").focus(function(){	// when the input is clicked
	if($(this).val() == emailsVal){ // if the value is the defult value
		$(this).val(''); // clear the box
	}
});

									
$('#subscribe').submit(function(e){	// when clicked
	$('#submit').animate({'opacity': '0.4'}).attr({'disabled': 'disabled'}); // fade out/deactivet submit button
	e.preventDefault(); // prevent defult
	$.ajax({ //ajax
		type: 'post', // post the data
		dataType: 'json', // data type
		url: 'add.php', // url of the file to post to
		data: 'email=' + $('#email').val(), // data to post
		success: function(e){ // on success 
			if(e.error == true){ // if we set an error
				$('.message').html(e.message).slideDown(); // display the message
				$('#submit').animate({'opacity': '1'}, function(){ // fade back in the submit box
					$(this).removeAttr('disabled'); // remove the disabled attr so its clickable
				});
			}else{ // if we set didn't set an error
				$('#subscribe').slideUp(); // slide up the subscribe box
				$('.message').html(e.message).slideDown(); // slide down the message
			}
		}
	});
		
		$(this).ajaxError(function(){
//			alert("THERE WAS AN AJAX ERROR, SORRY ABOUT THAT"); // optional, to say if there was a AJAX error
		});
		return false; // return false (stop form from posting)
}); // end of AJAX





});