<html>
<head>
<script type="text/javascript" src="js/jquery-2.1.3.js"></script>
<script type="text/javascript" src="js/script_dash.js"></script>

<link rel="stylesheet" type="text/css" href="css/style_dashbord.css">
</head>
<body>
<form action="upload.php" method="POST" id="upload" enctype="multipart/form-data" >
	
			<h2>Cadastro de Lugares</h2> 
	
			<input type="text" id="nome" name="nome" placeholder="Nome" />
			
	
			<input type="numberarea" id="telefone" name="telefone" placeholder="telefone (99)9999-9999" />
			
	
			<input type="text" id="enderco" name="enderco" placeholder="Endereço" />
			
		
			<input id="imagem" type="file" name="imagem" /><p>
		
			<input id="botao"  type="submit" value="Comcluir" />
	
</form>

<div action="index.php" id="voltar" name="voltar" ><div id="m"></div></div>

</body>


</html>