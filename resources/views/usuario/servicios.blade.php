@extends('layouts.usuario')
	@section('title','Servicios')
	@section('estilo')
	<link rel="stylesheet" type="text/css" href="{{asset('css/servicios.css')}}">
	@endsection
	@section('contenedor')
	<div class="servicios-head"></div>
		<div class="servicios-back"><a href="#servicios-seccion"><button class="servicios-seccion-back"><i class="fas fa-arrow-circle-up"></i></button></a></div>
		<div class="servicios-seccion" id="servicios-seccion">
			<div class="servicios-card">
				<a href="#servicios-capacitacion">
					<div class="servicios-head-card">
						<i class="fas fa-graduation-cap"></i>
					</div>
					<div class="servicios-footer-card"><p>Capacitacion</p></div>
				</a>
				
			</div>
			<div class="servicios-card">
				<a href="#servicios-reserva">
					<div class="servicios-head-card">
						<i class="far fa-calendar-check"></i>
					</div>
					<div class="servicios-footer-card"><p>Reserva en Linea</p></div>
				</a>
				
			</div>
			<div class="servicios-card">
				<a href="#servicios-renovacion">
					<div class="servicios-head-card"><i class="fas fa-calendar-minus"></i></div>
					<div class="servicios-footer-card"><p>Renovacion en Linea</p></div>
				</a>
				
			</div>
			<div class="servicios-card">
				<a href="#servicios-referencia">
					<div class="servicios-head-card"><i class="fas fa-user-alt"></i></div>
					<div class="servicios-footer-card"><p>Servicio de Referencia</p></div>
				</a>
				
			</div>
			<div class="servicios-card">
				<a href="#servicios-prestamo">
					<div class="servicios-head-card"><i class="fas fa-american-sign-language-interpreting"></i></div>
					<div class="servicios-footer-card"><p>Préstamo Interbibliotecario</p></div>
				</a>
				
			</div>
			<div class="servicios-card">
				<a href="#servicios-atencion">
					<div class="servicios-head-card"><i class="fas fa-tablet-alt"></i></div>
					<div class="servicios-footer-card"><p>APE</p></div>
				</a>
				
			</div>
			<div class="servicios-card">
				<a href="#servicios-salas">
					<div class="servicios-head-card"><i class="fas fa-user-edit"></i></div>
					<div class="servicios-footer-card"><p>Salas de Estudio</p></div>
				</a>
				
			</div>
			<div class="servicios-card">
				<a href="#servicios-computador">
					<div class="servicios-head-card"><i class="fas fa-laptop"></i></div>
					<div class="servicios-footer-card"><p>Servicios Computacionales</p></div>
				</a>
				
			</div>

		</div><!---------------------- fin secciones---------------------------------->
		<div class="servicios-content">
			<div class="servicios-content-card">
				<div class="servicios-content-head" id="servicios-capacitacion"><i class="fas fa-graduation-cap"></i>Capacitacion</div>
				<div class="servicios-content-info"><p>El Sistema de Bibliotecas de la Universidad del Bío-Bío mantiene, en forma permanente, un programa de desarrollo de habilidades informacionales destinado al pregrado y postgrado, como apoyo a la docencia e investigación. Su pretensión es  entregar, de acuerdo a estándares, las herramientas y conocimientos necesarios para responder a las demandas de información  mediante plataformas tecnológicas.

Solicita este servicio, contactándote con la bibliotecóloga de tu Campus, en horario de 9:00 - 18:00 hrs.</p></div>
			</div>
			<div class="servicios-content-card" id="servicios-reserva">
				<div class="servicios-content-head"><i class="far fa-calendar-check"></i>Reserva en Linea</div>
				<div class="servicios-content-info"><p>En el sitio web del Sistema de Bibliotecas de la Universidad del Bío-Bío, desde tu cuenta personal, reserva el libro requerido y que esté disponible, indicando la Biblioteca en que deseas retirarlo.</p></div>
			</div>
			<div class="servicios-content-card" id="servicios-renovacion">
				<div class="servicios-content-head"><i class="fas fa-calendar-minus"></i>Renovacion en Linea</div>
				<div class="servicios-content-info"><p>En el sitio web del Sistema de Bibliotecas de la Universidad del Bío-Bío, desde tu cuenta personal, renueva el libro que tienes en préstamo y que necesitas seguir ocupando.</p></div>
			</div>
			<div class="servicios-content-card" id="servicios-referencia">
				<div class="servicios-content-head"><i class="fas fa-user-alt"></i>Servicio de Referencia</div>
				<div class="servicios-content-info"><p>Bibliotecólogos calificados en distintas disciplinas pueden responder a tus consultas específicas y apoyarte en la búsqueda de información, desde las diferentes plataformas tecnológicas que te ofrece la el Sistema de Bibliotecas UBB:

Sistema Werken-Epu, Bases de Datos BEIC, EBSCO, SCIELO, entre otras, y diferentes Publicaciones Electrónicas

</p></div>
			</div>
			<div class="servicios-content-card" id="servicios-prestamo">
				<div class="servicios-content-head"><i class="fas fa-american-sign-language-interpreting"></i>Prestamo Interbibliotecario</div>
				<div class="servicios-content-info"><p>Este servicio te permite acceder a la colección bibliográfica de todas las universidades pertenecientes al Consejo de Rectores como también a las de las instituciones en convenio, mediante el préstamo en sala y/o a domicilio.

Para acceder a este servicio, haz click en el formulario que corresponda a la biblioteca de tu campus, completalo con los datos de tu pedido y envialo utilizando el botón "enviar" que se encuentra en el mismo formulario.

Formularios:	 
 	- Formulario Biblioteca Hilario Hernández Gurruchaga
 	- Formulario Biblioteca Campus Fernando May
 	- Formulario Biblioteca Campus La Castilla</p></div>
			</div>
			<div class="servicios-content-card" id="servicios-atencion">
				<div class="servicios-content-head"><i class="fas fa-tablet-alt"></i>Atencion Preferencial del Estudiante</div>
				<div class="servicios-content-info"><p>A través de este programa, impulsado por la Vicerrectoría Académica, tienes la oportunidad de sugerir la adquisición de libros para tu desarrollo integral.

Para acceder a este servicio, haz click en el formulario que corresponda a la biblioteca de tu campus, completalo con los datos de tu pedido y envialo utilizando el botón "enviar" que se encuentra en el mismo formulario.

Formularios:	 
 	- Formulario Biblioteca Hilario Hernández Gurruchaga
 	- Formulario Biblioteca Campus Fernando May
 	- Formulario Biblioteca Campus La Castilla</p></div>
			</div>
			<div class="servicios-content-card" id="servicios-salas">
				<div class="servicios-content-head"><i class="fas fa-user-edit"></i>Salas de Estudio</div>
				<div class="servicios-content-info"><p>Te ofrecemos, para tus actividades académicas, confortables Salas de Estudio distribuidas en todos los campus de la UBB, que funcionan todos los días del año en horario extendido.</p></div>
			</div>
			<div class="servicios-content-card" id="servicios-computador">
				<div class="servicios-content-head"><i class="fas fa-laptop"></i>Servicios Computacionales</div>
				<div class="servicios-content-info"><p>El Sistema de Bibliotecas de la Universidad del Bio Bio cuenta con notebook para prestamos en sala los puedes solicitar en cualquiera de nuestras bibliotecas<br>antes de solicitar este servicio te recomendamos leer el <a href="">reglamento interno</a> que regula su uso</p></div>
			</div>
		</div>
	@endsection
	
	