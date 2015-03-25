// script_index.js

window.onload = function() {
  document.getElementById("pesquisa").focus();
};

$(document).ready(function() { 

    $('#menu').click(function() { 
        $.blockUI({ 
        	message: $('#loginForm'),
        	 css: { 
		        padding:        '10px', 
		        margin:          0, 
		        width:          '20%', 
		        top:            '0%', 
		        left:           '80%', 
		        border:         '0px solid #aaa',		        
		    },

        }); 
    }); 

 
    $( "#pesquisa" ).change(function() {
         $( "#pesquisar" ).submit(); 
    });

    $('#Login').click(function() { 
    	$('#Login').submit();    
    });  

    $('#fechar').click(function() {     	
    	$.unblockUI();	
    });

}); 


