
	@extends('layouts.general')
	
	@section('title','Inicio')
	@section('estilo')
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/inicio.css">
	<link rel="stylesheet" type="text/css" href="css/inicio-mobile.css">
	<link rel="stylesheet" type="text/css" href="css/newbook.css">
	
	
	@endsection
	@section('contenedor')
		<div class="index-head"></div>

		<div class="search-container">
			<div class="search-container-l"></div>
			<div class="search"><form action="">
			<label for="search">Búsqueda Primo</label>
			<input id="search" type="text" placeholder="Buscar . . ." autocomplete="off">
			<button class="buscar" type="submit"><i class="fas fa-search"></i></button>
		</form></div>
		<div class="search-container-r"></div>

		</div>
		

		<div class="index-librotitulo"><h3><b> Nuevos Libros Disponibles</b> </h3></div>
		<div class="seccion7 sec">
			<div id="prev" class="prev"><i class="fas fa-chevron-left puntero"></i></div>

			<div id="slider" class="slider">
				
				<div id="slide" class="slide ">
					<div class="index-cards">
						<div class="index-books">
						<img src="{!!asset('images/portada1.jpg')!!}" width="100%" height="245px">
						<div class="index-books-texto"><p><h3>La bailarina de Auschwitz</h3><br>Edith Eger</p></div>
						
					</div>
					<div class="index-books">
						<img src="{!!asset('images/portada2.jpg')!!}" width="100%" height="245px">
						<div class="index-books-texto"><p><h3>Psicologia del aprendisaje universitario</h3><br>Juan Pozo</p></div>
					
					</div>
					<div class="index-books">
						<img src="{!!asset('images/portada3.jpg')!!}" width="100%" height="245px">
						<div class="index-books-texto"><p><h3>Analitica predictiva</h3><br>Eric Siegel</p></div>
					
					</div>
					</div>
					
					
				</div>
				<div id="slide" class="slide active">
					<div class="index-cards">
						<div class="index-books">
						<img src="{!!asset('images/libro4.jpg')!!}" width="100%" height="245px">
						<div class="index-books-texto"><p><h3>Photoshop CC</h3><br>MediaActive</p></div>
					
					</div>
					<div class="index-books">
						<img src="{!!asset('images/libro5.jpg')!!}" width="100%" height="245px">
						<div class="index-books-texto"><p><h3>Descubrir la neurodidactica</h3><br>Anna Forés</p></div>
					
					</div>
					<div class="index-books">
						<img src="{!!asset('images/libro6.jpg')!!}" width="100%" height="245px">
						<div class="index-books-texto"><p><h3>Abriendo las puertas del aula</h3><br>Jorge Manzi</p></div>
					
					</div>
					</div>
					
					
				</div>
				<div id="slide" class="slide">
					<div class="index-cards">
						<div class="index-books">
						<img src="{!!asset('images/libro7.jpg')!!}" width="100%" height="245px">
						<div class="index-books-texto"><p><h3>COSTOS II</h3><br>Eric Siegel</p></div>
					
					</div>
					<div class="index-books">
						<img src="{!!asset('images/libro8.jpg')!!}" width="100%" height="245px">
						<div class="index-books-texto"><p><h3>Biologia Celular</h3><br>Eric Siegel</p></div>
					
					</div>
					<div class="index-books">
						<img src="{!!asset('images/libro9.jpg')!!}" width="100%" height="245px">
						<div class="index-books-texto"><p><h3>Gramática Visual</h3><br>Christian Leborg</p></div>
					
					</div>
					</div>
					
				</div>
			</div>

			<div id="next" class="next"><i class="fas fa-chevron-right puntero"></i></div>
	
			</div>
			<hr class="index-lane">
		<div class="index-welcome"><q>Queda prohibido llorar sin aprender,
				levantarte un día sin saber qué hacer,
				tener miedo a tus recuerdos.
				Queda prohibido no sonreír a los problemas,
				no luchar por lo que quieres,
				abandonarlo todo por miedo,
				no convertir en realidad tus sueños</q></div>
				<hr class="index-lane">
	
		<div class="secciones">
			<div class="seccion1 relativo sec texto">
					<a href="/public/db">
						<div class="s1image img">
						<h2  class="descripcion"><b> Bases de Datos</b> </h2>
					<p>Bases de Datos BEIC, Free-Access, e-Bd Remoto</p>

					</div>
					</a>
					
			</div>
			
			<div class="seccion3 relativo sec texto">
				<a href="/public/novedades">
					<div class="s3image img">
						<h2  class="descripcion"><b>Novedades </b> </h2>
					<p style="font-size:15px;">Novedades de libros<br> </p>
					</div>
				</a>
					

			</div>
			<div class="seccion4 sec">
				<header><h3>Horario</h3></header>
				<table>
					<tr>
						<th>Dias</th>
						<th>Horas</th>
					</tr>
					<tr>
						<td>Lunes a Viernes</td>
						<td>07:30 a 20:00 hrs.</td>
					</tr>
					<tr>
						<td>Sábado y Domingo</td>
						<td>08:30 a 18:00 hrs.</td>
					</tr>

				</table>
			</div>
			<div class="seccion5 relativo sec texto">
				<a href="/public/recursos">
					<div class="s5image img">

					<h2  class="descripcion"><b> Recursos</b> </h2>
					<p>Revistas UBB, Libros electronicos, Otros.</p>
				</div>
				</a>
				
			</div>
			<div class="seccion6 relativo sec texto">
				<a href="/public/fs">
					<div class="s6image img">
					<h2  class="descripcion"><b>FeedbackStudio </b> </h2>
					<p>Herramienta Antiplagio</p>
				</div>
				</a>
				
			</div>
	<!----------------------------------------------------------------------------------------->

			
	<!----------------------------------------------------------------------------------------->
			<div class="seccion8 relativo sec texto">
				<a href="/public/memoristas"><div class="s8image img">
					<h2  class="descripcion"><b> Memoristas</b> </h2>
					<p>Información necesaria para orientarte en el proceso de generación de tu memoria</p>
				</div></a>
			</div>
		</div>
		
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="js/slide.js"></script>
@endsection