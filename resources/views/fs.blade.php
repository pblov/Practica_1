@extends('layouts.general')
	@section('title','FeedBack Studio')
	@section('estilo')
	<link rel="stylesheet" type="text/css" href="css/fs.css">
	@endsection
	@section('contenedor')


	<div class="fs-head"></div>
		<div class="fs-welcome">
			<h3>Servicio Antiplagio del Sistema de Bibliotecas de la Universidad del Bío-Bío</h3>
			<p>Bienvenido(a), para acceder al servicio antiplagio sugerimos primero contactarse directamente con el bibliotecario(a) de su Biblioteca quien le guiará en el proceso de creación de su cuenta (según corresponda) y el uso de la plataforma:</p>
		</div>
		<hr class="fs-lane">
		<div class="fs-secciones">
			<div class="fs-seccion">
				<img src="{!!asset('images/conce.jpg')!!}" width="100%" height="200px">
				<div class="fs-seccion-texto">
					<h3>Biblioteca Sede Concepción</h3>
					<table class="fs-seccion-table">
						<tr>
							<td><p>Marcela Araya L</p>  </td>
							<td><p>mparaya@ubiobio.cl</p>  </td>
							<td><p>Anexo 1099</p>  </td>
						</tr>
						<tr>
							<td><p>Romina Bruna R</p>  .</td>
							<td><p>rbruna@ubiobio.cl</p>  </td>
							<td><p>Anexo 1616</p>  </td>
						</tr>
						<tr>
							<td><p>Alida Luengo C.</p>  </td>
							<td><p>aluengo@ubiobio.cl</p>  </td>
							<td><p> Anexo 1253</p> </td>
						</tr>
						<tr>
							<td><p>Francisca Ortiz M.</p>  </td>
							<td><p>faortiz@ubiobio.cl</p>  </td>
							<td><p>Anexo 1253</p>  </td>
						</tr>
					</table>
				</div>
			</div>
			<div class="fs-seccion">
				<img src="{!!asset('images/chillan.jpg')!!}" width="100%" height="200px">
				<div class="fs-seccion-texto">
					<h3>Biblioteca Sede Chillán</h3>
					<table class="fs-seccion-table">
						<tr>
							<td>Felipe Soto S.</td>
							<td>fsoto@ubiobio.cl</td>
							<td>Anexo 3019 (Fdo.May)</td>
						</tr>
						<tr>
							<td>Carolina Soto M.</td>
							<td>csoto@ubiobio.cl</td>
							<td>Anexo 3475</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
		<div class="fs-welcome"><p>Les recordamos que este servicio está dirigido principalmente a nuestros alumnos tesistas de pre y postgrado e investigadores y todos aquellos que requieran de este servicio.</p></div>
		<table class="fs-table">
			
			<tr>
				<td>Manual para instructores</td>
				<td><a href="https://drive.google.com/file/d/1mgdJAVeuIQT0Nz1s6chDssvNcD80wMmg/view">Descargar</a></td>
			</tr>
			<tr>
				<td>Manual para Estudiantes</td>
				<td><a href="https://drive.google.com/file/d/1Rc6jW85gSHGXZHOooKDTY-TGS3Lb_HJi/view">Descargar</a></td>
			</tr>
		</table>
		<div class="fs-link"><a href="https://www.turnitin.com/login_page.asp?lang=es_la" class="fs-link"><button>Acceder al Sitio</button></a></div>
		

	@endsection
	
		
