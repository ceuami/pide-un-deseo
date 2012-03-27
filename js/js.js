$(document).ready(function(){
	
	$('#deseo').focus();
	
	$('#pedir_deseo').submit(function(event){
	
		event.preventDefault();
	
		var d = $.trim($('#deseo').val());
	
		if(d != '' && d != null){
			
			$.ajax({
				
				url: '../php/consultarDeseos.php',
				
				data: '',
				
				type: 'POST',
				
				success: function(data){
					
					$('body').html(data);
					
				},
				
				error: function(geterror){
					
					alert(geterror);
					
				}
				
			});
			
		} else {
		
			$('#deseo').focus();
		
		}
		
	});
	
});
