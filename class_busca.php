<?php

	include "conecta.php";

	@$lugar = $_GET['pesquisa'];

	$sql = mysqli_query($conexao,"SELECT * 
						  			FROM lugares
						  		   WHERE nome_lugar LIKE '%".$lugar."%'");

	$css = '<link rel="stylesheet" type="text/css" href="css/style_principal.css">' ;
	//$script = '<script type="text/javascript" src="js/script_index.js"></script>';
	$script2 = '<script type="text/javascript" src="js/jquery-2.1.3.js"></script>';
	$script3 = '<script type="text/javascript" src="js/script_teste.js"></script>';

	$form = '<form id="mostra" method="POST"  action="mostra.php" >';
	$corpo = '<div id="corpo">';
	$divFecha = '</div>';
	$desc = '<div id="desc" name="desc">';
	$fexaFor = '<imput type="button" class="submit" id="go" value="rte"/></form>';

	//echo $script;
	echo $script2;
	echo $script3;

	echo $css;
	echo $corpo;
	

	while($row = mysqli_fetch_array($sql)) {

		// Escreve o valor da coluna FirstName (que está no array $row)
		$imgnome = $row['foto_lugar'];
		$id = $row['codigo_lugar'];
		$imag = '<div ><input type="image" id="imag"  name="imag" src="Imagens/'.$imgnome.'" alt="Submit" /><input type="hidden" id="id" value="'.$id.'"  name="id" />';
		$descr = $desc.'<b>'.$row['nome_lugar'].'</b><br />'.$row['tele_lugar'];

		//echo $form;
		echo $form;
		echo $imag;			
		echo $descr;
		echo $divFecha;	
		echo $divFecha;	
		echo $fexaFor;
		//echo $fexaFor;
	}

	// Encerra a conexão
	mysqli_close($conexao);

	// for ($i = 1; $i <= 100; $i++) {
	// 	if($cont == 1){
	// 		echo $imag;
	//         echo $imap;
	//         echo $imap;
	//         $cont = 2;
	// 	}
	// 	else{
	// 		echo $imag;
	//         echo $imap;
	//         echo $imap;
	//         echo $imap;
	//         $cont = 1;
	// 	}
	    
	// }

	echo $divFecha;

?>