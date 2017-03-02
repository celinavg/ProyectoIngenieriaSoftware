<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>MyBook Login</title>

<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Twain Creative Forms Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta tag Keywords -->

<!-- css files -->
<link href="./template2/css/style.css" rel="stylesheet" type="text/css" media="all">
<link href="./template2/css/font-awesome.css" rel="stylesheet"> <!-- Font-Awesome-Icons-CSS -->
<!-- //css files -->

<!-- online-fonts -->
<link href="//fonts.googleapis.com/css?family=Play:400,700&amp;subset=cyrillic,cyrillic-ext,greek,latin-ext" rel="stylesheet">
<!--//online-fonts -->

<body>
<!--header-->
<div class="agileheader">
	<h1>myBook</h1>
</div>
<!--//header-->

<!--main-->
<div class="main-w3l">
	<div class="w3layouts-main">
		<h2>Inicia Sesion</h2>
			<form  method="post" action="<?php echo base_url('doLogin');?>">
				<input placeholder="E-MAIL" name="correo_electronico" type="email" required="" />
				<input placeholder="PASSWORD" name="contrasena" type="password" required="" />
			    <input type="submit" value="Iniciar Sesion" name="iniciarSesion">
			</form>
			<div class="social_icons agileinfo">
				<div class="social">
					<a href="<?php echo $loginUrl ?>" class="icon fb fo"><i class="fa fa-facebook" aria-hidden="true"></i></a>
					<a href="" class="icon tw fo"><i class="fa fa-twitter" aria-hidden="true"></i></a>
					<a href="" class="icon gp fo"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
				</div>
			</div>
	</div>
	<div class="w3layouts-main2">
		<h3>Registrate</h3>
			<form action="#" method="post">
				<input placeholder="NOMBRE" name="nombre" type="text" required="" />
                <input placeholder="APELLIDOS" name="apellidos" type="text" required="" />
				<input placeholder="E-MAIL" name="correo_electronico" type="email" required="" />
				<input placeholder="PASSWORD" name="contrasena" type="password" required="" />
				<input placeholder="CONFIRM PASSWORD" name="contrasena" type="password" required="" />
					<input type="submit" value="Registrarse" name="registrarse">
			</form>

	</div>
	<div class="clear"></div>
</div>
<!--//main-->

<!--footer-->
<div class="footer-w3l">
    <p>&copy; 2017 Twain Creative Forms. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
</div>
<!--//footer-->

</body>
</html>
