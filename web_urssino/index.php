<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pagina Web</title>
  <link rel="stylesheet" href="./css/estilo3.css">
  <link rel="stylesheet" href="./css/estilomovil.css">
</head>
<body>
  <!-- Flecha para volver al inicio -->
  <style>
.back-to-top {
    display: none;
    position: fixed;
    top: 20px; /* Cambia 'bottom' por 'top' */
    left: 20px;
    z-index: 99;
    font-size: 24px;
    color: #c5d4dd;
    background-color: #6a2b8f;
    padding: 10px 15px;
    border-radius: 50%;
    text-decoration: none;
    box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
    transition: opacity 0.3s ease-in-out;
}

.back-to-top:hover,
.back-to-top:focus {
    opacity: 0.7;
}

/* Muestra la flecha cuando la página se desplaza más de 100px */
body:hover .back-to-top,
body:focus .back-to-top {
    display: block;
}

</style>

  <a href="./index.php" class="back-to-top">&#8593;</a>
  
  <nav id="desktop-nav">
    <div class="logo">Milagros</div>
    <div>
      <ul class="nav-links">
        <li><a href="./inicio/index.php">Inicio</a></li>
        <li><a href="#SobreMi">Sobre Mi</a></li>
        <li><a href="#contacto">Servicios</a></li>
        <li><a href="#Portfolio">Portfolio</a></li>
        <li><a href="./contactos/index.php">Contactos</a></li>
      </ul>
    </div>
  </nav>

  <nav id="hamburger-nav">
    <nav id="desktop-nav" style="background-color: #461d5e; display: block;">
      <!-- Contenido -->
    </nav>    
    <div class="logo">Milagros</div>
    <div class="hamburger-menu">
      <div class="hamburger-icon" onclick="toggleMenu()">
        <span></span>
        <span></span>
        <span></span>
      </div>
      <div class="menu-links">
        <li><a href="./inicio/index.php" onclick="toggleMenu()">Inicio</a></li>
        <li><a href="#SobreMi" onclick="toggleMenu()">Sobre Mi</a></li>
        <li><a href="#contacto" onclick="toggleMenu()">Servicios</a></li>
        <li><a href="#Portfolio" onclick="toggleMenu()">Portfolio</a></li>
        <li><a href="./contactos/index.php" onclick="toggleMenu()">Contactos</a></li>
      </div>
    </div>
  </nav>

  <!-- Start Inicio -->
  <section class="Inicio" id="Inicio">
    <h3><marquee behavior="alternate" direction="left" scrollamount="4"><font face="arial" color="#171B36" size="8"><strong>Hola, Soy Milagros Urssino</strong></font></marquee></h3>
    <h1><marquee behavior="alternate" direction="right" scrollamount="4"><font face="arial" color="#374375" size="6"><strong>De Diseño Y Animacion Digital</strong></font></marquee></h1>
  </section>
  <!-- End Inicio -->

  <!-- Start Sobre Mi -->
  <section class="SobreMi" id="SobreMi">
    <table border="0" id="about" width="100%" cellpadding="0" cellspacing="0" bgcolor="#BABDE2">
      <tr>
        <td>
          <table border="0" width="85%" cellpadding="15" cellspacing="0" align="center">
            <!-- Heading Start -->
            <tr>
              <td height="160" align="center" valign="right" colspan="2">
                <font face="arial" size="6" color=" #171B36">Sobre Mi</font>
                <hr width="110" color="#171B36">
              </td>
            </tr>
            <!-- Heading End -->
            <tr>
              <td width="35%">
                <img src="./imagenes/yo.cv.jpg" width="100%" alt="YO" />
              </td>
              <td width="65%" valign="top">
                <h1>Hola, Soy Milagros Urssino</h1>
                <p>Estudiante de Diseño y Animacion Digital en la UB</p>
                <p>La carrera ofrece una amplia gama de conocimientos y habilidades en el campo del diseño digital y la animación. Los estudiantes exploran conceptos fundamentales de diseño gráfico y digital, adquiriendo destrezas en software especializado como Adobe Photoshop e Illustrator. Además, se sumergen en el mundo de la animación, aprendiendo técnicas tanto en 2D como en 3D, desde storyboard hasta efectos visuales.</p>
                <p>Los estudiantes tienen la oportunidad de participar en proyectos creativos prácticos y realizar pasantías profesionales para adquirir experiencia laboral en la industria. Esta combinación de teoría y práctica prepara a los estudiantes para enfrentar los desafíos del campo del diseño y la animación, brindándoles las habilidades necesarias para destacarse en este apasionante sector.</p>
                <hr>
                <br>
                <button class="btn btn-color-2" onclick="window.open('./contactos/index.php')">Contactanos</button>
              </td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
  </section>
  <!-- End Sobre Mi -->

  <!-- Start Portfolio -->
  <section class="Portfolio" id="Portfolio">
    <table border="0" width="100%" cellpadding="0" cellspacing="0" bgcolor="#BABDE2">
      <tr>
        <td>
          <table border="0" width="85%" cellpadding="15" cellspacing="0" align="center">
            <!-- Heading Start -->
            <tr>
              <td height="160" align="center" valign="middle" colspan="3">
                <font face="arial" size="6" color="#171B36">Portfolio</font>
                <hr width="70" color="#171B36">
              </td>
            </tr>
            <!-- Heading End -->
            <tr>
				<td width="33.33%" valign="top">
				  <table border="0" width="100%" cellpadding="15" cellspacing="0" align="center" bgcolor="#BABDE2">
					  <tr>
						  <td>
							  <font face="arial" size="5" color="#171B36">
							  Primer Proyecto
							 </font>
							 <br/>
							 <br/>
							 <font face="arial" size="4" color="#374375">
							  Diseño de Pagina
							 </font>
							 <br/><br/>
						  <img src="./imagenes/diseno pagina.tp1.jpg" width="100%"/>
						  </td>
					  </tr>
				  </table>	
				</td>
				
				<td width="33.33%" valign="top">
				  <table border="0" width="100%" cellpadding="15" cellspacing="0" align="center" bgcolor="#BABDE2">
					  <tr>
						  <td>
							  <font face="arial" size="5" color="#171B36">
							   Segundo Proyecto 
							 </font>
							 <br/>
							 <br/>
							 <font face="arial" size="4" color="#374375">
							  Diseñar
							 </font>
							 <br/><br/>
						  <img src="./imagenes/creacion de personaje.tp2.jpg" width="100%"/>
						  </td>
					  </tr>
				  </table>	
				</td>
   
				<td width="33.33%" valign="top">
				  <table border="0" width="100%" cellpadding="15" cellspacing="0" align="center" bgcolor="#BABDE2">
					  <tr>
						  <td>
							  <font face="arial" size="5" color="#171B36">
							  Tercer Proyecto
							 </font>
							 <br/>
							 <br/>
							 <font face="arial" size="4" color="#374375">
							  Diseño Grafico
							 </font>
							 <br/><br/>
						  <img src="./imagenes/disenodemarca.tp3.jpg" width="100%"/>
						  </td>
					  </tr>
				  </table>	
				</td>
			</tr>
			 <tr>
				<td width="33.33%" valign="top">
				  <table border="0" width="100%" cellpadding="15" cellspacing="0" align="center" bgcolor="#BABDE2">
					  <tr>
						  <td>
							  <font face="arial" size="5" color="#171B36">
							  Cuarto Proyecto
							 </font>
							 <br/>
							 <br/>
							 <font face="arial" size="4" color="#374375">
							  Codigo
							 </font>
							 <br/><br/>
						  <img src="./imagenes/img_tr2.jpg" width="100%"/>
						  </td>
					  </tr>
				  </table>	
				</td>
				
				<td width="33.33%" valign="top">
				  <table border="0" width="100%" cellpadding="15" cellspacing="0" align="center" bgcolor="#BABDE2">
					  <tr>
						  <td>
							  <font face="arial" size="5" color="#171B36">
							  Quinto Proyecto
							 </font>
							 <br/>
							 <br/>
							 <font face="arial" size="4" color="#374375">
							  Animacion
							 </font>
							 <br/><br/>
						  <img src="./imagenes/animacion.tp5.jpg" width="100%"/>
						  </td>
					  </tr>
				  </table>	
				</td>
   
				<td width="33.33%" valign="top">
				  <table border="0" width="100%" cellpadding="15" cellspacing="0" align="center" bgcolor="#BABDE2">
					  <tr>
						  <td>
							  <font face="arial" size="5" color="#171B36">
							  Sexto Proyecto
							 </font>
							 <br/>
							 <br/>
							 <font face="arial" size="4" color="#374375">
							  Estilo
							 </font>
							 <br/><br/>
						  <img src="./imagenes/la niña y la estrella.tp6.jpg" width="100%"/>
						  </td>
					  </tr>
				  </table>	
				</td>
			</tr>
		   <!-- section padding bottom -->
			  <tr>
					<td height="60" colspan="3">
					
					</td>
			  </tr>
			 <!-- section padding bottom End-->
		  </table>
		</td>
	  </tr>
   </table>
   <!-- End Portfolio -->


  <!-- Start Pie De Pagina -->
  <section id="contacto">
    <h3 class="section__text__p1">Envía un mensaje</h3> 
    <h1 class="title">Contactame</h1>
    <div class="contact-info-upper-container">
      <div class="contact-info-container">
        <img src="./imagenes/correo.png" alt="Email icon" class="icon contact-icon email-icon">
        <p><a href="mailto:mpurssino@gmail.com">mpurssino@gmail.com</a></p>
      </div>
      <div class="contact-info-container">
        <img src="./imagenes/linkedin.png" alt="LinkedIn icon" class="icon contact-icon">
        <p><a href="https://www.linkedin.com">LinkedIn</a></p>
      </div>
    </div>
  </section>
  <footer>
    <nav>
      <div class="nav-links-container">
        <ul class="nav-links">
          <li><a href="./inicio/index.php">Inicio</a></li>
          <li><a href="#SobreMi">Sobre Mi</a></li>
          <li><a href="#contacto">Servicios</a></li>
          <li><a href="#Portfolio">Portfolio</a></li>
          <li><a href="./contactos/index.php">Contactos</a></li>
        </ul>
      </div>
    </nav>
  </footer>
  <!-- End Footer -->
  <script src="./js/script.js"></script>
  
</body>
</html>

