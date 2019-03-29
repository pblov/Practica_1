	@extends('layouts.usuario')
	@section('title','Novedades2')
	@section('estilo')
	 <link rel="stylesheet" type="text/css" href="{{asset('css/novedades.css')}}">
	 @endsection
	 @section('contenedor')
	 <div class="nov-header"> </div>


	  <div class="no-container">

                        <img src="img/nov/novedades.jpeg" style="width:100%;height:340px;"alt="">
                <div class="no-titulo">
                     <hr style="border:1px solid gold;">
                        <h1><b> Novedades de Biblioteca Fernando May
                            </b></h1>
                             <hr style="border:1px solid gold;">
                    </div>

            <div class="no-sec1">
                <div class="no-cartas">
                   <img src="{!!asset('images/nov2/nov1.jpg')!!}" alt="">
                    <p> Academia n°2 (2015)</p>
                </div>
                <div class="no-cartas">
                         <img src="{!!asset('images/nov2/nov2.jpg')!!}" alt="">
                        <p style="font-size:13px;"> BIT: Boletín de Ciencia y Técnología (2015:may./jun.)</p>
                </div>
               <div class="no-cartas">
                            <img src="{!!asset('images/nov2/nov3.jpg')!!}" alt="">
                            <p style="font-size:13px;"> Balance Preliminar de las Economías de América Latina y el Caríbe (2015)</p>
                </div>
                <div class="no-cartas">
                         <img src="{!!asset('images/nov2/nov4.jpg')!!}" alt="">
                        <p > Chile forestal (2016:mayo)</p>
                </div>
                <div class="no-cartas">
                        <img src="{!!asset('images/nov2/nov5.jpg')!!}" alt="">
                        <p> Enfermería Clínica n°4 (2016:jul./ago.)

                            </p>
                </div>
                <div class="no-cartas">
                 <img src="{!!asset('images/nov2/nov6.jpg')!!}" alt="">
                        <p> HSEC Magazine (2016:sept.)</p>
                </div>
                <div class="no-cartas">
                        <img src="{!!asset('images/nov2/nov7.jpg')!!}" alt="">
                        <p> Ingeniería y Ciencia (2015:ene./jun.)</p>
                </div>
                <div class="no-cartas">
                       <img src="{!!asset('images/nov2/nov8.jpg')!!}" alt="">
                        <p> 	
                                Induambiente (2015:mar./abr.)</p>
                </div>
                <div class="no-cartas">
                       <img src="{!!asset('images/nov2/nov9.jpg')!!}" alt="">
                        <p> Investiga. TEC (2016:mayo)</p>
                </div>
                <div class="no-cartas">
                       <img src="{!!asset('images/nov2/nov10.jpg')!!}" alt="">
                        <p> Journal of Biosciences (2015:sept.)</p>
                </div>
                <div class="no-cartas">
                       <img src="{!!asset('images/nov2/nov11.jpg')!!}" alt="">
                        <p> Leamos (2016:mayo)

                            </p>
                </div>
                <div class="no-cartas">
                        <img src="{!!asset('images/nov2/nov12.jpg')!!}" alt="">
                        <p> Maderas: Ciencia y Tecnología n°3 (2016)</p>
                </div>
                <div class="no-cartas">
                     <img src="{!!asset('images/nov2/nov13.jpg')!!}" alt="">
                        <p>Manual Ejecutivo Laboral (2016:dic.)</p>
                </div>
                <div class="no-cartas">
                       <img src="{!!asset('images/nov2/nov14.jpg')!!}" alt="">
                        <p> Manual Ejecutivo Tributario (2016:dic.)</p>
                </div>
                <div class="no-cartas">
                        <img src="{!!asset('images/nov2/nov15.jpg')!!}" alt="">
                        <p>Medicine n°14 (2016:jun)</p>
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