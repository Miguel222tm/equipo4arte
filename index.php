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
										<p>Introducción al arte</p>
										</header>
										
							<h3>Últimas obras de arte subidas por alumnos:</h3>
									
										<div class="imgultimas">
		<?php  
		foreach ($iv as $key => $value) {
		echo '	<img class="squared" src="'.$value.'">';
		}
		?> 	
		</div>
											<p style=" text-align: justify;">
												<B><font size="4">&#8226;</font> Constructivismo</B></p><p style=" text-align: justify;">
													Surge en Rusia 1917, tiene raíces en los “Vkhutemas” y se basa en el cubismo, estéticamente se relaciona con la ingeniería y arquitectura, se caracteriza por hacer constante alusión a elementos modernos y promueve una estética que se asociaba a la producción industrial y decía adiós al ornamento complaciente. 
													<br><span>Artistas: Vladimir Tatlin, Kasimir Malevick, Alexander Rodchenko.</br>
													<br><a href="http://aplicaciones.tam.itesm.mx/equipo4arte/Constructivismo.php">Click aqui para leer mas</a>
											</p><p style=" text-align: justify;"></p>&nbsp<p>&nbsp</p>

<p style=" text-align: justify;">
<b><font size="4">&#8226;</font>Cubismo</b></p>	<p style=" text-align: justify;">
Movimiento de apogeo en entre 1907 y 1914 en Francia, se caracteriza por utilizar formas geométricas como cubos, triángulos y rectángulos con el objetivo de descomponer la forma natural de las cosas.
<br>Artistas: Pablo Picasso, Juan Gris, George Braque.</br>
<br><a href="http://aplicaciones.tam.itesm.mx/equipo4arte/Cubismo.php">Click aqui para leer mas</a>
</p>&nbsp<p>&nbsp</p>


<p style=" text-align: justify;">
<b><font size="4">&#8226;</font> Dadaísmo</b></p>	<p style=" text-align: justify;">
Corriente Suiza nace en 1916 fundado por Tristan Tzara, caracterizado por la protesta continua contra las convencionalidades de su época, actitud de burla, humor sátira e ironia. Estaba en contra arte, códigos y valores de su época, la primera guerra mundial y los sistemas establecidos.
<br>Artistas: Tristan Tzara, Marcel Duchamp, Jean Arp.</br>
<br><a href="http://aplicaciones.tam.itesm.mx/equipo4arte/Dadaismo.php">Click aqui para leer mas</a>
</p>&nbsp<p>&nbsp</p>

<p style=" text-align: justify;">
<b><font size="4">&#8226;</font> De Stijl</b></p><p style="text-align:justify;">
Conocido también como neoclasismo  fue fundado por Mondrian y Van Doesburg en 1917, modifica diversas áreas artísticas desde diseño grafico, arquitectura, pintura hasta industria con la tendencia a modificar los valores plásticos mas putosy con una simplicidad notable representado en pinturas con trama de líneas ortogonales y en colores primarios.
<br>Artistas: Piet Mondrian, Theo Van Doesburg, Gerrit Rietveld.</br>
<br><a href="http://aplicaciones.tam.itesm.mx/equipo4arte/Stijl.php">Click aqui para leer mas</a>
</p>&nbsp<p>&nbsp</p>

	<p style=" text-align: justify;">
<b><font size="4">&#8226;</font> Deconstrutivismo</b></p><p style="text-align:justify;">
Surge en los años 60 en Francia aunque su gran apogeo fue en los 80 y 90, se caracteriza por romper con las funciones de formas, material y volúmenes creando confusión geométrica, los representantes no ven sus obras como arte, le dan relevancia técnica a la elaboración de sus productos y el tiempo que lleva realizarlos.
<br>Artistas Frank Gehry, Peter Elsenman, Zaha Hadid.</br>
<br><a href="http://aplicaciones.tam.itesm.mx/equipo4arte/Deconstructivismo.php">Click aqui para leer mas</a>
</p>&nbsp<p>&nbsp</p>

<p style=" text-align: justify;"><b>
<font size="4">&#8226;</font> Expresionismo Abstracto.</b></p><p style=" text-align: justify;">
Es una de los movimientos contemporáneos  más resaltantes del siglo XX.  El lenguaje visual que lo caracteriza por el resalta del color,  los grandes formatos, trabaja sobre óleo sobre el lienzo, y tienden a eliminar la figuración.  El cromatismo suele ser muy limitado: blanco y negro, así como los colores primarios: magenta, amarillo y cian. 
<br>Artistas:   Arshile Gorky,  Hans Hofmann y  Roberto Matta.</p>
<br><a href="http://aplicaciones.tam.itesm.mx/equipo4arte/expresionismoabstracto.php">Click aqui para leer mas</a>
</p>&nbsp<p>&nbsp</p>

	<p style=" text-align: justify;">
<b><font size="4">&#8226;</font> Fauvismo</b></p><p style="text-align:justify;">
Movimiento pictorico  frances desarrollado entre 1904 y 1908, fue mas un mosaico de aportaciones que un movimiento conciente y definido, creían que a través de colores podían expresar sentimientos y buscaban realzar el valor del color mismo, tenia gran influencia por el arte africano negro.
<br>Artistas: Henri Matisse, Andre Derain, Maurice deVlaminck</br>
<br><a href="http://aplicaciones.tam.itesm.mx/equipo4arte/Fauvismo.php">Click aqui para leer mas</a>
</p>&nbsp<p>&nbsp</p>

<p style=" text-align: justify;">
<b><font size="4">&#8226;</font> Futurismo.</b></p><p style=" text-align: justify;">
Surgió en Italia en el primer decenio del siglo XX. Gira en torno a la figura de Marinetti, quien publica en el periódico parisiense Le Figaro el 20 de Febrero de 1909. Rechaza la tradición y un arte clasicista que da orientación al futuro. Se caracteriza por la plástica del dinamismo y el movimiento. Su objetivo era  reflejar el movimiento, la fuerza interna de las cosas, ya que el objeto no es estático.
<br>Artistas: Russolo, Carrá, Boccioni, Balla o Severini.</br>
<br><a href="http://aplicaciones.tam.itesm.mx/equipo4arte/Futurismo.php">Click aqui para leer mas</a>
</p>&nbsp<p>&nbsp</p>

<p style=" text-align: justify;">
<b><font size="4">&#8226;</font> Happening</b></p><p style="text-align:justify;">
Data de los Años 50’s está íntimamente relacionado con el teatro, es desarrollado en un tiempo y espacio determinado, se caracteriza por la espontaneidad y realizarse en espacios abiertos, el publico espectador también se ve involucrado y forma parte de la interpretación.
<br>Artistas: Soencer Tunik, Allan Kaprow, John Cage</br>
<br><a href="http://aplicaciones.tam.itesm.mx/equipo4arte/Happening.php">Click aqui para leer mas</a>
</p>&nbsp<p>&nbsp</p>

<p style=" text-align: justify;">
<b><font size="4">&#8226;</font> Hiperrealismo.</b></p><p style=" text-align: justify;">
Es un movimiento pictórico surgido en la década de los '60, cuyas técnicas aspiran a una precisión casi fotográfica. El hiperrealismo es un estilo pictórico que nació en Estados Unidos tras el Pop Art y que se basa en la reproducción detallista y fotográfica de la realidad. El propósito del Hiperrealismo es acercarse a una supuesta objetividad visual en la representación de retratos.
<br>Artistas: Hugo Laurencena, Antonio López García.</br>
<br><a href="http://aplicaciones.tam.itesm.mx/equipo4arte/Hiperrealismo.php">Click aqui para leer mas</a>
</p>&nbsp<p>&nbsp</p>

<p style=" text-align: justify;">
<b><font size="4">&#8226;</font> Impresionismo</b></p><p style="text-align:justify;">
Corriente del siglo XIX vinculado principalmente a la pintura, quienes retrataban objetos de acuerdo a la impresión que la luz produce a la vista y no según la supuesta realidad objetiva, mostraba paisajes como tema principal y tenía una postura contraria a las formulas impuestas por la Academia Francesa de Bellas Artes.
<br>Artistas: Claude Monet, Pierre-Auguste Renoir, Edouard Manet.</br>
<br><a href="http://aplicaciones.tam.itesm.mx/equipo4arte/Impresionismo.php">Click aqui para leer mas</a>
</p>&nbsp<p>&nbsp</p>

<p style=" text-align: justify;">
<b><font size="4">&#8226;</font> Jinete azul</b></p><p style=" text-align: justify;">
Surgio en Munich Alemania, en el año de 1991. Algunos de los elementos que más tomaban importancia era el manejo de las formas y los colores, destacando el uso de tonos metálicos o aterciopelados
<br>Artistas: Wassily Kandisky y Alexei von Jawlensky, los alemanres Franz Marc y August Macke y el suizo Paul Kele.</br>
<br><a href="http://aplicaciones.tam.itesm.mx/equipo4arte/Jineteazul.php">Click aqui para leer mas</a>
</p>&nbsp<p>&nbsp</p>

<p style=" text-align: justify;">
<b><font size="4">&#8226;</font> Minimalismo</b></p><p style="text-align:justify;">
 Corriente artística que su principal característica es el uso de elementos mínimos y básicos, elimina todo lo que no es necesario,  uso geométrico y colores simples y básicos con tonalidades claras.
<br>Artistas: Donald Judd, Sol LeWitt, Dan Flavin.</br>
<br><a href="http://aplicaciones.tam.itesm.mx/equipo4arte/Minimalismo.php">Click aqui para leer mas</a>
</p>&nbsp<p>&nbsp</p>

<p style=" text-align: justify;">
<b><font size="4">&#8226;</font>Muralismo Mexicano</b></p><p style=" text-align: justify;">
Surge en la Revolución Mexicana en 1910. Tiene 3 caracteristicas fundamentales: lo nacional, lo popular, lo revolucionario. Estos tres valores en conjunto lograron imponer una lucha por la libertad de expresión y así mismo libero una opinión más abierta, valiente y fructífera que a fin de cuentas es la libertad de creación.
<br>Artistas: David Alfaros Siqueiros, José Clemente Orozco.</br>
<br><a href="http://aplicaciones.tam.itesm.mx/equipo4arte/muralismomexicano.php">Click aqui para leer mas</a>
</p>&nbsp<p>&nbsp</p>

<p style=" text-align: justify;">
<b><font size="4">&#8226;</font>Neoclasicismo</b></p><p style="text-align:justify;">
Nace en el Norte de Europa a fines del siglo XVIII,  tiene su apogeo en Roma y Paris, retoma lo Antiguo Clásico de forma mucho más fiel que la protagonizada por retornos anteriores, se opone a la funcionalidad y al exceso decorativo del Barroco y Rococó, presentándose de manera serena y equilibrada.
<br>Artistas: Jacques Lous David, Anton Raphael Mengs, Henry Fuseli.</br>
<br><a href="http://aplicaciones.tam.itesm.mx/equipo4arte/Neoclasicismo.php">Click aqui para leer mas</a>
</p>&nbsp<p>&nbsp</p>

<p style=" text-align: justify;">
<b><font size="4">&#8226;</font>Pop Art</b></p><p style=" text-align: justify;">
Surge a mediados del siglo XX, en Inglaterra y Estados Unidos. Se caracteriza por el uso de objetos e imágenes cotidianas y urbanas. Busca utilizar imágenes conocidas con una dirección diferente para lograr una postura más estética. Este tipo de arte trata de eliminar la brecha que existe entre los límites del arte “alto” y “bajo”.
<br>Artistas:  Roy Lichtenstein, Andy Warhol, Jim Dine.</br>
<br><a href="http://aplicaciones.tam.itesm.mx/equipo4arte/popart.php">Click aqui para leer mas</a>
</p>&nbsp<p>&nbsp</p>

<p style=" text-align: justify;"> 
<b><font size="4">&#8226;</font>Post Impresionismo</b></p><p style="text-align:justify;">
Retoma la base del impresionismo recuperando la importancia del dibujo y preocupacion por captar la luz así como la expresión de las cosas, continúa con colores vivos y una aplicación compacta a la pintura pero se distingue por llevar emoción y expresiones a la pintura. 
<br>Artistas: VIncent Van Gogh, Paul Cezanne, Paul Gauguin.</br>
<br><a href="http://aplicaciones.tam.itesm.mx/equipo4arte/Postimpresionismo.php">Click aqui para leer mas</a>
</p>&nbsp<p>&nbsp</p>

<p style=" text-align: justify;"> 
<b><font size="4">&#8226;</font>Prerrafaelismo</b></p><p style=" text-align: justify;"> 
Surge en Inglaterra a mediados del siglo XX. Hunt, Mallais y Rossetti ambicionando crear una nueva clase de pintura refiriéndose ya no al renacimiento, sino al arte medieval. es reconocido por sus cuadros llenos de color, que conllevan múltiples símbolos y referencias literarias, sensibles a la naturaleza y a las cuestiones sociales.
<br>Artistas: Hunt, Mallais y Rossetti.</br>
<br><a href="http://aplicaciones.tam.itesm.mx/equipo4arte/Prerafaelismo.php">Click aqui para leer mas</a>
</p>&nbsp<p>&nbsp</p>

<p style=" text-align: justify;">
<b><font size="4">&#8226;</font>Realismo</b></p><p style="text-align:justify;">
Movimiento artístico y literario que tiene su apogeo en Europa entre 1840 y 1880, y su principal propósito era la representación objetiva de la realidad basándose en la observación de aspectos cotidianos de la época, en algunos casos con fines de protesta mostrando principalmente, campesinos o trabajos vulgares.
<br>Artistas: Gustave Courbet, Honore Daumier, Jules Breton.</br>
<br><a href="http://aplicaciones.tam.itesm.mx/equipo4arte/Realismo.php">Click aqui para leer mas</a>
</p>&nbsp<p>&nbsp</p>	

<p style=" text-align: justify;">
<b><font size="4">&#8226;</font>Romanticismo</b></p><p style="text-align:justify;"> 
Tendencia cultural de la primera mitad del siglo XIX en Europa, surge como reacción en contra del neoclasicismo, su principal característica se basa en el sentir, las emociones y el concepto del hombre como ser sentimental.
<br>Artistas: Eugene Delacroix, Theodore Geriacault, Caspar David Friederich. </br>
<br><a href="http://aplicaciones.tam.itesm.mx/equipo4arte/Romanticismo.php">Click aqui para leer mas</a>
</p>&nbsp<p>&nbsp</p>

<p style=" text-align: justify;">
<b><font size="4">&#8226;</font>Simbolismo</b></p><p style="text-align:justify;">
Es un movimiento literario y de artes plásticas de origen Francés iniciado en la década de 1880, pretende restaurar el sentido del arte mediante la espiritualidad cercana a posiciones religiosas y místicas y surge como critica a la incapacidad de la sociedad de resolver problemas de la cotidianeidad. 
<br>Artistas: Franz von Struck, Carlos Schwabe, Constantin Somov.</br>
<br><a href="http://aplicaciones.tam.itesm.mx/equipo4arte/Simbolismo.php">Click aqui para leer mas</a>
</p>&nbsp<p>&nbsp</p>

<p style=" text-align: justify;">
<b><font size="4">&#8226;</font>Surrealismo</b></p><p style=" text-align: justify;">
Surgió en la década de 1920. Se caracteriza por presentar lo que se observa de manera irreal, absurda o fantástica. La mayoría de los cuadros realizados son producto de sueños y de las ideas no racionales de los artistas. Algunas de las características: animación de lo inanimado, metamorfosis, aislamiento de fragmentos anatómicos, máquinas fantásticas. 
<br>Artistas: Salvador Dalí, Rene Magritte, Max Ernst
<br><a href="http://aplicaciones.tam.itesm.mx/equipo4arte/Surrealismo.php">Click aqui para leer mas</a>
</p>
	


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