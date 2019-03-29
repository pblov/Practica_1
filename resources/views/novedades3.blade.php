	@extends('layouts.general')
	@section('title','Novedades3')
	@section('estilo')
	 <link rel="stylesheet" type="text/css" href="css/novedades.css">
	 @endsection
	 @section('contenedor')
	 <div class="nov-header"> </div>

	      <div class="no-container">

                        <img src="img/nov/novedades.jpeg" style="width:100%;height:340px;"alt="">
                <div class="no-titulo">
                    <hr style="border:1px solid gold; ">
                        <h1><b> Novedades de Biblioteca Marta Colvin
                            </b></h1>
                            <hr style="border:1px solid gold;">
                    </div>

            <div class="no-sec1">
                <div class="no-cartas">
                    <img src="{{('images/nov3/nov1.jpg')}} " alt="">
                    <p> Arquitecturas del Sur (2016:jun.)</p>
                </div>
                <div class="no-cartas">
                        <img src="{{('images/nov3/nov2.jpg')}} " alt="">
                        <p > Boletín urbano (2015:nov.)

                            </p>
                </div>
               <div class="no-cartas">
                           <img src="{{('images/nov3/nov3.jpg')}} " alt="">
                            <p > Cientochenta (2015:ago.)</p>
                </div>
                <div class="no-cartas">
                        <img src="{{('images/nov3/nov4.jpg')}} " alt="">
                        <p >Concepción Construye (2016:abr.)</p>
                </div>
                <div class="no-cartas">
                       <img src="{{('images/nov3/nov5.jpg')}} " alt="">
                        <p> Mensaje (2016:nov.)
                            </p>
                </div>
                <div class="no-cartas">
                       <img src="{{('images/nov3/nov6.jpg')}} " alt="">
                        <p>National Geographic en español (2016:dic.)</p>
                </div>
                <div class="no-cartas">
                       <img src="{{('images/nov3/nov7.jpg')}} " alt="">
                        <p> Patrimonio Cultural (2015:verano)</p>
                </div>
                <div class="no-cartas">
                       <img src="{{('images/nov3/nov8.jpg')}} " alt="">
                        <p> 	
                                PubliMark (2015:ene./feb.)</p>
                </div>
                <div class="no-cartas">
                       <img src="{{('images/nov2/nov9.jpg')}} " alt="">
                        <p> Investiga. TEC (2016:mayo)</p>
                </div>
                <div class="no-cartas">
                        <img src="{{('images/nov2/nov10.jpg')}} " alt="">
                        <p> Journal of Biosciences (2015:sept.)</p>
                </div>
                <div class="no-cartas">
                       <img src="{{('images/nov2/nov11.jpg')}} " alt="">
                        <p> Leamos (2016:mayo)

                            </p>
                </div>
                <div class="no-cartas">
                        <img src="{{('images/nov2/nov12.jpg')}} " alt="">
                        <p> Maderas: Ciencia y Tecnología n°3 (2016)</p>
                </div>
                <div class="no-cartas">
                        <img src="{{('images/nov2/nov13.jpg')}} " alt="">
                        <p>Manual Ejecutivo Laboral (2016:dic.)</p>
                </div>
                <div class="no-cartas">
                        <img src="{{('images/nov2/nov14.jpg')}} " alt="">
                        <p> Manual Ejecutivo Tributario (2016:dic.)</p>
                </div>
                <div class="no-cartas">
                       <img src="{{('images/nov3/nov15.jpg')}} " alt="">
                        <p>Quinchamalí (2016:1er.semestre)</p>
                </div>
            </div>
            <div class="sec2">
                    <div class="no-pagination">
                        <nav aria-label="Page navigation example" style="margin-left:40%; margin-top:5%; margin-bottom:4%;">
                            <ul class="pagination">
                              <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                  <span aria-hidden="true">&laquo;</span>
                                  <span class="sr-only">Previous</span>
                                </a>
                              </li>
                              <li class="page-item active"><a class="page-link" href="#">1</a></li>
                              <li class="page-item"><a class="page-link" href="#">2</a></li>
                              <li class="page-item"><a class="page-link" href="#">3</a></li>
                              <li class="page-item"><a class="page-link" href="#">4</a></li>
                              <li class="page-item"><a class="page-link" href="#">5</a></li>
                              <li class="page-item"><a class="page-link" href="#">6</a></li>
                              <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                  <span aria-hidden="true">&raquo;</span>
                                  <span class="sr-only">Next</span>
                                </a>
                              </li>
                            </ul>
                          </nav>
            </div>

            </div>

         <hr>
        </div>

	 @endsection