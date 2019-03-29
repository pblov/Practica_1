@extends('layouts.general')
	@section('title','Recursos')
	@section('estilo')
	<link rel="stylesheet" href="css/recursos.css">
	@endsection
	@section('contenedor')
	<div class="re-head"></div>
		<div class="re-welcome">El Sistema de Bibliotecas de la Universidad del Bio-Bio tiene a disposición una gran cantidad de fuentes de información a disposición para los estudiantes</div>
		<hr class="re-lane">
		<h2 class="re-revistas">Revistas UBB</h2>
		<div class="re-secciones">
			<div class="re-seccion revistas">
				<img src="{{asset('images/arquitecturasur.jpg')}}" width="250px" height="300px" alt="">
				<h4>Arquitectura del Sur</h4><p><br>ISSN:0716-2677<br>ISSNe:0719-6466</p>
			</div>
			<div class="re-seccion revistas">
				<img src="{{asset('images/ceur.jpg')}}" width="250px" height="300px" alt="">
				<h4>CEUR</h4><p><br>ISSN:-<br>ISSNe:-</p>
			</div>
			<div class="re-seccion revistas">
				<img src="{{asset('images/habitat.jpg')}}" width="250px" height="300px" alt="">
				<h4>Habitat Sustentable</h4><p><br>ISSN:-<br>ISSNe:0719-0700</p>
			</div>
			<div class="re-seccion revistas">
				<img src="{{asset('images/horizontes.jpg')}}" width="250px" height="300px" alt="">
				<h4>Horizontes Educacionales</h4><p><br>ISSN:0717-2141<br>ISSNe:-</p>
			</div>
			<div class="re-seccion revistas">
				<img src="{{asset('images/empresarial.jpg')}}" width="250px" height="300px" alt="">
				<h4>Horizontes Empresariales</h4><p><br>ISSN:0717-9901<br>ISSNe:0719-0875</p>
			</div>
			<div class="re-seccion revistas">
				<img src="images/macrofacultad.jpg" width="250px" height="300px" alt="">
				<h4>Macrofacultad</h4><p><br>ISSN:-<br>ISSNe:-</p>
			</div>
			<div class="re-seccion revistas">
				<img src="images/maderas.jpg" width="250px" height="300px" alt="">
				<h4>Maderas: Ciencia y Tecnología</h4><p><br>ISSN:0717-3644<br>ISSNe:0718-221X</p>
			</div>
			<div class="re-seccion revistas">
				<img src="images/sueldo.gif" width="250px" height="300px" alt="">
				<h4>Mercado de Sueldo</h4><p><br>ISSN:0716-775X<br>ISSNe:-</p>
			</div>
			<div class="re-seccion revistas">
				<img src="images/proyeccion.png" width="250px" height="300px" alt="">
				<h4>Proyección UBB</h4><p><br>ISSN:-<br>ISSNe:-</p>
			</div>
			<div class="re-seccion revistas">
				<img src="images/industrial.jpg" width="250px" height="300px" alt="">
				<h4>Ingeniería Industrial</h4><p><br>ISSN:0717-9103<br>ISSNe:0718-8307</p>
			</div>
			<div class="re-seccion revistas">
				<img src="images/piensa.jpg" width="250px" height="300px" alt="">
				<h4>Piensa en Acción</h4><p><br>ISSN:-<br>ISSNe:-</p>
			</div>
			<div class="re-seccion revistas">
				<img src="images/pequen.jpg" width="250px" height="300px" alt="">
				<h4>Pequen</h4><p><br>ISSN:0719-112X<br>ISSNe:-</p>
			</div>
			<div class="re-seccion revistas">
				<img src="images/tiempo.jpg" width="250px" height="300px" alt="">
				<h4>Tiempo y Espacio</h4><p><br>ISSN:0716-9671<br>ISSNe:0719-0867</p>
			</div>
			<div class="re-seccion revistas">
				<img src="images/teoria.jpg" width="250px" height="300px" alt="">
				<<h4>Theoría</h4><p><br>ISSN:0717-196X<br>ISSNe:-</p>
			</div>
			<div class="re-seccion revistas">
				<img src="images/urbano.jpg" width="250px" height="300px" alt="">
				<h4>Urbano</h4><p><br>ISSN:0171-3997<br>ISSNe:0718-3607</p>
			</div>
		</div>
		
		<div class="re-link">
			<div class="re-link-card re-card1">
				<div class="text">
					<h3>Otros Recursos Disponiles</h3>
					<a href="https://www.intechopen.com/books">- Intech Open Acces Books</a><br>
					<a href="https://www.oecd-ilibrary.org">-OCDE</a><br>
					<a href="https://www.ondac.com/602/w3-channel.html">-Manual de precios ONDAC</a><br>
				</div>
			</div>
			<div class="re-link-card re-card2">
				<div class="text">
					<h3>Libros electronicos</h3>
					<a href="http://ezproxy.ubiobio.cl:2048/login?url=https://www.digitaliapublishing.com/">-Digitalia Publishing</a><br>
					<a href="http://ezproxy.ubiobio.cl:2048/login?url=https://ebookcentral.proquest.com/lib/ubiobiomhe">-Editorial McGraw-Hill</a><br>
					<a href="http://ezproxy.ubiobio.cl:2048/login?url=https://www.taylorfrancis.com/">-Taylor & Francis eBooks/ENGnetBase</a><br>
					<a href="https://www.igi-global.com/gateway/login/?returnurl=%2fgateway%2f">-IGI-Global</a><br>
				</div>
			</div>
		</div>

		<div class="re-welcome">
			<img src="{{asset('images/libstep.jpg')}}" width="200px" height="auto" alt=""><br>
			Lib.Steps es un sistema integrado de investigación que permite realizar búsquedas en tiempo real a través de recursos en línea de la biblioteca, incluyendo revistas electrónicas, bases de datos electrónicas y el catálogo de la biblioteca, a partir de un único cuadro de búsqueda, proporcionando un fácil acceso al texto completo cuando está disponible, y la gestión de sus datos buscados.
			<div class="re-welcome-button"><a href="http://asp.libsteps.com/Bio-Bio/?set_lang=es"><button>Ir al buscador</button></a></div>
		</div>

	@endsection
	
		
