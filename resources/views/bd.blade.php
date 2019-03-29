	@extends('layouts.general')
	@section('title','Bases de Datos')
	@section('estilo')
	<link rel="stylesheet" type="text/css" href="css/bd.css">
	@endsection
	@section('contenedor')
	
	<div class="bd-header"></div>
	<div class="bd-welcome"><p>El Sistema de Bibliotecas de la Universidad del Bio-Bio tiene a disposición una gran cantidad de información la cual es administrada y guardada en multiples Bases de Datos para que el estudiante pueda recopilar variados tipos de informacion de manera sencilla</p></div>
	<hr class="bd-lane">
	<div class="bd-secciones">
		<div class="bd-seccion">
			<div class="bd-title"><h3>Bases de Datos</h3></div>
			<br>
			<div class=" bd-link"><a href="http://ezproxy.ubiobio.cl:2048/login?url=http://apps.webofknowledge.com/">Web of Science</a><i class="fas fa-arrow-left"></i></div>
			<div class=" bd-link"><a href="http://ezproxy.ubiobio.cl:2048/login?url=https://jcr.incites.thomsonreuters.com/">JCR</a><i class="fas fa-arrow-left"></i></div>
			<div class=" bd-link"><a href="http://ezproxy.ubiobio.cl:2048/login?url=https://www.scopus.com/">SCOPUS</a><i class="fas fa-arrow-left"></i></div>
			<div class=" bd-link"><a href="http://ezproxy.ubiobio.cl:2048/login?url=https://search.proquest.com/pqdtglobal/dissertations/fromDatabasesLayer?accountid=166654">PQ Dissertations & theses Global</a><i class="fas fa-arrow-left"></i></div>
			<div class=" bd-link"><a href="http://ezproxy.ubiobio.cl:2048/login?url=http://search.ebscohost.com/">ABSCO</a><i class="fas fa-arrow-left"></i></div>
			<div class=" bd-link"><a href="http://ezproxy.ubiobio.cl:2048/login?url=https://proview.thomsonreuters.com/library.html?sponsor=IPUBB-1">IFRS</a><i class="fas fa-arrow-left"></i></div>
			<div class=" bd-link"><a href="http://ezproxy.ubiobio.cl:2048/login?url=https://mathscinet.ams.org/">MathSciNet</a><i class="fas fa-arrow-left"></i></div>
			<div class=" bd-link"><a href="http://ezproxy.ubiobio.cl:2048/login?url=https://www.tandfonline.com/">Taylor & Francis Online</a><i class="fas fa-arrow-left"></i></div>
			
			
		</div>
		<div class="bd-seccion" >
			<div class="bd-title" style="background: #FFCC33;"><h3>Bases de Datos BEIC</h3></div>
			
			<br>
			<div class=" bd-link"><a href="http://ezproxy.ubiobio.cl:2048/login?url=https://www.tandfonline.com/">American Chemical Society</a><i class="fas fa-arrow-left"></i></div>
			<div class=" bd-link"><a href="https://www.annualreviews.org">Anual Reviews</a><i class="fas fa-arrow-left"></i></div>
			<div class=" bd-link"><a href="http://www.nature.com/index.html">Nature Publishing Group</a><i class="fas fa-arrow-left"></i></div>
			<div class=" bd-link"><a href="https://www.academic.oup.com">Oxford University Press</a><i class="fas fa-arrow-left"></i></div>
			<div class=" bd-link"><a href="http://www.sciencemag.org/magazine">Science</a><i class="fas fa-arrow-left"></i></div>
			<div class=" bd-link"><a href="https://www.sciencedirect.com/browse/journals-and-books">Science Direct</a><i class="fas fa-arrow-left"></i></div>
			<div class=" bd-link"><a href="https://link.springer.com">Springer</a><i class="fas fa-arrow-left"></i></div>
			<div class=" bd-link"><a href="http://onlinelibrary.wiley.com">Wiley Blackwell</a><i class="fas fa-arrow-left"></i></div>
			

		</div>
		<div class="bd-seccion" >
			<div class="bd-title" style="background: #FF3333;"><h3>Bases de Datos de Acceso Libre</h3></div>
			
			<br>
			<div class="bd-link"><a href="https://agricola.nal.usda.gov/webvoy.htm">Agricola</a><i class="fas fa-arrow-left"></i></div>
			<div class="bd-link"><a href="http://dialnet.unirioja.es">Dialnet</a><i class="fas fa-arrow-left"></i></div>
			<div class="bd-link"><a href="https://www.ncbi.nlm.nih.gov/pubmed">PUBMED</a><i class="fas fa-arrow-left"></i></div>
			<div class="bd-link"><a href="http://regional.bvsalud.org">BVS</a><i class="fas fa-arrow-left"></i></div>
			<div class="bd-link"><a href="http://regional.bvsalud.org">DOAJ</a><i class="fas fa-arrow-left"></i></div>
			<div class="bd-link"><a href="http://www.redalyc.org">Redalyc</a><i class="fas fa-arrow-left"></i></div>
			<div class="bd-link"><a href="https://www.clacso.org.ar">Clacso</a><i class="fas fa-arrow-left"></i></div>
			<div class="bd-link"><a href="http://www.epistemonikos.org/es/">Espistemonikos</a><i class="fas fa-arrow-left"></i></div>
			<div class="bd-link"><a href="http://www.epistemonikos.org/es/">SciELO</a><i class="fas fa-arrow-left"></i></div>
			<div class="bd-link"><a href="http://revistas.csic.es">CSIC</a><i class="fas fa-arrow-left"></i></div>
			<div class="bd-link"><a href="https://www.latindex.org/latindex/inicio">Latindex</a><i class="fas fa-arrow-left"></i></div>
			<div class="bd-link"><a href="https://www.jstage.jst.go.jp/browse/">J-STAGE</a><i class="fas fa-arrow-left"></i></div>
			
		</div>
		<div class="bd-seccion">
			<div class="bd-title"><h3>e-BD con Acceso Remoto</h3></div>
			
			<br>
			<div class="bd-link"><a href="http://ezproxy.ubiobio.cl:2048/login?url=https://www.annualreviews.org/">Annual Review</a><i class="fas fa-arrow-left"></i></div>
			<div class="bd-link"><a href="http://ezproxy.ubiobio.cl:2048/login?url=http://www.webofknowledge.com">ISI Web of Science</a><i class="fas fa-arrow-left"></i></div>
			<div class="bd-link"><a href="http://ezproxy.ubiobio.cl:2048/login?url=http://search.ebscohost.com/login.aspx">EBSCOhost Web</a><i class="fas fa-arrow-left"></i></div>
			<div class="bd-link"><a href="http://ezproxy.ubiobio.cl:2048/login?url=https://www.taylorfrancis.com">ENGnetBase</a><i class="fas fa-arrow-left"></i></div>
			<div class="bd-link"><a href="http://ezproxy.ubiobio.cl:2048/login?url=https://link.springer.com">Springer Link</a><i class="fas fa-arrow-left"></i></div>
			<div class="bd-link"><a href="http://ezproxy.ubiobio.cl:2048/login?url=https://www.sciencedirect.com">Science Direct</a><i class="fas fa-arrow-left"></i></div>
			<div class="bd-link"><a href="http://ezproxy.ubiobio.cl:2048/login?url=https://www2.scopus.com/home.url">Scopus</a><i class="fas fa-arrow-left"></i></div>
			
		</div>
	</div>
		



	@endsection
	