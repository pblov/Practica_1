	@extends('layouts.general')
	@section('title','Novedades1')
	@section('estilo')
	 <link rel="stylesheet" type="text/css" href="css/novedades.css">
	 @endsection
	 @section('contenedor')

<div class="nov-header"> </div>
	   <div class="no-container">

                        <img src="img/nov/novedades.jpeg" style="width:100%;height:340px;"alt="">
                <div class="no-titulo">
                   <hr style="border:1px solid gold;">
                        <h1><b>Novedades de Biblioteca La Castilla
                            </b></h1>
                             <hr style="border:1px solid gold;">
                    </div>

            <div class="no-sec1">
                <div class="no-cartas">
                    <img src="{{('images/nov1/nov1.jpg')}}" alt="">
                    <p> Acta literaria nº52(2016:1ºsemestre)</p>
                </div>
                <div class="no-cartas">
                       <img src="{{('images/nov1/nov2.jpg')}}" alt="">
                        <p> Akadémeia v.13:nº2(2015:dic.)</p>
                </div>
               <div class="no-cartas">
                           <img src="{{('images/nov1/nov3.jpg')}}" alt="">
                            <p> Alpha nº39(2014:dic.)</p>
                </div>
                <div class="no-cartas">
                       <img src="{{('images/nov1/nov4.jpg')}}" alt="">
                        <p> Almanaque mundial (2012)</p>
                </div>
                <div class="no-cartas">
                        <img src="{{('images/nov1/nov5.jpg')}}" alt="">
                        <p> Anales del Instituto de la Patagonia v.43:nº2(2015)

                            </p>
                </div>
                <div class="no-cartas">
                        <img src="{{('images/nov1/nov6.jpg')}}" alt="">
                        <p> Anales del museo de historia natural de Valparaíso nº28(2015)</p>
                </div>
                <div class="no-cartas">
                        <img src="{{('images/nov1/nov7.jpg')}}" alt="">
                        <p> Andean geology v.38:nº2(2011:july)</p>
                </div>
                <div class="no-cartas">
                        <img src="{{('images/nov1/nov8.jpg')}}" alt="">
                        <p> 	
                                Anuario estadístico (Consejo de Rectores) (2011)</p>
                </div>
                <div class="no-cartas">
                        <img src="{{('images/nov1/nov9.jpg')}}" alt="">
                        <p> Apuntes de teatro nº139(2014)</p>
                </div>
                <div class="no-cartas">
                        <img src="{{('images/nov1/nov10.jpg')}}" alt="">
                        <p> Arquitecturas del sur v.34:nº49(2016:jun.))</p>
                </div>
                <div class="no-cartas">
                        <img src="{{('images/nov1/nov11.jpg')}}" alt="">
                        <p> Atenea nº513(2016:1ºsemestre)

                            </p>
                </div>
                <div class="no-cartas">
                        <img src="{{('images/nov1/nov12.jpg')}}" alt="">
                        <p> Boletín Antártico Chileno v.34:nº1(2015)</p>
                </div>
                <div class="no-cartas">
                        <img src="{{('images/nov1/nov13.jpg')}}" alt="">
                        <p> Boletín urbano nº32(2015:nov.)</p>
                </div>
                <div class="no-cartas">
                       <img src="{{('images/nov1/nov14.jpg')}}" alt="">
                        <p> Calpe y abyla nº8(2012:oct.)</p>
                </div>
                <div class="no-cartas">
                        <img src="{{('images/nov1/nov15.jpg')}}" alt="">
                        <p>Capital nº341(2013:ene./feb.:25/21)</p>
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