	@extends('layouts.usuario')
	@section('title','Novedades')
	@section('estilo')
	 <link rel="stylesheet" type="text/css" href="{{asset('css/novedades.css')}}">

	 @endsection
	 @section('contenedor')


	 <div class="nov-header"> </div>
	       <div class="no-container">

                        
                <div class="no-titulo">
                     <hr style="border:1px solid gold;">
                        <h1><b>Novedades de Biblioteca de Concepción
                            </b></h1>
                             <hr style="border:1px solid gold;">
                    </div>

            <div class="no-sec1">
                <div class="no-cartas">
                    <img src="{!!asset('images/nov/nov1.jpg')!!}" alt="">
                    <p> Anuario estadístico (2017)</p>
                </div>
                <div class="no-cartas">
                       <img src="{!!asset('images/nov/nov2.jpg')!!}" alt="">
                        <p> Agronomía Costarricense v.41: nº2(2018:.jul./dic.)</p>
                </div>
               <div class="no-cartas">
                           <img src="{!!asset('images/nov/nov3.jpg')!!}" alt="">
                            <p> AITIM nº315(2018:sep./oct.)</p>
                </div>
                <div class="no-cartas">
                       <img src="{!!asset('images/nov/nov4.jpg')!!}" alt="">
                        <p> Ambientico nº261(2017:ene./mar.)</p>
                </div>
                <div class="no-cartas">
                       <img src="{!!asset('images/nov/nov5.jpg')!!}" alt="">
                        <p> América Economía nº128(2018:nov./dic.)

                        </p>
                </div>
                
                <div class="no-cartas">
                        <img src="{!!asset('images/nov/nov6.jpg')!!}" alt="">
                        <p> Area nº22(2016:oct.)</p>
                </div>
                <div class="no-cartas">
                       <img src="{!!asset('images/nov/nov7.jpg')!!}" alt="">
                        <p> ARQ n°98(2018:abr.)</p>
                </div>
                <div class="no-cartas">
                       <img src="{!!asset('images/nov/nov8.jpg')!!}" alt="">
                        <p> Arteoficio nº12(2016:primavera)</p>
                </div>
                <div class="no-cartas">
                       <img src="{!!asset('images/nov/nov9.jpg')!!}" alt="">
                        <p> Asora nº138(2018:jul./ago.)</p>
                </div>
                <div class="no-cartas">
                       <img src="{!!asset('images/nov/nov10.jpg')!!}" alt="">
                        <p> Asian Journal of Engineeringnº6(2017:Oct.)</p>
                </div>
                <div class="no-cartas">
                        <img src="{!!asset('images/nov/nov11.jpg')!!}" alt="">
                        <p> Boletín Estadístico nº138(2012)

                            </p>
                </div>
                <div class="no-cartas">
                    <img src="{!!asset('images/nov/nov12.jpg')!!}" alt="">
                        <p> Building and Environment (2013:Feb.)</p>
                </div>
                <div class="no-cartas">
                     <img src="{!!asset('images/nov/nov13.jpg')!!}" alt="">
                        <p> Bit nº121(2018:jul./ago.)</p>
                </div>
                <div class="no-cartas">
                     <img src="{!!asset('images/nov/nov14.jpg')!!}" alt="">
                        <p> Ciencias Sociales, econ., ped. n°3(2013:feb./nov.)</p>
                </div>
                <div class="no-cartas">
                    <img src="{!!asset('images/nov/nov15.jpg')!!}" alt="">
                        <p> Cerne nº3(2013:junho/set.)</p>
                </div>
            </div>
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
         <hr>
        </div>


	 @endsection