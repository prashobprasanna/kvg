jQuery(function($) {
	$('body').on('keypress change','.mobileNo',function(e){

		$(this).attr({
			'pattern': '[6-9]{1}[0-9]{9}',
			'title' : "Enter 10 Digit Correct Mobile Number.."
		});
		var mob=$(this).val();
		if(mob.length>9){
			return false;
		}

		//if the letter is not digit then display error and don't type anything
		if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
			return false;
		}
	});
});
