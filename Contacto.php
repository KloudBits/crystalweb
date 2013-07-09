<html>
<head>
<link href='http://fonts.googleapis.com/css?family=Josefin+Sans' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="stylecontactog.css">
<title>Cont&aacute;cto</title>
</head>
<body>
<div id="contenedor">

    <div id="cabecera">
        <div id="divmayor"><a href="index.html">Crystalboard</a></div>
        <div class="menores"><a href="Beneficios.html">Beneficios</a></div>
        <div id="menor2" class="menores"><a href="Nosotrosp.html">Nosotros</a></div>
        <div id="menor3" class="menores"><a href="index.html">Contacto</a></div>  
    </div>

    <div id="cuerpo">
    	<div id="mensaje">
		 <? 
		 if (!$HTTP_POST_VARS){ 
		 ?> 
		 <form action="Contacto.php" method=post> 
		 	<p class="parraf">
			  Nombre:
			  <br>
		      <input class="campos" type=text name="nombre" size=16>
		    </p>
			<br>

			<p class="parraf">	  
			  Email:
			  <br>  
			  <input class="campos" type=text name=email size=16> 
			</p>
			<br>	
            
            <p class="parraf">
			  Comentarios:
			  <br>
			  <textarea  id="coment" name=coment cols=32 rows=6></textarea>
			</p>	 
			<p>
			   <input id="boton" type=submit value="Enviar"> 
			</p>
		 </form> 
		 <? 
		 }else{ 
		     //Estoy recibiendo el formulario, compongo el cuerpo 
		     $cuerpo = "Formulario enviado\n"; 
		     $cuerpo .= "Nombre: " . $HTTP_POST_VARS["nombre"] . "\n"; 
		     $cuerpo .= "Email: " . $HTTP_POST_VARS["email"] . "\n"; 
		     $cuerpo .= "Comentarios: " . $HTTP_POST_VARS["coment"] . "\n"; 

		     //mando el correo... 
		     mail("estein666@hotmail.es","Formulario recibido",$cuerpo); 

		     //doy las gracias por el envío 
		     echo "Gracias por rellenar el formulario. Se ha enviado correctamente."; 
		 } 
		 ?>
    	</div>
    </div> 

</div> 

</body>
</html>