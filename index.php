<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style_principal.css">
</head>
<script type="text/javascript" src="js/jquery-2.1.3.js"></script>
<script type="text/javascript" src="js/jquery.blockUI.js"></script>
<script type="text/javascript" src="js/script_index.js"></script>

<body style="overflow-x: hidden; overflow-y: hidden">

<form id="pesquisar" action="index.php" >

	<div id="pesquisar" >
		<?php

		if(!isset($_GET['pesquisa'])){
			$_GET['pesquisa'] = '';
		}

		echo '<input type="text" placeholder="Pesquise por aqui" value="'.$_GET['pesquisa'].'" id="pesquisa" name="pesquisa" />';

		?>
		
		<div id="menu" >
			<div id="m"></div>
			<div id="m"></div>
			<div id="m"></div>
		</div>
	</div>	
</form>
<?php

echo '<iframe id="resultado" src="class_busca.php?pesquisa='.$_GET['pesquisa'].'"></iframe>';

?>
<form id="loginForm" style="display:none;" action="dashbord.php" >
	
	<br><input placeholder="login" type="text" />
	<br>
	<br>	
	<input placeholder="senha" type="password" />
	<br>
	<br>
	<input type="submit" id="Login" value="Login" />
	<br>
	<p id="fechar">close</p>		
</form>

</body>

</html>
