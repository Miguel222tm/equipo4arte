<?php
 require ("includes/header.php");
   require("includes/conn.php");  //coexion con la bd para ppoder hacer querys de select y update dentro de la tabla de datos
     require 'PHPMailer-master/PHPMailerAutoload.php';
  

function generateCodigo($length = 22) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}


 

?>
	<body class="left-sidebar">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Content -->
					<div id="content">
						<div class="inner">
					
							<!-- Post -->
								<article class="box post post-excerpt">
									<header>
									
										<h2>Arte y Cultura Contemporánea</h2>
										<p>Alumnos del ITESM pueden usar esta sección solamente.</p>
										</header>
								
									</div>
									<?php   
								if(isset($_POST['nombreObra'])){
									  $target_path = "uploads/";
              if(isset($_FILES['uploadedfile']['name'])) {
              $foto=  basename( $_FILES['uploadedfile']['name']);

 					//obtenemos su extension
               $ext = substr($foto, strrpos($foto, '.')+1);
             	$codigo= generateCodigo();
                $target_path = $target_path .$_POST['matricula'].$codigo. $foto;
              //metodo para subir la foto de perfil
              if(isset($_FILES['uploadedfile']['tmp_name'])){
                         if($ext=="jpg" || $ext=="gif" || $ext=="png" || $ext=="PNG" || $ext=="JPEG" || $ext=="JPG" || $ext=="jpeg" || $ext ==""){
                              if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
                              	/* si se movió exitosamente a la carpeta de uploads
										- guardamos en la bd el registro 
										-mostramos una alerta de gracias por todo el show y lo redirigimos al mensaje que tiene que recibir un mail al @itesm.mx del alumno que lo subió.
									*/  
										$nombreObra= $_POST['nombreObra'];
										$fechaObra= $_POST['fechaObra'];
										$linkObra=$target_path;
										$tecnica=$_POST['tecnica'];
										$soporte=$_POST['soporte'];
										$corriente= $_POST['corriente'];
										$descripcion=$_POST['descripcion'];
										$matricula=$_POST['matricula'];
										$nombreAlumno=$_POST['nombreAlumno'];
										$codigo= generateCodigo();

										$query = "INSERT INTO obras(nombreObra,fechaObra,linkObra,tecnica,soporte,corriente,descripcion,matricula,nombreAlumno,codigo) VALUES(?,?,?,?,?,?,?,?,?,?)";
                                          if (!($stmt = $conn->prepare($query))) {
                                                  echo "Prepare failed: (" . $conn->errno . ") " . $conn->error;
                                          }
                                          if (!$stmt->bind_param("ssssssssss",$nombreObra,$fechaObra,$linkObra,$tecnica,$soporte,$corriente,$descripcion,$matricula,$nombreAlumno,$codigo)) {
                                                echo "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error;
                                          }
                                          if (!$stmt->execute()) {
                                                echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
                                          }

  $mail = new PHPMailer();  
 
$mail->IsSMTP();  // telling the class to use SMTP
//$mail->SMTPDebug = 2; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
$mail->Host = "smtp.gmail.com";
$mail->Port = 465; // or 587
$mail->IsHTML(true);
$mail->Username = "arte.cultura.itesm@gmail.com"; // SMTP username
$mail->Password = "arteycultura2015"; // SMTP password 
$mail->FromName = 'Arte y cultura'; 
$mail->From     = "arte.cultura.itesm@gmail.com";  //sender
$mail->AddAddress($_POST['matricula']."@itesm.mx");  //receiver

							$mail->Subject  = "por favor confirmar su - obra de arte";
							$mail->Body     = " Por favor confirmar su obra de arte, dar click al siguiente link para que se complete el proceso -> aplicaciones.tam.itesm.mx/equipo4arte/confirmarobradearte.php?codigo=".$codigo; 

							 if(!$mail->Send()) {
           						 echo 'Se encontró un error, por favor subir de nuevo su obra.';
            				//echo 'Mailer error: ' . $mail->ErrorInfo;
           					 } else {
            					echo 'Se ha enviado un correo a su mail para confirmar la obra.';
            					}


                              }// todo exitoso
                          }// if para ver la extensión de la obra de arte
                          else{
                          	echo "<script> alert('el archivo que seleccionaste no es una imagen'); </script>";

                          }
                      }
                      }
                      
                      ?>
                      <!-- Aqui información e instrucciones posteriores para que la obra de arte sea aprobada -->
	                     <script> alert('Gracias por subir tu obra de arte, verifica tu correo para confirmar '); document.location=('index.php'); </script>

                      <?php
                      }// /if de subir foto 
						else{
									?>
							 <div class="subirfotoperfil" >
           <form enctype="multipart/form-data" action="subirobra.php" method="POST">
           <div class="label bg-aqua"> <input type="hidden"  name="foto" value="100000" />
          	 Escoje tu obra de arte: <input name="uploadedfile" type="file" style="color: blue;"  / required><br />
            </div>
            
									<div>
									<label>Nombre de la obra de arte:</label><br>
									<input type="text" name="nombreObra" class="form-control" required>
									<br>

									<label>Fecha de la obra de arte:</label><br>
									<input type="text" name="fechaObra" required><br>
									<label>Técnica:</label><br>
									<input type="text" name="tecnica" required><br>
									<label>Soporte:</label><br>
									<input type="text" name="soporte" required><br>
									<label>Movimiento artístico</label><br>
									<input type="text" name="corriente" required>	<br>
									<label>Descripción:</label><br>
									<textarea name="descripcion" required></textarea><br>
									<label><Strong>DATOS DEL ALUMNO</Strong></label><br>
									<label>Matricula:</label><br>
									<input type="text" name="matricula" placeholder="Ejemplo: A00123456" required><br>
									<label>Nombre del alumno:</label><br>

									<input type="text" name="nombreAlumno"><br>
									</div>
									<input type="submit" class="btn btn-primary" value="subir obra" />
										</form>
                                            </div><!-- termina div subirfotodeperfil -->
                                            
									<?php } ?>
							
									</div>
									</div>
									</div>
			
							<?php
							require ("includes/footer.php");
							?>

	</body>
</html>