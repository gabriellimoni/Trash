<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <script src="js/jquery-3.2.0.js"></script>
    <script src="js/jquery-3.2.0.min.js"></script>
    <script type="text/javascript" src="js/js.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Formulário de Login</title>
</head>

<body>
<div id="principal">
	<header id="topo">
		<div id="logoMenu">
            <img id="logo" src="img/LOGOT.png" alt="trash.gg">   
    	</div> 
        <div id="logoMenu">
            <nav class="topnav" id="myTopnav">
                <a href="index.php">Início</a>
                <a href="#Reporte">Reporte</a>
                <a href="#Contato">Contato</a>
                <a href="#Sobre">Sobre</a>
                <a href="#Login" id="openLogin" onClick="abreModal()">  Login</a>
            </nav>
        </div>	
    </header>
	<footer id="rodape">
        <p>Criado e desenvolvido por Adilson da Silva Porto. Todos os direitos reservados. </p>
        <img id="trash" src="img/trash.png" alt="Trash" >
    </footer>  
	
	<form action="Processa.php" method="post" name="frm_cad" id="frm_cad">
    	<table id="form">
        	<tr>
            	<td>
        			Nome: 
                </td>
                <td>
                	<input type="text" name="nome" id="nome" size="50"/>
        		</td>
            </tr>
            <tr>
            	<td>
        			E-mail: 
                </td>
                <td>
                	<input type="text" name="email" id="email" size="50"/>
        		</td>
            </tr>
            <tr>
            	<td>
        			Nickname: 
                </td>
                <td>
                	<input type="text" name="nickname" id="nickname" size="20"/>
        		</td>
            </tr>
            
            <tr>
            	<td>
        			Senha:
                </td>
                <td>
                	<input type="text" name="senha" id="senha"/>
        		</td>
            </tr>
            
            <tr>
            	<td>
        			Confirmar senha: 
                </td>
                <td>
                	<input type="text" name="c_senha" id="c_senha"/>
        		</td>
            </tr>
            <tr>
            	<td></td>
                <td><input type="submit" class="signupbtn" name="enviar" id="enviar" value="Enviar" /></td>
            </tr>
        </table>
    </form>
</div>
	<?php
	 	include 'modal.php';
	 ?>
</body>
</html>
