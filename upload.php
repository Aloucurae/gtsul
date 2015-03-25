<?php
//SISTEMA DESELVOLVIDO POR LUCIANO ZANITA | LUCIANOZANITA@LIVE.COM

//requerendo o banco de dados a conexão

include "conecta.php";
include_once("class_resize.php");

//PROPRIEDADES DO UPLOAD DO ARQUIVO

$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$link = $_POST['link'];

$imgName = $_FILES["imagem"]["name"];
$type = $_FILES["imagem"]["type"];
$size = $_FILES["imagem"]["size"];
$temp = $_FILES["imagem"]["tmp_name"];
$error = $_FILES["imagem"]["error"];




if ($error > 0)
{
	die("Ouve alguns problemas. ! Codigo do<b></b> Erro: $error.");
}
else
{

	if($type == "video/avi" || $size > 2000000) 
		//imagens que pode ser upload, e tamanho de arquivo maximo
	{
	die("Arquivo não aceito ou tamanho acima do Limite.");
	}
	else
	{	


		if(move_uploaded_file($temp, 'Imagens/'.$imgName)){
			$sql = "INSERT INTO lugares VALUES ('','".$nome."','".$telefone."','".$link."','','".$imgName."')";	
			mysqli_query($conexao, $sql);


			echo'Arquivo enviado<br>'.mysqli_insert_id($conexao).'<br>';
			echo $imgName;	
		}
		else{
			echo "não foi";
		}			                         // VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6]);	

		
		readfile('dashbord.php');
	} 
}


?>
<?php 


// if(isset($_POST['foto-cadastrada'])):

//     $idproduto = $_POST['id'];

//     $caminho = "Imagens";
//     $imagem = $_FILES['imagemupload']['name'];


//         if(move_uploaded_file($_FILES['imagemupload']['tmp_name'], $caminho . $imagem)){ 
//             // Cria tamanhos necessários
//             $resize_tamanho1 = new resize($caminho . $imagem);
//             $resize_tamanho2 = new resize($caminho . $imagem);

//             // Define as medidas que cada tamanho irá ter
//             $resize_tamanho1->resizeImage(320, 240, 'auto');
//             $resize_tamanho2->resizeImage(640, 480, 'auto');

//             // Renomeia imagem para que seja possivel o mesmo nome ter vários tamanhos
//             $tamanho1 = "tamanho1_".$imagem;
//             $tamanho2 = "tamanho2_".$imagem;

//             //Define o caminho, o nome e a qualidade
//             $resize_tamanho1->saveImage($caminho . $tamanho1, 100);
//             $resize_tamanho2->saveImage($caminho . $tamanho2, 100);

//             //apaga imagem original
//             unlink($caminho . $imagem);
//         }

//         $cadastrando = $conn->prepare("INSERT INTO fotos_produtos (id_produto, arquivo, posicao) VALUES (?, ?, ?) ");
//         $cadastrando->execute(array($idproduto, $imagem, 0));

//         header("Location: add_produto.php?adicionar-fotos&id=$idproduto");

// endif;
?>