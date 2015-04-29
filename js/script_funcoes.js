
var idconte;

function ampliame(id) {
	
	document.getElementById(id).className = "amplia";
	
	idcon = 'cont_'+id;
	idconte = idcon;

	document.getElementById(idcon).style.display = "block"; 
 
	 var divs = $('.normal'); 	 
  
	 $.each(divs,function(x,y){
	 	
	 	$(this).css('display','none');
	 	 

	 });
}

function voltanormal(){

	var divs = $('.normal'); 	 
	 	  
	$.each(divs,function(x,y){
	 
		$(this).css('display','block');


	});

}

function voltanormal1(){


	document.getElementById(idcon).style.display = "none";
	
	var ampliado = $('.amplia'); 

	 for(var i=0;i<=ampliado.length;i++) { 
	 	
	 		ampliado[i].className = "normal"; 	
	 		voltanormal();	 	
	 }	

	 			 
}


