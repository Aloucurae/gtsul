<?php
var_dump($_POST);

$id = $_POST['id'];

include "conecta.php";

$sql = mysqli_query($conexao,"SELECT * 
					 		    FROM lugares
							   WHERE codigo_lugar =".$id);



while($row = mysqli_fetch_array($sql)) {

	// Escreve o valor da coluna FirstName (que está no array $row)
	$imgnome = $row['foto_lugar'];

	$imag = '<div ><input type="image" id="imag"  name="imag" src="Imagens/'.$imgnome. '" />';

	//echo $form;

	echo $imag;		

	//echo $fexaFor;
}

// Encerra a conexão
mysqli_close($conexao);





?>