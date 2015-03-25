$(document).ready(function() {
	
	$('#nome').focus(function(){
		$('input').css('border-color','orange');
		$('#nome').css('border-color','#008Caa');
	});

	$('#telefone').focus(function(){
		$('input').css('border-color','orange');
		$('#telefone').css('border-color','#008Caa');
	});

	$('#voltar').click(function(){
		$('#voltar').action('back');	
	});	

});