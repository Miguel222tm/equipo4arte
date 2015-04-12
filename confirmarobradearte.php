<?php
 require ("includes/header.php");
 require("includes/conn.php");

  if (isset($_GET["codigo"])) {
                            $codigo= $_GET['codigo'];
                            echo $codigo;
                        }else{
                            $codigo="";

                        }


                        $query = "SELECT nombreObra,fechaObra,linkObra,tecnica,soporte,corriente,descripcion,matricula,nombreAlumno FROM obras WHERE codigo = ?";
                       if (!($stmt = $conn->prepare($query))) {
        echo "Prepare failed: (" . $conn->errno . ") " . $conn->error;
    }
    if (!$stmt->bind_param("s", $codigo)) {
        echo "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error;
    }
    if (!$stmt->execute()) {
        echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
    }
    // Guarda los datos de la consulta en sus respectivas variables
    if (!$stmt->bind_result($nombreObra,$fechaObra,$linkObra,$tecnica,$soporte,$corriente,$descripcion,$matricula,$nombreAlumno)) {
        echo "Binding results failed: (" . $stmt->errno . ") " . $stmt->error;
    }
    if (!$stmt->fetch()) {
        echo "Fetch failed: (" . $stmt->errno . ") " . $stmt->error;
    }
    $stmt->free_result();




                        ?>

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
                                        <!--
                                            Note: Titles and subtitles will wrap automatically when necessary, so don't worry
                                            if they get too long. You can also remove the <p> entirely if you don't
                                            need a subtitle.
                                        -->

                                        <?php
                                        if($codigo!=""){
                                            $uno=1;
                        $query = "UPDATE obras SET confirmado = ? WHERE linkObra = ?";
                         if (!($stmt = $conn->prepare($query))) {
                          echo "Prepare failed: (" . $conn->errno . ") " . $conn->error;
                        }
                        if (!$stmt->bind_param("is",$uno, $linkObra)) {
                          echo "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error;
                            }
                        if (!$stmt->execute()) {
                              echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
                        }
                         echo '<h2>Arte y cultura contemporánea</h2>
                                        <p>GRACIAS POR CONFIRMAR LA IMAGEN. </p>';
                    
                    }else{
                        echo '<h2>Arte y cultura contemporánea</h2>
                                        <p>No existe ninguna imagen con ese código que proporcionaste.   </p>';
                    }
                                        ?>
                                        
                                        </header>
                                <!--    <div class="info">
                                        
                                            Note: The date should be formatted exactly as it's shown below. In particular, the
                                            "least significant" characters of the month should be encapsulated in a <span>
                                            element to denote what gets dropped in 1200px mode (eg. the "uary" in "January").
                                            Oh, and if you don't need a date for a particular page or post you can simply delete
                                            the entire "date" element.
                                            
                                        --><!--
                                        <span class="date"><span class="month">Jul<span>y</span></span> <span class="day">14</span><span class="year">, 2014</span></span>
                                        
                                            Note: You can change the number of list items in "stats" to whatever you want.
                                        
                                        <ul class="stats">
                                            <li><a href="#" class="icon fa-comment">16</a></li>
                                            <li><a href="#" class="icon fa-heart">32</a></li>
                                            <li><a href="#" class="icon fa-twitter">64</a></li>
                                            <li><a href="#" class="icon fa-facebook">128</a></li>
                                        </ul>-->
                                    </div>
                                 
                                 <a href=""     class="image featured"><img src="<?php echo $linkObra; ?>" alt="" /></a>
                                    <p style=" Text-align: justify;">
                                        <Strong>Obra: </Strong><?php echo $nombreObra; ?>
                                        <br><Strong>Fecha: </Strong> <?php 
                                            echo $fechaObra;
                                         ?>
                                        <br><Strong>Técnica: </Strong><?php echo $tecnica; ?>
                                        <br><STRONG>Soporte:</STRONG><?php  echo $soporte;?>
                                        <br><STRONG>Corriente artística:</STRONG><?php echo $corriente;
                                        ?>
                                        <br><STRONG>Descripcion:</STRONG><?php echo $descripcion;?>
                                        <br><STRONG>Matrícula:</STRONG><?php echo $matricula;?>
                                        <br><STRONG>Nombre del alumno:</STRONG><?php echo $nombreAlumno; ?>

                                
                            
                                    </div>
                                    </div>
                                    </div>
            
                            <?php
                            require ("includes/footer.php");
                            ?>

    </body>
</html>