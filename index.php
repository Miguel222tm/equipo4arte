<?php
 require ("includes/header.php");
 require ("includes/conn.php");



    $query="SELECT linkObra FROM obras WHERE confirmado=1 LIMIT 10 "; // aqui verificamos si el alumno ya ha aplicado a dicha vacante , para no mostrar las ya aplicadas
                              if(!($stmt= $conn-> prepare($query))){
                                   echo "Prepare failed: (" . $conn->errno . ") " . $conn->error;
                              }
                                if (!$stmt->execute()) {
                                   echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
                              }
                                if (!$stmt->bind_result($linkObra)){  echo "Binding results failed: (" . $stmt->errno . ") " . $stmt->error;
                              }
                        /* fetch values */
                          $iv= array();
                              $i=0;
                                    while (mysqli_stmt_fetch($stmt)) {
                                            $iv[]=$linkObra;
                                                $i+=1;
                                              //  echo $linkObra;
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
										<p>Equipo 4 </p>
										</header>
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

							<h3>Últimas obras de arte subidas por alumnos:</h3>
									
		<div class="imgultimas">
		<?php  
		foreach ($iv as $key => $value) {
		echo '	<img class="squared" src="'.$value.'">';
		}
		?> 	
		</div>	
				
</div>
						
</div>
</div>

								
									


									


						
					
			
							<?php
							require ("includes/footer.php");
							?>

	</body>
</html>