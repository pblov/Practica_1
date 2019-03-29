@extends('layouts.general')
	@section('title','Memoristas')
	@section('estilo')
	<link rel="stylesheet" type="text/css" href="css/memoristas.css">
	@endsection
	@section('contenedor')

	<div class="memo-header"> </div>
	<div class="re-contenedor">
		<div class="memo-welcome">
			<h2>Bienvenido Memorista</h2>
			<p>El Sistema de Bibliotecas de la Universidad  Del Bio Bio, en su constante afán de apoyar la labor que realizan sus alumnos, te invita a conocer este sitio en donde encontrarás toda la información necesaria para orientarte en el proceso de generación de tu memoria</p>
		</div>
		<hr class="memo-lane">


		<button class="me-boton" style="margin-top:30px;" >Servicios Preferenciales
		</button> 
		<div class="re-ac-contenido">
			<h4 style="margin-top:20px;margin-bottom:5px;font-weight:600;">Prestamo Referencial</h4>
			<ul>
				<li>Aumento de la cantidad de ejemplares y plazo de préstamos de material bibliográfico y digital que no se encuentre en colecciones de alta demanda</li>
				<li>Solicitúd exclusiva de artículos y material bibliográfico<a href="" style=""> (Leer Más)</a></li>
				<li>Convenio de Prestamo Interbibliotecario con Bibliotecas Universitarias pertenecientes al Consejo de Rectores<a href=""> (Leer Más)</a></li>
				<br>
			</ul>

        </div>


        <button class="me-boton">Catálogos y Recursos Electrónicos</button> 
        <div class="re-ac-contenido"style="text-align:center;" >
			<h4 style="margin-top:20px;margin-bottom:5px;font-weight:600;">Catálogos</h4>
			<ul>
				<li>Catálogo Memorias Universidad del Bio-Bio<a href="">  Ver</a></li>
				<li>Catálogo Cybertesis Universidad del Bio-Bio<a href=""> Ver</a> </li>
				<li>Catálogo Bibliotecas del Consejo de Rectores <a href=""> Ver</a></li>
				<li>Catálogo Global Cybertesis<a href=""> Ver</a></li>
				<li>Catálogo Tesis Chilenas<a href=""> Ver</a></li>
				<li>Otros Catálogos<a href=""> Ver</a></li>
			</ul>
			<h4 style="margin-top:20px;margin-bottom:5px;font-weight:600;">Biblioteca Virtual Universidad del Bio-Bio</h4>
			<ul>
				<li>Bases de Datos <a href="">Ver</a></li>
				<li>Libros Electronicos<a href="">Ver</a></li>
				<li>Revistas Electronicas<a href="">Ver</a></li>
				<li>Diarios Electronicos<a href="">Ver</a></li>
			</ul>
			<br>
        </div>

		<button class="me-boton">Formato de tu Memoria</button> 
		<div class="re-ac-contenido" style="text-align:center;">
			<br>
				<h3>Normativa Proyecto de Título en Formato Digital:</h3>
				<p>Entrega las pautas para una correcta presentación de tu memoria en relación a:<br>
					Carátula, archivos y estructura del contenido<a href=""> Ver Guia-Formato pdf</a></p><br>
				<h3>Guía para la redacción de Referencias Bibliográficas:</h3>
				<p>Estas guías te entregan las normas, en base a estándares internacionales, para la elaboración de la bibliografía que debes citar en tus trabajos de investigación y memoria</p>
				<br>
				<table class="memo-blind-table" style="margin-left:25%;">
					<tr>
						<td>Norma ISO 690:2010<br><a href="">Guia Breve</a></td>
						<td>Estilo Chicago-Deusto<br><a href="">Guia Breve</a><br><a href="">Existencia en Sistema de Biblioteca</a></td>
					</tr>
					<tr>
						<td>Norma UNE-ISO 690:2013 <br> <a href="">Existencia en Sistema de Bibliotecas</a></td>
						<td>Estilo MLA <br> <a href="">Guia Breve</a><br> <a href="">Existencia en Sistema de Bibliotecas</a></td>
					</tr>
					<tr>
						<td>Estilo APA <br> <a href="">Guia Breve</a> <br> <a href="">Existencia en Sistema de Bibliotecas</a> <br> <a href="">APA Style Guide to Electronic Reference</a></td>
						<td>Norma VANCOUVER <br> <a href="">Guia Breve</a> <br> <a href="">Guia de Referencia</a></td>
					</tr>
				</table>
				<br>
		</div>
		
		<button class="me-boton">Publica tu Memoria</button> 
        <div class="re-ac-contenido" style="margin-bottom:130px;">
			<br>
				<h3>¿Que es Cybertesis?</h3>
				<br>
				 <p>Cybertesis es el resultado de un programa de cooperación entre la Universidad de Montreal, la Universidad de Lyon y la Universidad de Chile, con el apoyo de Fonds Francophone des Inforoutes y Unesco. El programa Cybertesis esta conformado  por 50 instituciones de Europa, África y América y tiene como objetivo promover la publicacion y difusion de tesis electronicas en las universidades, implementando estandares internacionales de publicacion digital y tecnologías que facilitan la consulta  e intercambio de información, asegurando una mayor difusión de los trabajos de investigación efectuados y construirse en una herramienta eficaz para la comunidad academica.</p>
				 <br>
				 <h3>Publicar tu memoria te entrega los siguientes beneficios:</h3>
				<br>
				<p>- Acceso gratuito y un texto completo a las tesis a través de Internet, ampliando su difusión y permitiendo que sean  un verdadero instrumento de trabajo para la comunidad académica.</p>
				<br>
				<p>- Una mayor visibilidad de la Universidad en el mundo, permitiendo al alumno obtener contacto con estudiantes y profesionales de la diciplina.</p>
				<br>
				<p>- Un rápido y fácil proceso de publicación, lo que hace que las publiaciones estén disponibles en poco tiempo.</p>
				<br>
				<p>- La plataforma aumenta las posibilidades de que el trabajo pueda ser leído y de que sea citado por otros autores</p>
				<br>
				<p>- La publicación electrónica de una tesis facilita un potencial de financiamiento externo para futuras investigaciones</p>
				<br>
				<h3>Autorización para la publicación</h3>
				<p>Para publicar tu tesis a través del Programa Cybertesis, debes contar con la autorización de tu profesor guía y devolver firmado el siguiente formulario a tu biblioteca.</p>
				<br>
				<a href="">Descargar Formulario de Autorización</a>
				<br>
				<h3>Participantes del Programa Cybertesis en Chile</h3>
				<table class="memo-blind-table">
					<tr>
						<td>- Universidad Austral</td>
						<td>- Universidad de Concepción</td>
					</tr>
					<tr>
						<td>- Universidad del Bio-Bio</td>
						<td>- Pontificia Universidad Católica de Valparaiso</td>
					</tr>
					<tr>
						<td>- Universidad de Chile</td>
						<td>- Universidad Católica del Norte</td>
					</tr>
				</table>
				<br>
				<h3>Contactos</h3>
				<table class="memo-blind-table">
					<tr>
						<td>CAMPUS CONCEPCIÓN
						<br><p>Tatiana Morales V.</p>
						<br><p>Bibliotecologa</p>
						<br><p>tmorales@ubiobio.cl</p>
						<br><p>Avda. Collao N°1202</p>
						<br><p>41-3111253</p>
						</td>
						<td>CAMPUS LA CASTILLA
						<br><p>Carolina Soto M.</p>
						<br><p>Bibliotecologa</p>
						<br><p>csoto@ubiobio.cl</p>
						<br><p>Avda. Brasil N°1180</p>
						<br><p>42-2463475</p>
						</td>
						<td>CAMPUS FDO. MAY
						<br><p>Monica Erazo A.</p>
						<br><p>Bibliotecologa</p>
						<br><p>merazo@ubiobio.cl</p>
						<br><p>Avda. Andrés Bello N°720</p>
						<br><p>42-2463058</p>
						</td>
					</tr>
				</table>
        </div>
		
	</div>

	<script src="js/memoristas.js"></script>
	@endsection
	
		

