$(document).on('change', '#dropd1', function(){ 
		 var value2 = this.getAttribute("data-submission-id");
         var value = $(this).val();
         $.post('grade.php', {vipin: value,subid: value2});
		 $('#'+value2).addClass('success').removeClass('info');	

		 });