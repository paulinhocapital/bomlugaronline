<?php
    session_start();
    include_once('config.php');
    // print_r($_SESSION);
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
    $logado = $_SESSION['email'];
?>
<!doctype html>
<html><!DOCTYPE html>
<html>

	<head>
	<title>teste</title>
	<meta charset="utf-8" />
	<meta name="author" content="JL CYBER MAFIA" />
	<link href="css/style.css" type="text/css" rel="stylesheet" />
	<link href="html/sistema.php" />

	</head>

	<body>
		<div class="div3">
		
		<header style="background-color: #ADD8E6;height:200px;">
			<h1 style="text-align: center;">CONFERE  AI  FML  SE  TA ㅤFUNCIONANDO LEGAL 👍 </h1>

		</header>

		</div>
		<br>
		<br>


		<table style="text-align: center " width="800">
			<tr>

				<td></td>
				
				
				<td></td>
				
			    

			</tr>

			
		

		<div class="div1">
			<h1 style="color: black" align="center"> TUDO TEM QUE FICAR NO MEIO DA TELA </h1>
		</div>

		<br>
		


		<p style="text-align: center"> </p>

		<center>
			<p align="center" style="font-size: 30px;color:#F0FFFF;">(1) LINK </p>
			<div class="div2">
			<a href="https://youtu.be/Wp_CWJK1Rh4" style="font-size: 50px" > VIDEO </a>
		</center>

		</div>

		<br>
		<br>
		<br>

		<!--div class="div8">
		<p style="font-size: 80px;"> ㅤㅤㅤㅤㅤ👆</p>
		</div>
		<div class="div4">
		<p align="center;" style="font-size: 80px">ainda nao sei ainda como coloca essa poha no meio 😅</p>
		</div!-->


		<div class="div5">
		<p align="center" style="font-size: 30px;color:#F0FFFF;">(2) FOTO </p>

		<center>
			<img height="200px" src= "hitler.jpeg" />
		</center>

		<p align="center" style="font-size: 30px;color:#F0FFFF;">(3) VIDEO </p>

		<center>
			<video width="300" height="240" controls>
  				<source src="video.mp4" type="video/mp4" >
  
			</video>
		</center>


		<p align="center" style="font-size: 30px;color:#F0FFFF;">(4) AUDIO</p>

		<center>
			<audio controls>
				<source src="audio1.mp3" type="audio/mp3">
			</audio>
		</center>

		<p align="center" style="font-size: 30px;color:#F0FFFF;">(5) POR ENQUANTO E SÓ ISSO ATE BREVE 👋</p>
		<br>
		<br>

		<p align="center" style="font-size: 30px;color:#F0FFFF;">(6) FIM 👇</p>
		</div>
		<br>
		<br>
		<br>


		<!--h1 style="text-align: center;color: #F0E68C">em breve iremos atualizar o site</h1!-->
		<br>
		<br>
		<br>
		<br>
		

		<!--h1 style="text-align: center;color: #E0FFFF"> DEIXEM MAIS IDEIAS DE CONTEUDO PARA COLOCARMOS AQUI </h1!-->

		<form>
			<!--div class="div6"!-->
			<!--input type="text" /!-->
			<!--input required="" type="email" placeholder="digite o email aqui..." />
			<input type="submit" value="enviar" />
			<br>
			</div!-->
			
		</form>

		<!--input type="button" value= "enviar ideia" style="margin-left: 400px;"></button!-->


	

		<!--div class="div7">
		<video width="300" height="240" controls >
  			<source src="video.mp4" type="video/mp4">
  
		</video>
		</div!-->

		<!--img src= "foto2.jpeg" /!-->

		<!--section>
			<div>
			</div>
		</section>
		<nav>
			<ul>
				<li><a href="">home</a></li>
				<li><a href="">quem somos</a></li>
				<li><a href="">contato</a></li>
			</ul>
		</nav!-->

		<!--audio controls>
			<source src="audio.mp3" type="audio/mp3">
		</audio!-->
		<br>
		<br>
		<br>


		<!--iframe ></iframe!-->

		<center>
			<video width="930" height="930" controls>
  				<source src="fim.mp4" type="video/mp4" >

  
			</video>
		</center>

	


	</body>
</html>