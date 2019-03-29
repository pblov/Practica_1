	@extends('layouts.usuario')
	@section('title','Reglamento')
	@section('estilo')
	<link rel="stylesheet" href="{{asset('css/reglamento.css')}}">
	@endsection
	@section('contenedor')



    <div class="re-header"></div>
	<div class="re-contenedor">

        <div class="re-titulo">
                <h3><b> Misión / Visión</b></h3>
        </div>
        <div class="re-mision-vision">
                        <div class="vn">
                 <img src="{!!asset('images/mision.jpeg')!!}" alt="">  
                        </div>
                        <div class="vn" style="background: rgb(255, 255, 166);    border:1px solid rgb(224, 224, 224);box-shadow: 2px 2px 2px grey;
                        ">
                                
                                <p>La misión del Sistema de Bibliotecas de la Universidad del Bío-Bío es apoyar la Docencia, Investigación y Extensión de la Universidad, coordinando acciones para que cada estamento obtenga servicios bibliográficos provistos con oportunidad, equidad y excelencia, en un ambiente de innovación tecnológica, inspirada en los valores universitarios como la reflexión, el pensamiento crítico y la generación de nuevo conocimiento.</p>
                        </div>
                </div>
               
                <div class="re-mision-vision">    
                    <div class="vn" style="margin-top:20px;">
                               <img src="{!!asset('images/vision.jpeg')!!}" alt=""> 
                    </div>

                    <div class="vn"style="margin-top:20px;">
                            
                            <p style="background: rgb(109, 202, 245);    border:1px solid rgb(101, 155, 206);box-shadow: 2px 2px 2px grey;
                            ">
                                            Proyectar el Sistema de Bibliotecas de la Universidad del Bío-Bío como un servicio de excelencia, con un claro liderazgo entre sus pares, favoreciendo que la Universidad sea considerada entre los agentes activos del desarrollo regional, integrada al país y al mundo.
                            </p>
                    </div>
                </div>
            

            <div class="re-titulo"style="margin-top:70px;">
                    <h3><b> Reglamento de Préstamo - Sistema de Biblioteca UBB</b></h3>
            </div> 
            <hr>

            <p>
         El presente reglamento regula en forma general las políticas y procedimientos del préstamo del material bibliográfico de la Universidad del Bío-Bío, en las Bibliotecas de las Sedes Concepción y Chillán y de la Unidad de Programas Especiales de la Facultad de Ciencias Empresariales en Los Ángeles.  </p>

        <button class="re-boton" style="margin-top:30px;">Categorías de Usuario
        </button> 
        <div class="re-ac-contenido">
            <ul id="cat-usuarios">
                <li style="padding-top:40px;">Alumno Regular</li>
                <p>Es toda persona que, reuniendo los requisitos de admisión que la Universidad determina, ha formalizado su matrícula mediante el pago de aranceles y la inscripción de asignaturas y/o actividades contempladas dentro del plan de estudios de una determinada carrera.</p>
                <li>Alumno Memorista</li>
                <p>Es todo alumno de la universidad que prepara su trabajo de tesis, memoria o informe, previo a su titulación.</p>
                <li>Docente e Investigador</li>
                <p>Es toda persona que imparte docencia y/o realiza investigación académica y tiene contrato vigente con la Universidad.</p>
                <li>Personal Administrativo</li>
                <p>Es toda persona que cumple funciones no académicas y tiene contrato vigente con la Universidad.</p>
                <li>Usuario Externo</li>
                <p>Es toda persona que, autorizada individualmente o mediante un convenio, podrá hacer uso de los servicios del Sistema de Bibliotecas conforme a lo estipulado en el Reglamento de Préstamo.</p>
                <li>Usuario Préstamo Interbibliotecario:</li>
                <p>Es toda persona que se beneficia del Convenio de Cooperación Bibliográfica, respaldado por la Comisión Asesora de Bibliotecas y Documentación del Consejo de Rectores de Universidades Chilenas, como también de otras instituciones con las que se mantiene convenio.</p>
            </ul>
        </div>

        <button class="re-boton">Obligaciones de los Usuarios</button> 
        <div class="re-ac-contenido">
                <p style="margin-top:30px;">Los usuarios del Sistema de Bibliotecas de la Universidad del Bío-Bío deberán cumplir los siguientes requisitos en relación a los servicios otorgados:</p>
                <ul style="font-size:15px;">
                    <li>Conservar y devolver el material bibliográfico en las mismas condiciones en que le fue facilitado.</li>
                    <li>Cumplir con los plazos de devolución otorgados por la Biblioteca.</li>
                    <li>Mantener un trato deferente con el personal de las Bibliotecas.</li>
                    <li>Dar buen uso a las instalaciones y cuidar el mobiliario de las Bibliotecas.</li>
                </ul>
        </div>


        <button class="re-boton">Tipo de Préstamos</button> 
        <div class="re-ac-contenido">

            <ul style="margin-top:30px; font-size:15px;">
                <li>Préstamo en Sala</li>
                <li>Préstamo a Domicilio</li>
                <li>Préstamo Interbibliotecario</li>
            </ul>
            <p>Para determinar el tipo de préstamo, el material bibliográfico se define de acuerdo a las siguientes categorías: </p>
            <ul id="tipo-prestamo">
                <li>Colección General</li>
                <p>Son todas aquellas obras (monografías) pertenecientes a la colección general que no tienen restricción de préstamo.</p>
                <li>Colección Diaria</li>
                <p>Son todas aquellas obras (monografías) pertenecientes a la colección general, que por recomendación de los docentes y/o en prevención a una alta demanda, tienen restricción de préstamo.</p>
                <li>Colección de Referencia</li>
                <p>Son todas aquellas obras que por su contenido, particular uso y valor, no se prestan a domicilio.</p>
                <li>Libro en Alta demanda</li>
                <p>Es aquella obra (monografía) perteneciente a la colección general, que por su mayor demanda y por recomendación de los docentes no permite la renovación automática del ítem.</p>
                <li>Publicaciones Seriadas</li>
                <p>Son todas aquellas publicaciones de aparición frecuente en que la información se actualiza en cada número y se hace retroactiva en su conjunto. Se ubican en la Sección Hemeroteca.</p>
            </ul>
            <p>- El préstamo del material bibliográfico que conforman las colecciones de las secciones de Referencia/Hemeroteca y Sala de Estudios Regionales Francisco Nuñez de Pineda y Bascuñan, ubicada en la biblioteca Campus La Casitilla, Sede Chillán, está condicionado a su uso en sala.</p>
            <h3 style="margin-top:40px;"><b> PRÉSTAMOS A DOMICILIO</b> </h3>

            <h5 style="text-align:center;margin-top:30px;">Tabla de préstamo a domicilio</h5>
            <table id="tabla1">
                    <tbody>
                    <tr>
                    <td>Categoria de Usuario</td>
                    <td>Colección</td>
                    <td>Cantidad
                            Normal</td>
                    <td>Cantidad
                            Excepcional</td>
                    <td>Días Plazo
                            Normal</td>
                    <td>Días Plazo 
                            Excepcional</td>
                    </tr>
                    <tr>
                    <td>Alumno Memorista</td>
                    <td>Diaria
                            Referencia
                            General</td>
                    <td>
                    <ul>
                    <li>      1</li>
                    <li>0                 </li>
                    <li>3</li>
                    </ul></td>
                    <td><ul>
                        <li>3</li>
                        <li>2</li>
                        <li>4</li>
                    </ul> </td>
                    <td><ul>
                            <li>1</li>
                            <li>0</li>
                            <li>3</li>
                        </ul> </td>
                    <td><ul>
                            <li>3</li>
                            <li>1</li>
                            <li>15</li>
                        </ul> </td>
                    </tr>
                    <tr>
                    <td>Alumno Memorista</td>
                    <td>Diaria
                            Referencia
                            General</td>
                    <td><ul>
                        <li>1</li>
                        <li>0</li>
                        <li>4</li>
                    </ul></td>
                    <td><ul>
                            <li>3</li>
                            <li>3</li>
                            <li>6</li>
                    </ul></td>
                    <td><ul>
                            <li>1</li>
                            <li>0</li>
                            <li>4</li>
                    </ul></td>
                    <td>
                        <ul>
                                <li>3</li>
                                <li>3</li>
                                <li>20</li>
                        </ul>
                    </td>
                    </tr>
                    <tr>
                            <td>Docente Investigador</td>
                            <td>Diaria
                                    Referencia
                                    General</td>
                            <td><ul>
                                <li>1</li>
                                <li>0</li>
                                <li>5</li>
                            </ul></td>
                            <td><ul>
                                    <li>3</li>
                                    <li>4</li>
                                    <li>8</li>
                            </ul></td>
                            <td><ul>
                                    <li>1</li>
                                    <li>0</li>
                                    <li>3</li>
                            </ul></td>
                            <td>
                                <ul>
                                        <li>4</li>
                                        <li>4</li>
                                        <li>30</li>
                                </ul>
                            </td>
                    </tr>
                    <tr>
                            <td>Personal Administrativo</td>
                            <td>Diaria
                                    Referencia
                                    General</td>
                            <td><ul>
                                <li>1</li>
                                <li>0</li>
                                <li>3</li>
                            </ul></td>
                            <td><ul>
                                    <li>2</li>
                                    <li>2</li>
                                    <li>4</li>
                            </ul></td>
                            <td><ul>
                                    <li>1</li>
                                    <li>0</li>
                                    <li>3</li>
                            </ul></td>
                            <td>
                                <ul>
                                        <li>4</li>
                                        <li>1</li>
                                        <li>15</li>
                                </ul>
                            </td>
                    </tr>
                    <tr>
                            <td>
                                    Usuario Externo</td>
                            <td>Diaria
                                    Referencia
                                    General</td>
                            <td><ul>
                                <li>1</li>
                                <li>0</li>
                                <li>3</li>
                            </ul></td>
                            <td><ul>
                                    <li>2</li>
                                    <li>0</li>
                                    <li>4</li>
                            </ul></td>
                            <td><ul>
                                    <li>1</li>
                                    <li>0</li>
                                    <li>3</li>
                            </ul></td>
                            <td>
                                <ul>
                                        <li>4</li>
                                        <li>0</li>
                                        <li>15</li>
                                </ul>
                            </td>
                    </tr>
                    <tr>
                            <td>Usuario Interbibliotecario (PIB)</td>
                            <td>Diaria
                                    Referencia
                                    General</td>
                            <td><ul>
                                <li>0</li>
                                <li>0</li>
                                <li>3</li>
                            </ul></td>
                            <td><ul>
                                    <li>0</li>
                                    <li>0</li>
                                    <li>4</li>
                            </ul></td>
                            <td><ul>
                                    <li>0</li>
                                    <li>0</li>
                                    <li>8</li>
                            </ul></td>
                            <td>
                                <ul>
                                        <li>0</li>
                                        <li>0</li>
                                        <li>15</li>
                                </ul>
                            </td>
                    </tr>
                    </tbody>
                </table>

        </div>


        <button class="re-boton">Infracciones</button> 
        <div class="re-ac-contenido">
            <p style="margin-top:30px;">Serán consideradas infracciones al presente reglamento las siguientes situaciones: </p>
            <ul style="font-size:15px;list-style-type:none;">
                <li>- El retraso en la devolución del material bibliográfico.</li>
                <li>- La no devolución del material solicitado para su uso en sala.</li>
                <li>- El no retiro del material bibliográfico reservado en línea.</li>
                <li>- El deterioro del material bibliográfico solicitado.</li>
                <li>- La descortesía grave con los funcionarios de las Bibliotecas.</li>
                <li>- La provocación intencional de daños a las Bibliotecas.</li>
            </ul>
        </div>

        <button class="re-boton">Suspensiones</button> 
         <div class="re-ac-contenido">
                <p style="margin-top:30px;"> El incumplimiento de los plazos en la devolución del material bibliográfico dará motivo, según su categoría, a días de suspensión de los servicios otorgados por las Bibliotecas, de acuerdo a la siguiente tabla:
                    </p>
                
    
                    <table>
                            <tbody>
                            <tr>
                            <td>Categoría de Libro</td>
                            <td>Días de
                                    Atraso</td>
                            <td>Días de
                                    Suspensión</td>
                            </tr>
                            <tr>
                                    
                            <td>Colección Diaria</td>
                            <td><ul>
                                <li>1</li>
                                <li>2</li>
                                <li>3</li>
                                <li>4</li>
                                <li>5</li>
                                <li>6</li>
                                <li>10</li>
                                <li>20</li>
                                <li>30</li>
                                <li>60</li>
                                <li>120</li>
                                <li>240</li>
                                <li>365</li>
                            </ul></td>
                            <td><ul>             
                                <li>2</li>
                                <li>7</li>
                                <li>14</li>
                                <li>21</li>
                                <li>28</li>
                                <li>35</li>
                                <li>60</li>
                                <li>90</li>
                                <li>120</li>
                                <li>150</li>
                                <li>180</li>
                                <li>210</li>
                                <li>365</li>
                                    </ul> </td>
    
                            </tr>
                            <tr>
                            <td>Colección General</td>
                            <td><ul>             
                                    <li>1</li>
                                    <li>2</li>
                                    <li>3</li>
                                    <li>4</li>
                                    <li>5</li>
                                    <li>6</li>
                                    <li>10</li>
                                    <li>20</li>
                                    <li>30</li>
                                    <li>60</li>
                                    <li>120</li>
                                    <li>240</li>
                                    <li>365</li>
                                        </ul> </td>
                                        <td><ul>             
                                                <li>1</li>
                                                <li>2</li>
                                                <li>3</li>
                                                <li>4</li>
                                                <li>5</li>
                                                <li>6</li>
                                                <li>14</li>
                                                <li>21</li>
                                                <li>28</li>
                                                <li>90</li>
                                                <li>150</li>
                                                <li>280</li>
                                                <li>365</li>
                                                    </ul> </td>
                            </tr>
                            <tr>
                            <td>Colección Referencia y Hemeroteca</td>
                            <td><ul>
                                <li>1</li>
                                <li>2</li>
                                <li>3</li>
                                <li>4</li>
                                <li>5</li>
                                <li>6</li>
                                <li>10</li>
                            </ul></td>
                            <td><ul>
                                    <li>30</li>
                                    <li>60</li>
                                    <li>90</li>
                                    <li>120</li>
                                    <li>150</li>
                                    <li>180</li>
                                    <li>365</li>
                                </ul></td>
                            </tr>

                            </tbody>
                            </table>
                        <p style="margin-top:20px;"> En caso de extravío del material bibliográfico, el usuario deberá dar aviso inmediato a la Biblioteca. Tendrá un plazo de 15 días para reponer el mismo título, durante el cual podrá utilizar los servicios que ofrecen las Bibliotecas; sin embargo, si vencido el plazo y por motivos plenamente justificados no ha podido hacer la reposición, podrá solicitar renovación de plazo. </p>
        </div>
   
        </div>
    <script src="{{asset('js/reglamento.js')}}"></script>

	@endsection
