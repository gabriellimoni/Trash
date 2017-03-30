<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <title>Trash.gg</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/js.js"></script>
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
    <section id="conteudo">
    
        <article class="artigo">
            
            <header><h1>Title from article</h1></header>
            <p>This is a paragraph in the article.</p>
        </article>
    
    
    
    
        <article class="artigo">
            <header><h1>Title from article</h1></header>
            <p>This is a paragraph in the article.</p>
        </article>
        
        
        <article class="artigo">
            <header><h1>Title from article</h1></header>
            <p><a href="login.html" target="">Login</a></p>
        </article>
    
    
    </section>
    
    <footer id="rodape">
        <p>Criado e desenvolvido por Adilson da Silva Porto. Todos os direitos reservados. </p>
        <img id="trash" src="img/trash.png" alt="Trash" >
    </footer>  
    
    <?php
	 	include 'modal.php';
	 ?>
  </div>
</div>
</body>
</html>
