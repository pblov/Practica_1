<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	@yield('estilo')
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">

	
	<link rel="stylesheet" type="text/css" href="{{asset('css/presentacion.css')}}">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/texteffect.css">
	<link rel="stylesheet" href="css/footer1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexboxgrid/6.3.1/flexboxgrid.css">
	
</head>
<body>

	<input type="checkbox" name="openSidebar" id="openSidebar" style="display: none;">
	<header class="general-head-top">
		<div class="general-head-top-logo">
			<label for="openSidebar"><i class="fas fa-bars general-head-check"></i></label>
			
			<a href="/public/inicio"><img src="{{('images/logo.png')}}" height="50" width="auto"></a>
			<p class="general-centrartext">Universidad Del Bio-Bio</p>
		</div>
		<div class="general-head-top-titulo"><p class="general-centrartext">Red de Bibliotecas UBB</p></div>
		<div class="general-head-top-login"><a href="/public/login"><button>Iniciar Sesión</button></a></div>
	</header>

	<div class="general-sidebar">
		<div class="general-nav">
			<ul>
			<li>
				<a href="/public/inicio" style="text-decoration: none; color: white;"><i class="fa fa-home fa-1x centrartext"></i><p>Inicio</p></a>
				
			</li>
			<li>
				<a href="/public/servicios" style="text-decoration: none; color: white;"><i class="fas fa-tools fa-1x centrartext"></i><p>Servicios</p></a>
				
			</li>
			<li>
				<a href="/public/bibliotecas" style="text-decoration: none; color: white;"><i class="fas fa-phone fa-1x centrartext" ></i><p>Bibliotecas</p></a>
				
			</li>
			<li>
				<a href="/public/reglamento" style="text-decoration: none; color: white;"><i class="fas fa-gavel centrartext" ></i><p>Nosotros</p></a>
				
			</li>
			<li>
				<a href="/public/investigacion" style="text-decoration: none; color: white;"><i class="fas fa-user-secret centrartext"></i><p>Investigación</p>	</a>
				
			</li>
		</ul>
		</div>
	</div>

	<div class="general-contenedor">
		@yield('contenedor')
		<footer>
        <div class="fo-container">
            <div class="sec1">
                <div class="fo-contenido">
                        <h4> <b> LINK DE INTERÉS</b></h4>
                        <hr >
                        <ul>
                            <li><a href="#">Repositorio DSPACE</a></li>
                            <li><a href="https://ubiobio-primo.hosted.exlibrisgroup.com/primo-explore/search?vid=56UBB&lang=es_ES&sortby=rank">Búsqueda PRIMO</a></li>
                            <li><a href="#">Indicador Económico</a></li>
                            <li><a href="#">Indicador Económico</a></li>
                            <li><a href="#">Indicador Económico</a></li>
                        </ul>
                </div>
                <div class="fo-contenido">
                        <h4> <b>SERVICIOS UBB </b></h4>
                        <hr >
                        <ul>
                          <li><a href="#">Web UBB</a></li>
                          <li><a href="#">Adecca</a></li>
                          <li><a href="#">Moodle</a></li>
                          <li><a href="#">Intranet</a></li>
                          <li><a href="#">Correo Alumnos</a></li>
                        </ul>
                </div>
                <div  id="iconos" class="fo-contenido">
                        
                        <a href="https://www.facebook.com/SIBUBB/"> <i id="fb"class="fab fa-facebook-f fa-2x" aria-hidden="true" style="margin:15px;"></i></a>
                        <a href="https://twitter.com/ubbchile"> <i id="tw"class="fab fa-twitter fa-2x"aria-hidden="true"style="margin:15px;"></i> </a>
                        <a href="https://www.youtube.com/user/udelbiobio"> <i id="yt"class="fab fa-youtube fa-2x"aria-hidden="true"style="margin:15px;"></i></a>
                        <a href="https://www.instagram.com/Admision_UBB/"> <i id="insta"class="fab fa-instagram fa-2x"aria-hidden="true"style="margin:15px;"></i></a> 
                        <a href="https://cl.linkedin.com/in/ubiobio"> <i id="in"class="fab fa-linkedin-in fa-2x"aria-hidden="true"style="margin:15px;"></i> </a>
                        <img src="{{asset('images/acreditacion.png')}}" alt="">
                </div>


            </div>

            <div id="copyright2" class="footer-copyright text-center py-3" style="color:rgb(233, 233, 233); font-size:14px; ">
                    <hr style="background:gold;margin-top:50px;">
                Universidad del Bío-Bío Todos los derechos reservados © 2014-2019
                </div>
        </div>
    </footer>
	</div>

</body>
</html>