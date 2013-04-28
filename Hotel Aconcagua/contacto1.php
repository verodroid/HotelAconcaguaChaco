<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>:: Hotel Aconcagua - Saenz Penia - Chaco ::</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Hotel Aconcagua, hotel aconcagua, Chaco, Sáenz Peña, Saenz Pena, Noreste, hotel, habitaciones, cocheras, wi-fi, desayunador, comedor, terraza" />   
<script type="text/javascript" src="js/prototype.js"></script>
<script type="text/javascript" src="js/scriptaculous.js?load=effects"></script>
<script type="text/javascript" src="js/lightbox.js"></script>
<link rel="stylesheet" href="css/lightbox.css" type="text/css" media="screen" />
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="wrapper">
  <div id="header">
    <h1><img src="images/logo.png" alt="" width="489" height="86" /></h1>
    <ul id="nav">
      <li><a href="index.html">HOME</a> &nbsp;|&nbsp; </li>
      <li><a href="habitaciones.html">HABITACIONES</a> &nbsp;|&nbsp; </li>
      <li><a href="servicios.html">SERVICIOS</a> &nbsp;|&nbsp; </li>
      <li><a href="ubicacion.html">UBICACION</a> &nbsp;|&nbsp; </li>
      <li><a href="contacto1.php">CONTACTO</a></li>
    </ul>
    <!-- end nav -->
    <div id="welcome">
      <h2><img src="images/title_contacto.gif" alt="Contacto" /></h2>
     	<p>Telefónicamente: +54 03732 - 428111.</p>
		<p>Vía E-Mail: <a href="mailto:hotel-aconcagua@hotmail.com" target="_blank">hotel-aconcagua@hotmail.com</a></p>
		<p>Podrán realizarse reservas, siempre con el mayor tiempo de anticipacion.</p>
		<p>Realizando depósitos anticipadamente se mantienen las tarifas.</p> 
		<p>Ofrecemos descuentos importantes a contingentes de jubilados, docentes, intituciones e iglesias.</p>
		

	
    </div>
    <!-- end welcome -->
  </div>
  <!-- end header -->
  <div id="body-pages">
      
	  <p>
	    <?php
	///////Configuración/////
	$mail_destinatario = 'hotel-aconcagua@hotmail.com';
	///////Fin configuración//
	 
	if (isset ($_POST['enviar'])) {
	$headers .= "From: ".$_POST['email']. "rn";
	if ( mail ($mail_destinatario, $_POST['asunto'], "Nombre y apellidos : ".$_POST['nombre']." Asunto: ".stripcslashes ($_POST['asunto'])."n Mensaje :n ".stripcslashes ($_POST['mensaje']), $headers )) echo '
	 
	<b>Su mensaje a sido enviado correctamente. Gracias por contactarse con nosostros. </b>
	 
	';
	 
	else echo '
	 
	<b>Error al enviar el formulario. Por favor, inténtelo de nuevo mas tarde.</b>
	 
	'; }
	 
	echo '
	<form action="?" method="post"><br> 
 
	    <table width="400" border="0" align="center" cellpadding="2" cellspacing"2">
        <tr>
          <td width="50"><label for="nombre">Nombre y Apellidos : </label></td>
          <td><input name="nombre" size="50" maxlength="80" type="text"></td>
        </tr>
        <tr>
          <td width="50"><label for="email">Email : </label></td>
          <td><input name="email" size="50" maxlength="60" type="text"></td>
        </tr>
        <tr>
          <td width="50"><label for="asunto">Asunto : </label></td>
          <td><input name="asunto" size="50" maxlength="60" type="text"></td>
        </tr>
        <tr>
          <td width="50"><label for="mensaje">Mensaje : </label> </td>
          <td><textarea name="mensaje" cols="31" rows="5"></textarea></td>
        </tr>
		<tr >
          <td colspan="2"><label for="enviar">
			<input name="enviar" value="Enviar consulta" type="submit"></label></td>
          
        </tr>
      </table>
	  </form>
	';
	?>
    </p>
	
	  <p>&nbsp;</p>
	  <div class="clear" id="spacer"></div>
    
  </div>
 
</div>
<!-- end wrapper -->
<div id="footer"> 
  <p>Hotel Aconcagua - Calle 14 esq. 3 del Ensanche Sur - Pcia. Roque Saenz Peña - Chaco - República Argentina 
	<br />
	E-mail: <a href="mailto:hotel-aconcagua@hotmail.com">hotel-aconcagua@hotmail.com</a> - Telefono +54 03644 - 428111.
  </p>
</div>
<!-- end footer -->
</body>
</html>
