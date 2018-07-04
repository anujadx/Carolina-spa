$(document).ready(function(){
	$('#contact_form').on('submit', function(event){

		var fname=$('#name').val();
		var email=$('#email').val();
		var message=$('#message').val();

		if(fname.length < 3){
			$('#name').addClass('has-danger');
			$('#name').parent().find('label').innerHTML('Not valid');

		}





		event.preventDefault();
	});
});
