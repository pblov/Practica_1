@extends('layouts.usuario')
	
	@section('title','Bibliotecas')
	@section('estilo')   
	<link rel="stylesheet" href="{{asset('css/bibliotecas2.css')}}">
	@endsection
	@section('contenedor')
		<!--------------------intro------------------>

        <div class="bi-header"></div>
        <div class="bi-contenedor-secciones">
            
                 <div class="bi-titulo">
            <h3 ><b>Dirección de Bibliotecas</b> </h3>
        </div>
        <div class="bi-seccion1">
        <div class="bi-direccion">
              
            <h5><b>DIRECTORA</b> </h5>
            <hr>
            <ul>
                <li>Mónica Isabel Erazo Alcayala</li>
                <li>Bibliotecóloga</li>
                <li>Fono: +56 41 3111252 / +56 42 2463058</li>
                <li>Avenida Collao 1202 - Concepción / Chillán</li>
                <li>E-mail: merazo@ubiobio.cl</li>
            </ul>                

                 
        </div>
        <div class="bi-direccion">
                <h5><b>SECRETARIA</b></h5>
                <hr>
                <ul>
                    <li>Mónica Lorena Escalona González</li>
                    <li>Secretaria Ejecutiva</li>
                    <li>Fono: +56 41 3111251</li>
                    <li>Avenida Collao 1202 - Concepción</li>
                    <li>E-mail: mescalon@ubiobio.cl</li>
                </ul>    
        </div>
        <div class="bi-direccion">

                <h5><b>ENCARGADO INFORMÁTICO</b> </h5>
                <hr>
                <ul>
                    <li>Sergio Ernesto Carrasco Pincheira</li>
                    <li>Ingeniero de Ejecución en Computación e Informática</li>
                    <li>Fono: +56 41 3111250</li>
                    <li>Avenida Collao 1202 - Concepción</li>
                    <li>E-mail: scarrasc@ubiobio.cl</li>
                </ul>          
                
        </div>
        </div>
<!-----------------cartas------------------->
        <div class="bi-titulo" >
            <h3> <b> Bibliotecas UBB</b></h3>
        </div>
        <div class="bi-seccion2">
            <a href="#biblio1" style="text-decoration: none;">
                    <div class="bi-cartas">
                
                           <img src="{!!asset('images/biblio1.jpg')!!}" alt="">  
                            <h6>Biblioteca Hilario Hernandez Gurruchaga</h6>
                            <p>Campus Concepción</p>
                    </div>
            </a>

            <a href="#biblio2" style="text-decoration: none;">
                    <div class="bi-cartas">
                
                            <img src="{!!asset('images/biblio2.jpg')!!}" alt="">  
                            <h6>Biblioteca Campus La Castilla</h6>
                            <p>Sede Chillán</p>
                    </div>
            </a>

            <a href="#biblio3" style="text-decoration: none;">
                    <div class="bi-cartas">
                
                            <img src="{!!asset('images/biblio3.jpg')!!}" alt="">  
                            <h6>Biblioteca Campus Fernando May</h6>
                            <p>Sede Chillán</p>
                    </div>
            </a>
            
            <a href="#biblio4" style="text-decoration: none;">
                    <div class="bi-cartas">
                
                            <img src="{!!asset('images/biblio4.jpg')!!}" alt="">  
                            <h6>Biblioteca Marta Colvin</h6>
                            <p>Campus Andrés Bello, Chillán</p>
                    </div>
            </a>

            
            <a href="#biblio5" style="text-decoration: none;">
                    <div class="bi-cartas">
                
                            <img src="{!!asset('images/biblio5.jpg')!!}" alt="">  
                            <h6>Biblioteca Unidad de Programas Especiales</h6>
                            <p>FACE, Los Ángeles</p>
                    </div>
            </a>

            
        </div>
<!-------------Descripcion biblioteca 1---------------------->
        <div  id="biblio1" class="bi-titulo"style="margin-top:100px;">
                <h3 style="" ><b> Biblioteca Hilario Hernandez Gurruchaga </b> </h3>
        </div>

        <div class="bi-seccion3">
            <div class="bi-horario">
                        <header><h5><b>Horario de Atención </b></h5></header>
                    <table>
                            <tr>
                            <td>Lunes a viernes</td>
                            <td>08:30 - 20:00 Hrs</td>
                            </tr>
                            <tr>
                            <td>Sábados</td>
                            <td>09:00 - 16:00 Hrs</td>
                            </tr>
                    </table>
                    <header><h5><b>Horario Salas de Estudio </b></h5></header>
                    <table>
                            <tr>
                            <td><b>[Sala de Estudio Biblioteca]</b>   Lunes a Viernes</td>
                            
                            <td> 08:30 - 20:00 Hrs. </td>
                            </tr>
                            <td> Sábado</td>
                            
                            <td>09:00 - 16:00 Hrs.</td>
                            </tr>
                            <tr>
                            <td><b>[Edificio Gantes]</b>   Lunes a Domingo</td>
                            <td>08:00 AM - 07:00 AM</td>
                            </tr>
                            <tr>
                                    <td><b>[Sala AOX]</b>   Lunes a Domingo</td>
                                    <td>08:00 AM - 07:00 AM</td>
                            </tr>
                    </table>
                    <header><h5><b>Horario Salas Multipropósito </b></h5></header>
                    <table>
                            <tr>
                            <td><b>[Sala Multipropósito I,II,III]</b>  Lunes a Viernes</td>
                            <td>08:30 - 20:00 Hrs</td>
                            </tr>
                            <tr>
                            <td>Sábados</td>
                            <td>09:00 - 16:00 Hrs</td>
                            </tr>
                    </table>
            </div>
            <div class="bi-map">
                        <header><h5><b>Ubicación </b></h5></header>
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12775.335392476627!2d-73.0132711!3d-36.8225012!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4c8fe1808ebdd3f9!2sUniversidad+del+B%C3%ADo-B%C3%ADo!5e0!3m2!1ses!2scl!4v1552673638179" width="100%" height="60%" frameborder="0" style="border:0" allowfullscreen></iframe>
                <hr>
                <span style="font-size:15px;">Dirección: Avenida Collao Nº 1202 - Casilla 5C

                        CONCEPCIÓN</span>
            </div>
        </div>

        <header id="contacto-titulo"><h4> <b> Contacto</b></h4></header>

        <div class="bi-seccion31">
            <div class="bi-contacto">
                    <h6>Coordinadora</h6>
                    <hr>
                    <ul>
                            <li>Marcela Paz Araya Leüpin</li>
                            <li>Bibliotecóloga</li>
                            <li>Fono: +56 41 3111099</li>
                            <li>e-mail: mparaya@ubiobio.cl</li>

                    </ul>                
            </div>

            <div class="bi-contacto">
                    <h6>Gestión Bibliográfica y Programa Cybertesis</h6>
                    <hr>
                    <ul>
                            <li>Tatiana del Carmen Morales Vergara</li>
                            <li>Bibliotecóloga</li>
                            <li>Fono: +56 41 3111253</li>
                            <li>e-mail: tmorales@ubiobio.cl
                           </li>

                    </ul>  
             </div>  
             <div class="bi-contacto">
                    <h6>Referencia / Hemeroteca

                            Alfabetización Informacional</h6>
                    <hr>
                    <ul>
                            <li>Romina Beatriz Bruna Rodríguez</li>
                            <li>Bibliotecóloga</li>
                            <li>
                                    Fono: +56 41 3111616</li>
                            <li>e-mail: rbruna@ubiobio.cl</li>

                    </ul>  
             </div>   
             <div class="bi-contacto">
                    <h6> Préstamo Interbibliotecario</h6>
                    <hr>
                    <ul>
                            <li>Alejandro Riquelme Concha</li>
                            <li>Técnico en Bibliotecología</li>
                            <li>Fono: +56 41 3111616</li>
                            <li>e-mail: biblio@ubiobio.cl</li>
                    </ul>  
             </div>   

        </div>
<!----------Descripcion biblioteca 2-------------------------->
        <div  id="biblio2" class="bi-titulo" style="margin-top:100px;">
                <h3 style=""><b>Biblioteca Campus La Castilla</b> </h3>
        </div>
        <div class="bi-seccion3">
                        <div class="bi-horario">
                                        <header><h5><b>Horario de Atención </b></h5></header>
                                <table>
                                        <tr>
                                        <td>Lunes a viernes</td>
                                        <td>08:30 - 20:00 Hrs</td>
                                        </tr>
                                        <tr>
                                        <td>Sábado</td>
                                        <td>10:00 - 17:00 Hrs</td>
                                        </tr>
                                </table>
                                <header><h5><b>Horario Salas de Estudio </b></h5></header>
                                <table>
                                        <tr>
                                        <td><b>[Sala de Estudio Biblioteca]</b>   Lunes a Domingo</td>
                                        <td> 08:30 - 22:00 Hrs. </td>
                                        </tr>

                                        <tr>
                                        <td><b>[Sala de Estudio La Castilla I,II]</b>   Lunes a Viernes</td>
                                        <td>08:30 - 20:30 Hrs.</td>
                                        </tr>
                                        <tr></tr>
                                        <td> Sábado </td>
                                        <td>08:30 - 17:00 Hrs. </td>
                                        <tr>
                                                <td><b>[Estudio La Castilla III (Edificio Depto. Ciencias Sociales)]</b> Lunes a Viernes</td>
                                                 <td>08:30 - 20:00 Hrs.</td>
                                        </tr>
                                        <tr>
                                                <td><b>[Francisco Núñez de Pineda y Bascuñán (Sala Pineda)]</b>   Lunes a Viernes</td>
                                                <td>08:30 - 20:00 Hrs.</td>
                                        </tr>
                                        <tr>
                                                        <td>Sábado</td>
                                                        <td>10:00 - 17:00 Hrs.</td>
                                        </tr>
                                </table>
                                <hr>
                                Documentos Relacionados (PDF): 
                                     <span style="font-size:13px;">   <a href="http://werken.ubiobio.cl/html/images/s_pineda/Documento%20Directora%20de%20Bibliotecas%20UBB.pdf" 
                                        > <li style="list-style-type:none;"> Documento Directora de Bibliotecas</li></a>
                                        <a href="http://werken.ubiobio.cl/html/images/s_pineda/Rese%C3%B1a%20Historica.pdf"> <li style="list-style-type:none;"> Reseña Histórica</li></a>
                                    </span> 
                               
                        </div>
                        <div class="bi-map">
                                        <header><h5><b>Ubicación </b></h5></header>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12810.504723788092!2d-72.1177896!3d-36.6113113!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3f3db20addd77238!2sUniversidad+del+Bio+Bio%2C+Campus+La+Castilla!5e0!3m2!1ses!2scl!4v1552703005644" width="100%" height="60%" frameborder="0" style="border:0" allowfullscreen></iframe>
                            <hr>
                            <ul>
                                    <li>Dirección: Avenida Brasil Nº 1180 - Casilla Nº 447 CHILLÁN</li>
                                    <li>Fono: +56 42 2463433</li>
                                    <li>Fax: +56 42 2463518</li>
                            </ul>
                        </div>
        </div>
        <header id="contacto-titulo"><h4> <b> Contacto</b></h4></header>
        
        <div class="bi-seccion32">
                        <div class="bi-contacto32">
                                <h6>Jefe de Biblioteca</h6>
                                <hr>
                                <ul>
                                        <li>Fono: +56 42 2463432</li>
                                        <li>Fax +56 42 2463518</li>
                                </ul>                
                        </div>
            
                        <div class="bi-contacto32">
                                <h6>Secretaria</h6>
                                <hr>
                                <ul>
                                        <li>María Verónica Fuentealba Roble</li>
                                        <li>Secretaria Administrativa</li>
                                        <li>Fono: +56 42 2463433</li>
                                        <li>e-mail: vfuentealba@ubiobio.cl
                                       </li>
            
                                </ul>  
                         </div>  
                         <div class="bi-contacto32">
                                <h6>Referencia / Hemeroteca
            
                                        Alfabetización Informacional</h6>
                                <hr>
                                <ul>
                                        <li>Carolina Alejandra Soto Muñoz</li>
                                        <li>Bibliotecóloga</li>
                                        <li>
                                                        Fono: +56 42 2463475</li>
                                        <li>e-mail: csoto@ubiobio.cl</li>
            
                                </ul>  
                         </div>    
            
        </div>
<!----------------biblio 3--------------------------------->
        <div  id="biblio3" class="bi-titulo" style="margin-top:100px;">
                <h3 style=""><b>Biblioteca Campus Fernando May</b> </h3>
        </div>

        <div class="bi-seccion3">
                        <div class="bi-horario">
                                        <header><h6><b>Horario de Atención </b></h6></header>
                                <table>
                                        <tr>
                                        <td>Lunes a viernes</td>
                                        <td>08:30 - 20:00 Hrs</td>
                                        </tr>
                                        <tr>
                                        <td>Sábado</td>
                                        <td>10:00 - 17:00 Hrs</td>
                                        </tr>
                                </table>
                                <header style="margin-top:10px;"><h6><b>Horario Salas de Estudio </b></h6></header>
                                <table>
                                        <tr>
                                        <td><b>[Sala de Estudio Biblioteca]</b>   Lunes a Viernes</td>
                                        <td> 08:30 - 20:00 Hrs. </td>
                                        </tr>
                                         <tr>
                                        <td>Sábado</td>
                                        <td> 10:00 - 17:00 Hrs. </td>
                                        </tr>

                                        <td><b>[Sala de Estudio Fernando May I,II]</b>   Lunes a Domingo (**)</td>
                                        <td>08:30 - 07:30 AM</td>
                                        </tr>
                                </table>
                                <header style="margin-top:10px;"><h6><b>Horario Salas Multipropósito </b></h6></header>
                                <table> 
                                        <td><b>[Sala Multipropósito I]</b>   Lunes a Viernes</td>
                                        <td>08:30 - 20:00 Hrs.</td>
                                        </tr>
                                        <td>Sábado</td>
                                        <td>10:00 – 17:00 Hrs.</td>
                                        </tr>


                                </table>
                                <hr>
                                <span style="font-size:12px;">(**) Si desea solicitar el uso de una de estas salas de estudio, en un horario que no coincida con el de atención de la biblioteca, deberá contactarse previamente al Fono: 42 2463111.</span>
                        </div>
                        <div class="bi-map">
                                        <header><h5><b>Ubicación </b></h5></header>
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3202.951000161267!2d-72.07933176299245!3d-36.60348915947078!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9668d62709e7c8f7%3A0xe2b4d7fae79169d3!2zQXYuIEFuZHLDqXMgQmVsbG8gNzIwLCBOwrogNDQ3LCBDaGlsbGFuLCBDaGlsbMOhbiwgUmVnacOzbiBkZWwgQsOtbyBCw61v!5e0!3m2!1ses!2scl!4v1552772795368" width="100%" height="67%" frameborder="0" style="border:0" allowfullscreen></iframe>
                            <hr>
                            <span style="font-size:15px;">Avda. Andrés Bello N° 720 - Casilla Nº 447

                                        CHILLÁN
                                        
                                         </span>
                        </div>
        </div>
        <header id="contacto-titulo"><h4> <b> Contacto</b></h4></header>

        <div class="bi-seccion32">
                <div class="bi-contacto32">
                        <h6>Jefe de Biblioteca</h6>
                        <hr>
                        <ul>
                                <li>Mónica Isabel Erazo Alcayala </li>
                                <li>Bibliotecóloga </li>
                                <li>Fono: +56 42 2463058</li>
                                <li>e-mail: merazo@ubiobio.cl</li>
                        </ul>                
                </div>
    
                <div class="bi-contacto32">
                        <h6>Secretaria</h6>
                        <hr>
                        <ul>
                                <li>Maritza Alejandra Leiva San Martín</li>
                                <li>Secretaria de Gerencia</li>
                                <li>Fono: +56 42 2463111</li>
                                <li>e-mail: mleiva@ubiobio.cl</li>
                                <li>Encargada Préstamo Interbibliotecario</li>
    
                        </ul>  
                 </div>  
                 <div class="bi-contacto32">
                        <h6>Referencia / Hemeroteca
    
                                Alfabetización Informacional</h6>
                        <hr>
                        <ul>
                                <li>Felipe Soto Schlegel</li>
                                <li>Bibliotecólogo</li>
                                <li>
                                                Fono: +56 42 2463019</li>
                                <li>e-mail: fsoto@ubiobio.cl</li>
    
                        </ul>  
                 </div>    
    
</div>
<!----------------biblio 4----------------------------
-->
<div id="biblio4" class="bi-titulo" style="margin-top:100px;">
                <h3 style=""><b>Biblioteca Marta Colvin</b> </h3>
</div>
        <div class="bi-seccion3">
                        <div class="bi-horario">
                                        <header><h5><b>Horario de Atención </b></h5></header>
                                <table>
                                        <tr>
                                        <td>Lunes a viernes</td>
                                        <td>08:45 - 13:00 Hrs</td>
                                        </tr>
                                        <tr>
                                        <td></td>
                                        <td>14:30 - 18:30 Hrs</td>
                                        </tr>
                                </table>
                                <header><h5><b>Horario Salas Multipropósito </b></h5></header>
                                <table> 
                                        <td><b>[Sala Multipropósito I (Edificio "E" Sector Andrés Bello)]</b> Lunes a Viernes</td>
                                        <td>08:45 – 18:00 Hrs.</td>
                                </table>
                                <header id="contacto-titulo"><h5> <b> Contacto</b></h5></header>
                                <h6 style="padding-top:30px;"> Encargada </h6>
                                <hr>
                                <ul style="list-style-type:none;">
                                        <li style="font-size:13px;">Emperatriz del Carmen Nova Bustos</li>
                                        <li style="font-size:13px;padding-top:10px;">Asistente de Biblioteca</li>
                                        <li style="font-size:13px;padding-top:10px;">e-mail: enova@ubiobio.cl
                                                </li>
                                </ul>
                        
                        </div>

                        <div class="bi-map">
                                        <header><h5><b>Ubicación </b></h5></header>
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3202.951000161267!2d-72.07933176299245!3d-36.60348915947078!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9668d62709e7c8f7%3A0xe2b4d7fae79169d3!2zQXYuIEFuZHLDqXMgQmVsbG8gNzIwLCBOwrogNDQ3LCBDaGlsbGFuLCBDaGlsbMOhbiwgUmVnacOzbiBkZWwgQsOtbyBCw61v!5e0!3m2!1ses!2scl!4v1552772795368" width="100%" height="73%" frameborder="0" style="border:0" allowfullscreen></iframe>
                            <hr>
                            <span style="font-size:15px;">Avda. Andrés Bello N° 720 - Casilla Nº 447

                                        CHILLÁN
                                        
                                         </span>
                        </div>
        </div>

<!--------------------------------------------->
<div id="biblio5" class="bi-titulo" style="margin-top:100px;">
                <h3 style=""><b>Biblioteca Unidad de Programas Especiales</b> </h3>
        </div>

        <div class="bi-seccion3" style="margin-bottom:100px;">
                <div class="bi-horario">
                                <header><h5><b>Horario de Atención </b></h5></header>
                        <table>
                                <tr>
                                <td>Lunes a viernes</td>
                                <td>18:30 - 22:30 Hrs</td>
                                </tr>
                                <tr>
                                <td>Sábado</td>
                                <td>10:00 - 12:00 Hrs</td>
                                </tr>
                        </table>

                        <header id="contacto-titulo"><h5> <b> Contacto</b></h5></header>
                        <h6 style="padding-top:30px;"> Encargada </h6>
                        <hr>
                        <ul style="list-style-type:none;">
                                <li style="font-size:13px;">Bernardita Baeza Rubilar</li>
                                <li style="font-size:13px;padding-top:10px;">Técnico en Bibliotecología</li>
                                <li style="font-size:13px;padding-top:10px;">e-mail: bbaeza@ubiobio.cl
                                        </li>
                                        <li style="font-size:13px;padding-top:10px;">Fono: +56 43 2329899
                                                </li>
                                        
                        </ul>
                
                </div>

                <div class="bi-map">
                                <header><h5><b>Ubicación </b></h5></header>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3166.305371906008!2d-72.35137548469095!3d-37.47711957981456!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x966bdd4b60c52ff7%3A0xb36d94376d646ec5!2sPatricio+Lynch+158%2C+Los+Angeles%2C+Los+%C3%81ngeles%2C+Regi%C3%B3n+del+B%C3%ADo+B%C3%ADo!5e0!3m2!1ses!2scl!4v1552803023197" width="100%" height="67%" frameborder="0" style="border:0" allowfullscreen></iframe>
                    <hr>
                    <span style="font-size:15px;">
                        
                        Dirección: Patricio Lynch  N°158, LOS ÁNGELES
                                 </span>
                </div>
</div>



        </div>
       
<!--------------------------------------------->

	@endsection




        
