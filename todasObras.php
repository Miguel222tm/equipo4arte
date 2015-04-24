<?php
 require ("includes/header.php");
 require ("includes/conn.php");



    $query="SELECT * FROM obras WHERE confirmado=1  "; // aqui verificamos si el alumno ya ha aplicado a dicha vacante , para no mostrar las ya aplicadas
           if (!($stmt = $conn->prepare($query))) {
			echo "Prepare failed: (" . $conn->errno . ") " . $conn->error;
		}
		if (!$stmt->execute()) {
			echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
		}
		$result = $stmt->get_result();
		$rows = array();
		while($row = $result->fetch_assoc()){
			$rows[] = $row;
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
										<!--
											Note: Titles and subtitles will wrap automatically when necessary, so don't worry
											if they get too long. You can also remove the <p> entirely if you don't
											need a subtitle.
										-->
										<h2>Arte y cultura contemporánea</h2>
										<p>Introducción al arte</p>
										</header>
										
							<div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Obras de arte subidas por alumnos</h3>
                                    <div class="box-tools">
                                        <div class="input-group">
                                             <div class="input-group-btn">
                                                  </div>
                                        </div>
                                    </div>
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive ">
                                    <table class="table table-hover">
                                        <tbody><tr>
                                        	<th><strong>Matrícula </strong></th>
                                            <th><strong>nombre Obra</strong></th>
                                            <th><strong>fecha Obra</strong></th>
                                            <th><strong>Soporte</strong></th>
                                            <th><strong>técnica</strong></th>
                                            <th><strong>corriente</strong></th>
                                            <th><strong>Descripción</strong></th>
                                            <th><strong>Imagen</strong></th>
                                        </tr>
                                      
                                            <?php  
		foreach ($rows as $key => $value) {
			echo "<tr>";
				echo "<td><strong>".$value['matricula']."</strong></td> ";
				echo "<td>". $value['nombreObra']."</td> ";
				echo "<td>". $value['fechaObra']."</td> ";
				echo "<td>". $value['soporte']."</td> ";
				echo "<td>". $value['tecnica']."</td> ";
				echo "<td>". $value['corriente']."</td> ";
				echo "<td>". $value['descripcion']."</td> ";
				echo "<td><a href='". $value['linkObra']."' >  Obra</a></td> ";

				echo "</tr>";
		}								?>
                                        
                                    </tbody></table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>



									
											
	


								<!--	<div class="info">
										
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
									</article>

			
				
</div>
						
</div>
</div>

								
									


									


						
					
			
							<?php
							require ("includes/footer.php");
							?>

	</body>
</html>