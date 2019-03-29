@extends('layouts.usuario')
	@section('title','User')
	@section('estilo')
	<link rel="stylesheet" href="{{asset('css/user.css')}}">
	@endsection
	@section('contenedor')
	<div class="usuario-perfil">
		<div class="usuario-box">
			<img src="{{asset('images/12.png')}}" alt="" width="100%" height="200px;" style="border-radius: 50%;border:5px solid #FFCC33; box-sizing: border-box;">
					<p>Nombre: <br> Luis Esteban Pasten Jara</p>
			<p>Estado: <br>Activo</p>
				<p>Carrera: <br>Ingeniería Civil Informática</p>
		</div>

	</div>

	<div class="usuario-link">
		<button style="background: #FF3333; color: white;">Suspensiones</button>
		<button style="background: #0040B0; color: white">Reservas</button>
		<button style="background: #000332;color: white;">Cerrar Sesión</button>
	</div>

	<div class="usuario-contenido">
		<h3>Prestamos Vigentes</h3>
		<table class="usuario-tabla">
			<tr>
				<th>Tipo Préstamo</th>
				<th>Título</th>
				<th>Formato</th>
				<th>Préstamo</th>
				<th>Devolución</th>
				<th>Renovar</th>
			</tr>
			<tr>
				<td>aodjasoidjasid</td>
				<td>aosdjasoidj</td>
				<td>aosdjasodij</td>
				<td>asoidjasiodj</td>
				<td>asodijasiodj</td>
				<td><button>Renovar Libro</button></td>
			</tr>
			<tr>
				<td>aodjasoidjasid</td>
				<td>aosdjasoidj</td>
				<td>aosdjasodij</td>
				<td>asoidjasiodj</td>
				<td>asodijasiodj</td>
				<td><button>Renovar Libro</button></td>
			</tr>
			<tr>
				<td>aodjasoidjasid</td>
				<td>aosdjasoidj</td>
				<td>aosdjasodij</td>
				<td>asoidjasiodj</td>
				<td>asodijasiodj</td>
				<td><button>Renovar Libro</button></td>
			</tr>
			<tr>
				<td>aodjasoidjasid</td>
				<td>aosdjasoidj</td>
				<td>aosdjasodij</td>
				<td>asoidjasiodj</td>
				<td>asodijasiodj</td>
				<td><button>Renovar Libro</button></td>
			</tr>
		</table>
		<h3>Prestamos Históricos</h3>
		<table class="usuario-tabla">
			<tr>
				<th>Tipo Prestamo</th>
				<th>Título</th>
				<th>Formato</th>
				<th>Préstamo</th>
				<th>Devolución Normal</th>
				<th>Devolución Real</th>
			</tr>
			<tr>
				<td>aodjasoidjasid</td>
				<td>aosdjasoidj</td>
				<td>aosdjasodij</td>
				<td>asoidjasiodj</td>
				<td>asodijasiodj</td>
				<td>asoidjasoidj</td>
			</tr>
			<tr>
				<td>aodjasoidjasid</td>
				<td>aosdjasoidj</td>
				<td>aosdjasodij</td>
				<td>asoidjasiodj</td>
				<td>asodijasiodj</td>
				<td>asoidjasoidj</td>
			</tr>
			<tr>
				<td>aodjasoidjasid</td>
				<td>aosdjasoidj</td>
				<td>aosdjasodij</td>
				<td>asoidjasiodj</td>
				<td>asodijasiodj</td>
				<td>asoidjasoidj</td>
			</tr>
			<tr>
				<td>aodjasoidjasid</td>
				<td>aosdjasoidj</td>
				<td>aosdjasodij</td>
				<td>asoidjasiodj</td>
				<td>asodijasiodj</td>
				<td>asoidjasoidj</td>
			</tr>
			<tr>
				<td>aodjasoidjasid</td>
				<td>aosdjasoidj</td>
				<td>aosdjasodij</td>
				<td>asoidjasiodj</td>
				<td>asodijasiodj</td>
				<td>asoidjasoidj</td>
			</tr>
		</table>
	</div>
	@endsection