<?php
include ("conexion.php");
session_start();
 $varsesion = $_SESSION['rango'];
 $varsesion_nombre = $_SESSION['name'];
 if($varsesion == null || $varsesion != 'adm'){

 echo "<script>alert('Solo los administradores pueden entrar a esta pagina')</script>";
 echo "<a href= 'index.html'>VOLVER A INICIO</a>";
 die();

  }

 $usuarios="select * from virtual_tour.usuarios";
 
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Validación de Formulario con Javascript</title>
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">
	<link href="css/business-casual.min.css" rel="stylesheet">

	<link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" href="css/estilos.css">
</head>
<body>
	<h1 class="site-heading text-center text-white d-none d-lg-block">
    <span class="site-heading-upper text-primary mb-3">Museos de Morelia</span>
    <span class="site-heading-lower">Obras a través del tiempo</span>
  </h1>
	<nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
    <div class="container">
      <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">PANDEMIX VIRTUAL TOUR</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item active px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="index.html">INICIO
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="2.museos.php">MUSEOS</a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="3.leyendas.php">LEYENDAS</a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="4.contacto.php">CONTACTO</a>
          </li>
           <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="5.registro.php">REGISTRATE</a>
          </li>
           <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="7.sesion.html">INICIA SESION</a>
          </li>
          <?php 
          if($varsesion_nombre != null || $varsesion_nombre != ''){ ?>
 
 <li class="nav-link text-uppercase text-expanded"><?php echo "USUARIO: ".$varsesion_nombre; ?></li>
 
  <?php }
    

           ?>
        </ul>
      </div>
    </div>
  </nav>
	<main>
	
<table border="1"bgcolor="brown">
<tr>
<th>Id</th>
<th>nombre</th>
<th>e-mail</th>
<th>password</th>
<th>Rango</th>
<th>operacion</th>
</tr>
<tr>
  <?php $resultado= mysqli_query($conexion,$usuarios) or die(mysqli_error($conexion));
    while($row = mysqli_fetch_assoc($resultado))  {?>

<td><div class="item"><?php echo $row["id_usuario"];?></div></td>
<td><div class="item"><?php echo $row["nombre"];?></div></td>
<td><div class="item"><?php echo $row["e_mail"];?></div></td>
<td><div class="item"><?php echo $row["password"];?></div></td>
<td><div class="item"><?php echo $row["rango"];?></div></td>
<td><a href="actualizar.php?id=<?php echo $row["id_usuario"];?>">editar</a>|<a href="delete.php?id=<?php echo $row["id_usuario"];?>">eliminar</td>

</tr>
<?php } ?> 
</table>

</main>
		<br>
<footer class="footer text-faded text-center py-5">
    <div class="container">
      <h4><p class="m-0 small">&copy; Pandemix derechos reservados 2020</h4> </br><h2><h4>información:</h4></p>
      <strong><h5>Horario de atención:</h5></strong>Lunes a viernes: 9:00 a 14:00 y 16:00 a 18:00
Sábado 9:00 a 14:00
</br>
Facebook: Casi todo el tiempo


     </br><a href="4.contacto.php">información de contacto </a>
      
      </br><h4>síguenos:</h4></p>
      <a href="http://www.facebook.com"><img src="img/bt_redes_soc/fb.jpg" width="70" height="70"></a>
      
      <a href="http://www.youtube.com"><img src="img/bt_redes_soc/yt.jpg" width="70" height="70"></a>
      
      <a href="http://www.instagram.com"><img src="img/bt_redes_soc/insta.jpg" width="70" height="70"></a>
      
      <a href="http://www.twitter.com"><img src="img/bt_redes_soc/tw.jpg" width="70" height="70"></a>
      
    </div>
  </footer>


  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>