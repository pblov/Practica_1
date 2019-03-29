	@extends('layouts.usuario')
	@section('title','Investigacion')
	@section('estilo')
	 <link rel="stylesheet" type="text/css" href="{{asset('css/investigacion.css')}}">

	 @endsection
	 @section('contenedor')

     <div class="inv-header"> </div>
    <div class="inv-contenedor">
     
                <div class="inv-titulo">
                        <h2><b>   GESTORES DE REFERENCIAS BIBLIOGRÁFICAS</b></h2>
                </div>
                <p> 
                        Los gestores de referencias bibliográficas son programas que permiten crear, mantener, organizar y dar forma a referencias bibliográficas de artículos de revistas o libros; obtenidas automáticamente de una o de varias fuentes de información (bases de datos, revistas, páginas web…), y que añaden a esta función básica su versatilidad para generar cientos de formatos de entrada y salida, utilizados para citar referencias bibliográficas en los trabajos de investigación. Esto es fundamentalmente lo que les diferencia de cualquier otro programa de bases de datos, por una parte la capacidad para compilar información desde la mayoría de las fuentes de información, y por otra la integración en los programas de proceso de textos (Word, OpenOffice) para facilitar a los investigadores la inclusión de citas en los trabajos de investigación. (Alonso, 2010) </p>
                <div class="inv-sec1">
                
                    
                        <div class="inv-gestor">
                                <header><b>Gestor de Referencia</b>  </header> 
                  
                                <img src="{!!asset('images/endnote.png')!!}" style="padding-top:60px;" alt="">
                         </div>
                            <div class="inv-gestor">
                                    <header><b>Descripción</b>  </header> 
                                <p>EndNote es un programa de gestión de referencias bibliográficas, diseñado para agilizar la redacción de trabajos de investigación. Con EndNote, puede: Recopilar, de una forma rápida y sencilla, la información de referencia procedente de una amplia variedad de fuentes de datos en línea, como, por ejemplo, PubMed, Google Scholar y Web of Science. Almacenar las referencias en su propia biblioteca protegida con contraseña y a la que puede acceder desde cualquier sitio en el que disponga de acceso a Internet. Compartir referencias con otros usuarios de EndNote para facilitar la colaboración. Dar formato de cita al texto en Microsoft Word con la herramienta Cite While You Write (Citar mientras escribe), que le permite introducir referencias y aplicar formato a los trabajos al instante.
                                    Desde la base de datos Web of Science puede acceder en forma gratuita seleccionando EndNote en la parte superior de la pantalla <a href="https://endnote.com/"> (Guía de inicio)</a></p>
                            </div>
                            
                            <div class="inv-gestor">
                   
                                    <img src="{!!asset('images/mendeley.png')!!}"   alt="" style="margin-top:50px;">
                                </div>
                                <div class="inv-gestor">
      
                                    <p>Mendeley es un gestor de referencias gratuito y red social académica con sede en Londres creado por Jan Reichelt, Victor Henning y Paul Foeckler, que fuera adquirido en abril de 2013 por Elsevier. Con Mendeley podrá: Generar automáticamente bibliografías. Colaborar fácilmente con otros investigadores en línea. Importar fácilmente documentos de otro software de investigación. Localizar los documentos pertinentes de acuerdo con lo que está leyendo. Leer artículos con aplicación para iPhone. Acceder a sus documentos en línea desde cualquier lugar. <a href="http://werken.ubiobio.cl/html/documentos/Mendeley_User_Guide_ES.pdf"> (Guía de inicio)</a></p>
                                </div>
                               
                                <div class="inv-gestor">
                                
                                        <img src="{!!asset('images/zotero.png')!!}"  alt="" style="margin-top:30px;" >
                                    </div>
                                    <div class="inv-gestor">

                                        <p>Zotero es un gestor de referencias bibliográficas, de acceso libre y gratuito desarrollado por el “Roy Rosenzweig Center for History and New Media” de la Universidad George Mason. Trabaja como una extensión del navegador Firefox que permite a los usuarios crear su propia base de datos (biblioteca) donde puede: guardar, manejar, buscar, organizar y citar fuentes de todo tipo. Zotero reside en el navegador Firefox, aunque la versión Standalone Alpha (desktop) funciona con los navegadores Safari y Chrome mediante un plugin. <a href="https://www.zotero.org/support/es/start"> (Guía de inicio)</a></p>
                                    </div>

                    
                </div>

                <div class="inv-titulo">
                        <h3><b>   Indicadores Cienciométricos</b></h3>
                </div>
                <div class="inv-sec2" >
                    <p style="margin-bottom:30px;">El Sistema de Bibliotecas UBB ofrece un conjunto de elementos que proveen información necesaria de apoyo para la actividad de  investigación, proceso de publicación y mejoramiento de difusión de la actividad científica. Se consideran las principales plataformas de indexación de revistas, nóminas de títulos,  criterios de indexación, valoración de títulos de acuerdo a  diferentes indicadores; lenguaje de recuperación, palabras claves y tesauros; visibilidad de autores, identificación y  redes sociales científicas.</p>

                    <button class="inv-boton" > Indexación de Títulos de Revistas</button>
                    <div class="inv-sec21" >
                        <div class="sec21-cont">
                            <h5 id="wos">Web of Science: Títulos Master Journal List</h5>
                        </div>
                        <div class="sec21-cont">
                            <p id="wos1"> Web of Science es una Base de Datos de información científica, facilita el acceso a un conjunto de bases de datos en las que aparecen citas de artículos de aproximadamente 22.599 revistas científicas de corriente principal de las cuales 13.885 pertenecen a la colección principal y abarcan todos los campos del conocimiento académico. Permite acceder a las publicaciones previas de una determinada investigación publicada a través del acceso a sus referencias bibliográficas citadas, o también, a las publicaciones que citan un documento determinado para descubrir el impacto de un trabajo científico sobre la investigación actual. Por último, permite conectarse al texto completo de publicaciones primarias y otros recursos y acceder a ellos mediante un sistema de búsqueda <a href="http://mjl.clarivate.com/"> (Link)</a></p>
                        </div>

                        <div class="sec21-cont">
                            <h5>Scopus: Títulos</h5>
                        </div>
                        <div class="sec21-cont">
                            <p> Scopus es una Base de Datos que comprende los resúmenes y referencias de cerca de 35.414 revistas de las cuales 13.000 son publicaciones evaluadas por especialistas, así como aproximadamente 1.000 actas de conferencias. Su cobertura disciplinaria es la siguiente: Química, Física, Matemáticas, Ingeniería, Ciencias de la vida y de la salud, Ciencias Sociales y Económicas, y Psicología <a href="https://www.elsevier.com/__data/assets/excel_doc/0015/91122/title_list.xlsx"> (Link)</a></p>
                        </div>
                        <div class="sec21-cont">
                            <h5>Ebsco: Títulos</h5>
                        </div>
                        <div class="sec21-cont">
                            <p>EBSCO es una plataforma de búsqueda que ofrece Bases de Datos en textos completos, índices y publicaciones periódicas académicas que cubren diferentes áreas de las ciencias y humanidades. Incluye 13.200 revistas a texto completo de las cuales 9.900 son publicaciones académicas arbitradas. Sus colecciones están disponibles a través de EBSCOhost<a href="https://www.ebscohost.com/academic?_ga=1.100293086.1557461476.1465436156"> (Link)</a></p>
                        </div>
                        <div class="sec21-cont">
                            <h5 style="margin-bottom: 30px;">BEIC: Títulos</h5>
                        </div>
                        <div class="sec21-cont">
                            <p style="margin-bottom:30px;"> BEIC  Biblioteca Electrónica de Información Científica es un instrumento de acceso a la información. Este programa conjunto entre CINCEL y CONICYT entrega acceso gratuito a la Universidad del Bío-Bío, a través de Internet a un conjunto seleccionado de 5.940 revistas en texto completo<a href="http://www.cincel.cl/content/view/318/69/"> (Link)</a></p>
                        </div>
                    </div>
                    
                    <button class="inv-boton"> Evaluación de Títulos de Revistas e Información Científica</button>
                    <div class="inv-sec21">
                        <div class="sec22-cont">
                                <h5 id="top">Scopus: Comparador de Títulos</h5>
                        </div>
                        <div class="sec22-cont">
                            <p id="top1"style="margin-top:30px;">
                                    Scopus incluye opción de buscar y analizar revistas científicas, se puede y elegir un máximo de 10 revistas para analizar y comparar. <a href="https://www.scopus.com/source/eval.uri"> (Link)</a>
                            </p>
                        </div>
                        <div class="sec22-cont">
                                <h5>Journal Finder</h5>
                        </div>
                        <div class="sec22-cont">
                            <p >
                                    Journal Finder de Elsevier  ayuda a encontrar revistas que podrían ser más adecuados para la publicación de su artículo científico a partir del título y resumen de un artículo a publicar, la comparación incluye variables tales como  factor de impacto, tiempo de respuesta, acceso, licencias de uso, periodo de embargo. <a href="https://journalfinder.elsevier.com/#results"> (Link)</a>
                            </p>
                        </div>
                        <div class="sec22-cont">
                                <h5>Journal Suggesterr</h5>
                        </div>
                        <div class="sec22-cont">
                            <p >
                                    Journal Suggester de Springer , a partir de un resumen, descripción de investigación o un texto de ejemplo permite elegir entre 2.600 publicaciones de Springer la revista que mejor se adapte al tema de investigación, entregando información de factor de impacto y tiempo de respuesta. <a href="https://journalsuggester.springer.com/"> (Link)</a>
                            </p>
                        </div>
                        <div class="sec22-cont">
                                <h5>Coincidencia</h5>
                        </div>
                        <div class="sec22-cont">
                            <p >
                                    Coincidencia es una opción que proporciona el gestor bibliográfico EndNote que permite encontrar las mejores revistas para el manuscrito de un investigador a partir del título y resumen de un artículo a publicar, , la comparación incluye variables tales como factor de impacto, categoría y cuartil de la revista en Journal of Citation Report. <a href="https://www.myendnoteweb.com/EndNoteWeb.html?func=journalDetails&cat=details"> (Link)</a>
                            </p>
                        </div>
                        <div class="sec22-cont">
                                <h5>Scimago: Indicadores cienciométricos</h5>
                        </div>
                        <div class="sec22-cont">
                            <p >
                                    SCImago Journal & Country Rank es un portal que incluye indicadores científicos que evalúan y analizan las revistas científicas contenidas en la base de datos Scopus (Elsevier). <a href="https://www.scimagojr.com/"> (Link)</a>
                            </p>
                        </div>
                        <div class="sec22-cont">
                                <h5>Google:Indicadores / estadísticas</h5>
                        </div>
                        <div class="sec22-cont">
                            <p >
                                    Google Scholar Metrics  es un portal que proporciona indicadores científicos que  evalúan y analizan las publicaciones académicas contenidas en Google Académico.<a href="https://scholar.google.com/citations?view_op=top_venues&hl=es"> (Link)</a>
                            </p>
                        </div>
                        <div class="sec22-cont">
                                <h5 style=>Redalyc </h5>
                        </div>
                        <div class="sec22-cont">
                            <p >
                                    Es un portal que entrega indicadores cienciométricos   de revistas iberoamericanas indizadas en Redalyc. <a href="http://www.redalyc.org/IndicadoresHome.oa"> (Link)</a>
                            </p>
                        </div>
                        <div class="sec22-cont">
                                <h5>Revistas Elsevier</h5>
                        </div>
                        <div class="sec22-cont">
                            <p >
                                    Journalinsights proporciona indicadores adicionales de revistas académicas Elsevier: Impacto, velocidad y el alcance. <a href="https://journalinsights.elsevier.com/journals/1072-7515"> (Link)</a>
                            </p>
                        </div>
                        <div class="sec22-cont">
                                <h5 >Altmetrics</h5>
                        </div>
                        <div class="sec22-cont">
                            <p >
                                    Altmetrics son indicadores de la actividad académica en las redes sociales y en las herramientas sociales. Elsevier proporciona altmetrics de publicaciones indizadas en Science Direct. <a href="https://universoabierto.com/2016/01/11/elsevier-expande-sus-perspectivas-metricas-con-el-lanzamiento-de-proyecto-piloto-altmetrics/"> (Link)</a>
                            </p>
                        </div>
                        <div class="sec22-cont">
                                <h5 id="miar">MIAR: Matriz de Información para el Análisis de Revistas</h5>
                        </div>
                        <div class="sec22-cont">
                            <p >
                                    Actualizada anualmente, la base de datos MIAR reúne información clave para la identificación y el análisis de revistas. Éstas se agrupan en grandes áreas científicas –subdivididas a su vez en campos académicos más específicos–. El sistema crea una matriz de correspondencia entre las revistas, identificadas por su ISSN y las bases de datos y repertorios que las indizan o incluyen. Además, se indica el vínculo a las webs de los editores e instituciones responsables de los repertorios y fuentes siempre que se dispone del mismo. <a href="http://miar.ub.edu/"> (Link)</a>
                            </p>
                        </div>
                        <div class="sec22-cont">
                                <h5>
                                        POP Publish o Perish</h5>
                        </div>
                        <div class="sec22-cont">
                            <p >
                                    Se trata de un programa que busca y analiza citas académicas utilizando Google Scholar.  <a href="https://harzing.com/resources/publish-or-perish"> (Link)</a>
                            </p>
                        </div>
                        <div class="sec22-cont">
                                <h5>Scholarometer</h5>
                        </div>
                        <div class="sec22-cont">
                            <p >
                                    El software que busca y analiza citas académicas e incluye adicionalmente el factor-h universal. <a href="https://scholarometer.indiana.edu/"> (Link)</a>
                            </p>
                        </div>
                        <div class="sec22-cont">
                                <h5>Cincel</h5>
                        </div>
                        <div class="sec22-cont">
                            <p >
                                    Corporación que da acceso a la información científica electrónica mediante la creación de una biblioteca de revistas científicas internacionales (BEIC) y de otros recursos de información para las instituciones de educación superior y personas jurídicas que desarrollen investigación científica y tecnológica <a href="http://www.cincel.cl/"> (Link)</a>
                            </p>
                        </div>
                        <div class="sec22-cont">
                                <h5>Dataciencia</h5>
                        </div>
                        <div class="sec22-cont">
                            <p >
                                    Esta herramienta permite visualizar, cuantificar y caracterizar la producción científica chilena segmentada en cuatro grandes categorías: Investigadores, Territorio (Regiones), Instituciones y Revistas Científicas. Todo esto a partir de la base de datos Web of Science (WOS) de Thomson Reuters que contiene la producción científica nacional del periodo 2008-2016. <a href="https://dataciencia.conicyt.cl/interfaz/"> (Link)</a>
                            </p>
                        </div>
                        <div class="sec22-cont">
                                <h5> 
                                        Sistema de Información Científica</h5>
                        </div>
                        <div class="sec22-cont">
                            <p style="margin-bottom:60px;">
                                    Sistema de servicios, plataformas y contenidos del el Programa de Información Científica de CONICYT. <a href="http://informacioncientifica.cl/"> (Link)</a>
                            </p>
                        </div>
                        
                    </div>

                    <button class="inv-boton"> 	Identificación de Investigadores</button>
                    <div class="inv-sec21">
                            <div class="sec23-cont">
                                    <h5 id="pos" >ResearcherID</h5>
                            </div>
                            <div class="sec23-cont">
                                <p style="margin-top:30px;">
                                        ResearcherID.com permite crear un perfil en línea para mostrar el historial de publicaciones académicas, es un recurso disponible de forma gratuita para la comunidad de investigación académica global y multidisciplinar. Luego de registrarse, el sistema asigna  al investigador un número de ID individual que lo acompañara durante el transcurso de su carrera, con independencia de los cambios en los nombres o en la afiliación de su institución. <a href="http://www.researcherid.com/Home.action?SID=2CQsWmMhI9P4l9fBI2x&returnCode=ROUTER.Success&SrcApp=CR&Init=Yes"> (Link)</a>
                                </p>
                            </div>
                            <div class="sec23-cont">
                                    <h5>ORCID</h5>
                            </div>
                            <div class="sec23-cont">
                                <p >
                                        ORCID proporciona un identificador digital persistente del investigador que le distingue de los demás y, al estar integrado con las principales tareas de investigación, como el envío de manuscritos y concesiones, le vincula automáticamente a las actividades profesionales, garantizando que el trabajo del investigador sea reconocido. <a href="https://orcid.org/"> (Link)</a>
                                </p>
                            </div>
                            <div class="sec23-cont">
                                <h5>SCOPUS ID</h5>
                        </div>
                        <div class="sec23-cont">
                            <p >
                                Scopus Author Identifier es un identificador de autor y perfil integrado en la Base de Datos Scopus, de Elsevier. Se crea automáticamente para cualquier autor cuya obra esté incluida en Scopus, y permite agrupar en forma unívoca los diferentes nombres por los cuales puede ser conocido un autor.
                            </p>
                        </div>
                    </div>


                    <button class="inv-boton">	Redes Sociales Científicas </button>
                    <div class="inv-sec21">
                        <div class="sec24-cont">
                                <h5 id="res">ResearchGate</h5>
                        </div>
                        <div class="sec24-cont">
                            <p style="margin-top:30px;">
                                ResearchGate es una plataforma de investigación y colaboración en línea, una red social académica dirigida a estudiantes, profesores, científicos e investigadores de todas las materias. <a href="https://www.researchgate.net/home"> (Link)</a>
                            </p>
                        </div>
                        <div class="sec24-cont">
                                <h5>AcademiaEdu</h5>
                        </div>
                        <div class="sec24-cont">
                            <p >
                                Academia.edu es una plataforma de investigación y colaboración en línea, es una red social académica gratuita que tiene como objetivo conectar científicos, ofrecerles una plataforma para compartir sus trabajos de investigación y facilitarles el seguimiento de los artículos que son relevantes para sus campos de estudio.	<a href="https://www.academia.edu/"> (Link)</a>
                            </p>
                        </div>
                        <div class="sec24-cont">
                                <h5>Mendeley</h5>
                        </div>
                        <div class="sec24-cont">
                            <p >
                                Mendeley es un gestor de referencias bibliográficas y una red social temática. Como red social temática, una herramienta de colaboración en línea que permite la conexión de investigadores, científicos, estudiantes, profesores, bibliotecarios y gestores de la información	<a href="http://www.mendeley.com/"> (Link)</a>
                            </p>
                        </div>
                     </div>


                    <button class="inv-boton"> Indicadores, Definiciones</button>
                    <div class="inv-sec21">
                        <div class="sec24-cont">
                                <h5 id="los">Factor de Impacto</h5>
                        </div>
                        <div class="sec24-cont">
                            <p style="margin-top:30px;">
                                El  Factor de impacto  de una revista es el número promedio de veces que artículos de una revista publicada en los últimos dos años fueron citados en el año de Journal of Citation Report.
                                El Factor de impacto  se calcula al dividir el número de citas del año de Journal of Citation Report. por el número total de artículos publicados en los dos años anteriores. Un Factor de Impacto de 1.0 significa que, como promedio, los artículos publicados hace uno o dos años fueron citados una vez. Un Factor de Impacto de 2.5 significa que, como promedio, los artículos publicados hace uno o dos años fueron citados dos veces y media. Los trabajos en que se cita pueden ser artículos publicados en la misma revista o de los trabajos que proceden de diferentes revistas, actas de conferencias o libros indexados por Web of Science<a href="http://images.webofknowledge.com/WOKRS522_2R1/help/es_LA/WOS/hp_full_record.html#dsy7956-TRS_journal_information"> (Link)</a>
                            </p>
                        </div>
                        <div class="sec24-cont">
                                <h5>Índice H</h5>
                        </div>
                        <div class="sec24-cont">
                            <p >
                                El índice h o índice de Hirsch es un indicador ciencioométrico que se calcula con base en la distribución de las citas que han recibido los trabajos científicos de un investigador. Un autor tiene un índice h de “H” cuando “H” de sus artículos publicados han recibido “H” citas como mínimo cada uno, y el resto de sus artículos, han recibido “H” como máximo. <a href="http://images.webofknowledge.com/WOKRS522_2R1/help/es_LA/WOS/hp_citation_report_hindex.html"> (Link)</a>
                            </p>
                        </div>
                        <div class="sec24-cont">
                                <h5>ISSN</h5>
                        </div>
                        <div class="sec24-cont">
                            <p >
                                El ISSN (Número Internacional Normalizado de Publicaciones Seriadas), número identificador de publicaciones seriadas en distintos soportes.<a href="http://images.webofknowledge.com/WOKRS522_2R1/help/es_LA/WOS/hs_advanced_fieldtags.html"> (Link)</a>
                            </p>
                        </div>
                        <div class="sec24-cont">
                                <h5>ISBN</h5>
                        </div>
                        <div class="sec24-cont">
                            <p >
                                El ISBN (Número Estándar Internacional de Libros) , número identificador de libros en distintos soportes. <a href="http://images.webofknowledge.com/WOKRS522_2R1/help/es_LA/WOS/hs_advanced_fieldtags.html"> (Link)</a>
                            </p>
                        </div>
                        <div class="sec24-cont">
                                <h5>DOI</h5>
                        </div>
                        <div class="sec24-cont">
                            <p >
                                El identificador digital de objeto (DOI®) es un sistema para identificar e intercambiar de forma permanente propiedades intelectuales en el entorno digital <a href="http://images.webofknowledge.com/WOKRS522_2R1/help/es_LA/WOS/hs_doi.html"> (Link)</a>
                            </p>
                        </div>
                     </div>

                    <button class="inv-boton"> Palabras Claves, Tesauros</button>
                    <div class="inv-sec21">
                        <div class="sec25-cont">
                                <h5 id="jos">Tesauros de la Unesco</h5>
                        </div>
                        <div class="sec25-cont">
                            <p style="margin-top:30px;">
                                El Tesauro de la UNESCO es una lista controlada y estructurada de términos para el análisis temático y la búsqueda de documentos y publicaciones en los campos de la educación, cultura, ciencias naturales, ciencias sociales y humanas, comunicación e información. Continuamente ampliada y actualizada, su terminología multidisciplinaria refleja la evolución de los programas y actividades de la UNESCO. <a href="http://vocabularies.unesco.org/browser/thesaurus/es/"> (Link)</a>
                            </p>
                        </div>
                        <div class="sec25-cont">
                                <h5  style="font-size:14px;"> 
                                       Descriptores de la BVS Información y Conocimiento para la Salud</h5>
                        </div>
                        <div class="sec25-cont">
                            <p id="bvs">
                                El vocabulario estructurado y trilingüe DeCS - Descriptores en Ciencias de la Salud fue creado por BIREME para servir como un lenguaje único en la indización de artículos de revistas científicas, libros, anales de congresos, informes técnicos, y otros tipos de materiales, así como para ser usado en la búsqueda y recuperación de asuntos de la literatura científica en las fuentes de información disponibles en la Biblioteca Virtual en Salud (BVS) como LILACS, MEDLINE y otras. <a href="http://decs.bvs.br/E/homepagee.htm"> (Link)</a>
                            </p>
                        </div>
                        <div class="sec25-cont">
                                <h5 style="font-size:14px;"> 
                                        MeSH</h5>
                        </div>
                        <div class="sec25-cont">
                            <p >
                                Encabezamientos de Materia de información biomédica elaborado por U.S. National Library of Medicine (NLM) <a href="https://www.nlm.nih.gov/mesh/meshhome.html"> (Link)</a>
                            </p>
                        </div>
                        <div class="sec25-cont">
                                <h5 style="font-size:14px;"> 
                                        Tesauro de la OCDE</h5>
                        </div>
                        <div class="sec25-cont">
                            <p >
                                Macrotesauro de la OCDE (Organización para la Cooperación y el Desarrollo), comprende descriptores (palabras clave) diseñados para los libros de indexación y documentos que cubren el campo del desarrollo económico y social.<a href="http://bibliotecavirtual.clacso.org.ar/ar/oecd-macroth/es/"> (Link)</a>
                            </p>
                        </div>
                        <div class="sec25-cont">
                                <h5 style="font-size:14px;"> 
                                        Tesauros de la IEEE</h5>
                        </div>
                        <div class="sec25-cont">
                            <p >
                                Es un Tesauro términos controlados del área ingeniería,  tecnología y ciencia que se basa en material presentado en revistas, actas de conferencias, normas y/o documentos de la organización IEEE (The Institute of Electrical and Electronics Engineers ) <a href="http://www.ieee.org/documents/ieee_thesaurus_2013.pdf"> (Link)</a>
                            </p>
                        </div>
                        <div class="sec25-cont">
                                <h5 style="font-size:14px;"> 
                                        Tesauro de Arte y Arquitectura</h5>
                        </div>
                        <div class="sec25-cont">
                            <p >
                                Vocabulario controlado de arte y arquitectura  desarrollado por el Getty Research Institute (GRI), un programa operativo de The J. Paul Getty Trust, y traducido en español por el Centro de Documentación de Bienes Patrimoniales (dependiente de la Dirección de Bibliotecas, Archivos y Museos - DIBAM) <a href="http://www.aatespanol.cl/taa/publico/buscar.htm"> (Link)</a>
                            </p>
                        </div>
                        <div class="sec25-cont">
                                <h5  style="font-size:14px;"> 
                                        
                        Tesauro Agrovoc de Agricultura</h5>
                        </div>
                        <div class="sec25-cont">
                            <p >
                                AGROVOC es un vocabulario controlado que abarca todos los ámbitos de interés de la Organización de las Naciones Unidas para la Alimentación y la Agricultura (FAO), entre ellos la alimentación, la nutrición, la agricultura, la pesca, las ciencias forestales y el medio ambiente. Lo publica la FAO y una comunidad de expertos se encarga de su edición. <a href="http://oek1.fao.org/skosmos/agrovoc/en/"> (Link)</a>
                            </p>
                        </div>
                        <div class="sec25-cont">
                                <h5 style="font-size:14px;"> 
                                       
ERIC Thesaurus</h5>
                        </div>
                        <div class="sec25-cont">
                            <p >
                                El Tesauro ERIC (Education Resources Information Center) es una lista de términos que representan temas de investigación en el campo de la educación. Los descriptores del tesauro ERIC se asignan a cada documento de la biblioteca digital ERIC para describir su contenido. Desde octubre de 2015, el Tesauro ERIC contiene un total de 11.721 términos. Hay 4,520 Descriptores y 7,068 Sinónimos. También hay 133 términos no usados que ya no se utilizan como descriptores, pero permanecen en el Tesauro para ayudar en la búsqueda de registros antiguos. <a href="https://eric.ed.gov/?ti=all"> (Link)</a>
                            </p>
                        </div>
                        <div class="sec25-cont">
                                <h5 style="font-size:14px;"> 
                                        FAOTERM</h5>
                        </div>
                        <div class="sec25-cont">
                            <p >
                                Portal terminológico de la FAO, almacena, gestiona y mantiene conceptos, términos y definiciones relacionados con los distintos campos de actividad de la FAO. <a href="http://www.fao.org/faoterm/es/"> (Link)</a>
                            </p>
                        </div>
                        <div class="sec25-cont">
                                <h5 style="font-size:14px;"> 
                                        ASEO Artículos Científicos</h5>
                        </div>
                        <div class="sec25-cont">
                            <p >
                                ASEO es el acrónimo inglés de Academic  Search Engine Optimization, es decir, optimización del artículo científico utilizando palabras claves que le permitan tener buen  posicionamiento en internet. <a href="http://www.neoscientia.com/seo-articulos-cientificos/"> (Link)</a>
                            </p>
                        </div>

                     </div>

                    <button class="inv-boton"> Criterios de Indexación</button>
                    <div class="inv-sec21">
                        <div class="sec26-cont">
                                <h5 id="lkp" >Latindex: Criterios de Indexación</h5>
                        </div>
                        <div class="sec26-cont">
                            <p style="margin-top:30px;">
                                Latindex, Sistema Regional de Información en Línea para Revistas Científicas de América Latina, el Caribe, España y Portugal. Latindex considera 33 características editoriales. Para ingresar al Catálogo la revista debe cumplir las ocho características obligatorias y al menos 17 de las restantes características, para un mínimo de 25 cumplidas. Las ocho características obligatorias son: Mención del cuerpo Editorial, Contenido, Antigüedad mínima 1 año, Identificación de los autores, Lugar de edición, Entidad editora, Mención del director, Mención de la dirección. <a href="http://www.latindex.org/latindex/editImpresas"> (Link)</a>
                            </p>
                        </div>
                        <div class="sec26-cont">
                                <h5>Scielo org: Criterios de Indexación</h5>
                        </div>
                        <div class="sec26-cont">
                            <p >
                                Scielo org, Scientific Electronic Library Online, considera las siguientes características para indexar una revista en la plataforma: Carácter científico, Arbitraje por pares, Consejo editorial, Periodicidad de acuerdo a Área temática, Duración, Puntualidad, Resumen, palabras clave y título en inglés,  Normalización,  Afiliación de autores, Citas recibidas.<a href="http://www.scielo.org/php/level.php?lang=es&component=44&item=2"> (Link)</a>
                            </p>
                        </div>
                        <div class="sec26-cont">
                                <h5>Web of Science (ISI): Criterios de Indexación</h5>
                        </div>
                        <div class="sec26-cont">
                            <p >
                                En la evaluación de las revistas contenidas en Web of Science (ISI) se tienen en cuenta muchos factores cualitativos y cuantitativos. Ningún factor se considera aisladamente, sino combinando e interrelacionando los datos; así puede el editor determinar todos los puntos fuertes y débiles de la revista. Algunos de los criterios considerados son: periodicidad regular, proceso de revisión por pares, Contenido editorial, Internacionalidad,  títulos de artículos y resúmenes completamente descriptivos,  títulos de los artículos en inglés, los resúmenes, y las palabras claves son esenciales, Análisis de citas (medidas de citas completas, factor de impacto, e índice de inmediatez, registro de publicaciones de los autores y de los miembros del cuerpo editorial)<a href="http://ip-science.thomsonreuters.com/m/pdfs/wos_workbook_es.pdf"> (Link)</a>
                            </p>
                        </div>
                        <div class="sec26-cont">
                                <h5>Scopus: criterios de Indexación</h5>
                        </div>
                        <div class="sec26-cont">
                            <p >
                                Se evalúa la política de la revista, los contenidos, la relevancia de la revista, la regularidad y la versión electrónica. Algunos elementos considerados son contar con ISSN, publicación regular de acuerdo a periodicidad declarada, publicación de al menos un número al año, antigüedad mínima de dos años, originalidad y relevancia de los artículos, revisión por pares, ética en la publicación.<a href="https://www.elsevier.com/solutions/scopus/content/content-policy-and-selection"> (Link)</a>
                            </p>
                        </div>
                        <div class="sec26-cont">
                                <h5 style="font-size:13px;">Bases de Datos Iberoamericanas</h5>
                        </div>
                        <div class="sec26-cont">
                            <p >
                                Recopilación de criterios de indexación de diversas bases de datos de revistas iberoamericanas<a href="http://www.latindex.org/lat/biblioteca/docu/cuadro1.pdf"> (Link)</a>
                            </p>
                        </div>
                        <div class="sec26-cont">
                                <h5>SRedalyc: Criterios de Indexación</h5>
                        </div>
                        <div class="sec26-cont">
                            <p >
                                Redalyc (Red de Revistas Científicas de América Latina y el Caribe, España y Portugal). Para la evaluación se considera la Permanencia, Contenido Científico,  Periodicidad, Gestión Editorial, Visibilidad del Contenido, Aprovechamiento de la Tecnología. Algunos criterios considerados son: Antigüedad, Contenido científico, Exigencia de originalidad, Revisión por pares, Cumplimiento de la periodicidad,  Título completo, ISSN impreso y/o electrónico, Institución editora, Exogeneidad de evaluadores  y del consejo editorial, Tiempos de evaluación,  Artículos publicados anualmente, Resumen en el idioma original, Resumen en un segundo idioma, de preferencia inglés, Palabras clave en el idioma original. Palabras clave en un segundo idioma, de preferencia inglés, Uso de un gestor electrónico, Incorporación de protocolos de interoperatividad en AA, Buscador de contenidos / CAV, Descarga individual de contenidos, Dispone de sus artículos marcados en el formato XML-JATS, Integridad de la colección, Identificadores (ID) de autor, Usabilidad.<a href="http://www.redalyc.org/redalyc/media/redalyc_n/estaticasredalyc/Criterios/criterios.html"> (Link)</a>
                            </p>
                        </div>
                        <div class="sec26-cont">
                                <h5> 
                                        Dialnet: Criterios de Indexación</h5>
                        </div>
                        <div class="sec26-cont">
                            <p >
                                Plataforma de recursos y servicios documentales  que indexa revistas, tesis, congresos y otros documentos. Coordinada por Universidad de la Rioja y Fundación Dialnet Los criterios de indexación exigidos son: La revista debe estar registrada en el Catálogo de Latindex, El editor debe autorizar el alojamiento de los textos completos en los servidores de Dialnet,  Debe disponer del contenido de los sumarios en formato electrónico accesibles por OAI-PMH. Priorizando el sistema de edición electrónica OJS.<a href="https://dialnet.unirioja.es/info/ayuda/seredi"> (Link)</a>
                            </p>
                        </div>
                        <div class="sec26-cont">
                                <h5>Scielo org: Criterios de Indexación</h5>
                        </div>
                        <div class="sec26-cont">
                            <p >
                                Scielo org, Scientific Electronic Library Online, considera las siguientes características para indexar una revista en la plataforma: Carácter científico, Arbitraje por pares, Consejo editorial, Periodicidad de acuerdo a Área temática, Duración, Puntualidad, Resumen, palabras clave y título en inglés,  Normalización,  Afiliación de autores, Citas recibidas.<a href="http://www.scielo.org/php/level.php?lang=es&component=44&item=2"> (Link)</a>
                            </p>
                        </div>
                     </div>

                    <button class="inv-boton"> Antiplagio: Software Libre</button>
                    <div class="inv-sec21">
                        <div class="sec27-cont">
                                <h5 id="kkp">Articlechecker</h5>
                        </div>
                        <div class="sec27-cont">
                            <p style="margin-top:30px;">
                                Permite la comprobación en los motores de búsqueda de Google y de Yahoo, de manera independiente. Puede detectar webs completas  mediante la URL. <a href="http://www.articlechecker.com/"> (Link)</a>
                            </p>
                        </div>
                        <div class="sec27-cont">
                                <h5>Antiplagiarist</h5>
                        </div>
                        <div class="sec27-cont">
                            <p >
                                Es un software gratuito que compara varios documentos para detectar similitudes sospechosas. Soporta archivos con los siguientes formatos: HTML, DOC, TXT, WPD y otros.<a href="http://antiplagiarist.softonic.com/"> (Link)</a>
                            </p>
                        </div>
                        <div class="sec27-cont">
                                <h5>Copyscape</h5>
                        </div>
                        <div class="sec27-cont">
                            <p >
                                Busca copias online de una página web, a través de su URL y documentos en línea en la red.<a href="http://www.copyscape.com/"> (Link)</a>
                            </p>
                        </div>
                        <div class="sec27-cont">
                                <h5> 
                                        Dupli Checker</h5>
                        </div>
                        <div class="sec27-cont">
                            <p >
                                Compara el texto introducido con documentos en la web.<a href="http://www.duplichecker.com/"> (Link)</a>
                            </p>
                        </div>
                        <div class="sec27-cont">
                                <h5>Paper Rater</h5>
                        </div>
                        <div class="sec27-cont">
                            <p >
                                Se trata de una herramienta muy completa y gratuita. Además de determinar la autenticidad de un documento, es capaz de revisar y analizar su estructura gramatical.<a href="http://www.paperrater.com/features"> (Link)</a>
                            </p>
                        </div>
                        <div class="sec27-cont">
                                <h5 style="font-size:13px;">Plagiarism Checker</h5>
                        </div>
                        <div class="sec27-cont">
                            <p >
                                Permite realizar una búsqueda a través de Google mediante grandes bloques de texto.<a href="http://www.dustball.com/cs/plagiarism.checker/"> (Link)</a>
                            </p>
                        </div>
                        <div class="sec27-cont">
                                <h5>Plagiarism Detect</h5>
                        </div>
                        <div class="sec27-cont">
                            <p >
                                Recupera documentos de la red donde aparecen frases coincidentes con los de un texto o archivo concreto. Para utilizarse debemos crearnos una cuenta en su sistema.<a href="http://es.plagiarismdetect.org/"> (Link)</a>
                            </p>
                        </div>
                        <div class="sec27-cont">
                                <h5>Plagiarisma</h5>
                        </div>
                        <div class="sec27-cont">
                            <p >
                                Puede usarse desde la Web, o mediante descarga para Windows. Requiere que nos registremos.<a href="http://plagiarisma.net/es/"> (Link)</a>
                            </p>
                        </div>
                        <div class="sec27-cont">
                                <h5>Plagium</h5>
                        </div>
                        <div class="sec27-cont">
                            <p >
                                Busca documentos iguales o similares al texto introducido. Permite buscar en diferentes idiomas.<a href="http://www.plagium.com/"> (Link)</a>
                            </p>
                        </div>
                        <div class="sec27-cont">
                                <h5>Tin Eye</h5>
                        </div>
                        <div class="sec27-cont">
                            <p >
                                Herramienta para realizar una búsqueda de imágenes, a partir de una imagen. Es útil para saber si alguien ha utilizado una de tus imágenes en la red sin tu permiso.
 <a href="https://www.tineye.com/"> (Link)</a>
                            </p>
                        </div>
                        <div class="sec27-cont">
                                <h5>Viper</h5>
                        </div>
                        <div class="sec27-cont">
                            <p >
                                Verificador de plagio. Te permite añadir uno o más documentos para su comprobación.<a href="https://www.scanmyessay.com/"> (Link)</a>
                            </p>
                        </div>
                        <div class="sec27-cont">
                                <h5>Google y Google Scholar</h5>
                        </div>
                        <div class="sec27-cont">
                            <p >
                                Debido a que cada vez existen más libros subidos a Google Books o Google Scholars, permite detectar el plagio entrecomillando a través de una frase concreta.<a href="https://www.google.cl/"> (Link)</a>
                            </p>
                        </div>

                     </div>

                    <button class="inv-boton"> Otras Fuentes de Información</button>
                    <div class="inv-sec21">
                        <div class="sec28-cont">
                                <h5 id="tos" style="font-size:13px;">DBPL : Computer Science </h5>
                        </div>
                        <div class="sec28-cont">
                            <p style="margin-top:30px;">
                                Este servicio proporciona información bibliográfica abierta sobre las principales revistas y procedimientos de ciencias de la computación. Dblp es un servicio conjunto de la Universidad de Trier y Schloss Dagstuhl. <a href="http://dblp.uni-trier.de/"> (Link)</a>
                            </p>
                        </div>
                        <div class="sec28-cont">
                                <h5>Semantic Scholar</h5>
                        </div>
                        <div class="sec28-cont">
                            <p >
                                Es un buscador semántico académico que ofrece tendencias en las publicaciones científicas utilizando técnicas de inteligencia artificial para ofrecer resultados altamente relevantes y nuevas herramientas para filtrarlos de manera fácil. Es un producto de  la organización sin ánimo de lucro Allen Institute for Artificial Intelligence (AI2) en Seattle. 
                                Esta nueva herramienta (https://www.semanticscholar.org/) puede rastrear millones de papers aunque actualmente solo incluye los relacionados con computer science, unos 3 millones de artículos en acceso abierto. Para el año 2016 piensan incluir documentos sobre Medicina.<a href="https://www.semanticscholar.org/"> (Link)</a>
                            </p>
                        </div>
                        <div class="sec28-cont">
                                <h5>CiteSeerX</h5>
                        </div>
                        <div class="sec28-cont">
                            <p >
                                CiteSeer es un motor de búsqueda público y biblioteca digital enfocado en publicaciones académicas y científicas. La meta de CiteSeer eran la búsqueda y captura activa de documentos académicos y científicos en el WEB para ser indexados usando el método autónomo de análisis de citas; y así permitir las búsquedas por cita o por la clasificación de los documentos basado en el análisis de citas. El sitio es alojado en el Colegio de Ciencias de la Información y Tecnología de la Universidad Estatal de Pensilvania y almacena más de 700,000 documentos la mayoría de estos relacionados con los campos de la computación, ciencias de la computación e ingeniería. <a href="http://citeseerx.ist.psu.edu/"> (Link)</a>
                            </p>
                        </div>
                        <div class="sec28-cont">
                                <h5>Bibsonomy</h5>
                        </div>
                        <div class="sec28-cont">
                            <p >	Bibsonomy es un sistema para compartir y organizar marcadores y listas de literatura.
                                <a href="http://www.bibsonomy.org/"> (Link)</a>
                            </p>
                        </div>
                        <div class="sec28-cont">
                                <h5>REPEC Research Papers in Economic</h5>
                        </div>
                        <div class="sec28-cont">
                            <p >Es un esfuerzo de colaboración de cientos de voluntarios en 89 países para mejorar la difusión de la investigación en economía y ciencias afines. El corazón del proyecto es una base de datos bibliográfica descentralizada de documentos de trabajo, artículos de revistas, libros, capítulos de libros y componentes de software, todos ellos mantenidos por voluntarios. Los datos recopilados se utilizan entonces en diversos servicios que sirven los metadatos recopilados a los usuarios o mejoran.
                                Hasta el momento, más de 1.800 archivos de 89 países han contribuido a unos 2 millones de unidades de investigación de 2.300 revistas y 4.300 ediciones de artículos de trabajo. Alrededor de 48.000 autores se han registrado y 75.000 suscripciones de correo electrónico se sirven cada semana. Vea abajo cómo usted puede ser parte de esta iniciativa.
                                <a href="http://repec.org/"> (Link)</a>
                            </p>
                        </div>
                        <div class="sec28-cont">
                                <h5>CEPAL : Biblioteca</h5>
                        </div>
                        <div class="sec28-cont">
                            <p >Biblioteca de la CEPAL (Comisión Económica para América Latina y el Caribe) reúne recursos digitales  disponibles tales como Repositorio Digital, Catálogo, Libros y Revistas Electrónicas, Periódicos, Guías de Investigación)

                                <a href="https://www.cepal.org/es/biblioteca"> (Link)</a>
                            </p>
                        </div>
                        <div class="sec28-cont">
                                <h5>HINDAWI</h5>
                        </div>
                        <div class="sec28-cont">
                            <p >Hindawi publica revistas revisadas por pares, de acceso abierto en muchas áreas de la ciencia, la tecnología y la medicina, así como varias áreas de las ciencias sociales. Las revistas de Hindawi están indexadas en las principales bases de datos, incluyendo la Web of Science, Scopus, PubMed, INSPEC, Mathematical Reviews y Chemical Abstracts.
                                <a href="https://www.hindawi.com/journals/"> (Link)</a>
                            </p>
                        </div>
                        <div class="sec28-cont">
                                <h5>Worldwide Science</h5>
                        </div>
                        <div class="sec28-cont">
                            <p >Plataforma compuesta de bases de datos y portales científicos nacionales e internacionales. Proporciona una ventana de búsqueda de bases de datos de todo el mundo. Multilingüe.
                                <a href="http://worldwidescience.org/"> (Link)</a>
                            </p>
                        </div>
                        <div class="sec28-cont">
                                <h5>AMSER</h5>
                        </div>
                        <div class="sec28-cont">
                            <p >AMSER (Matemáticas Aplicadas y la Ciencias de la Educación de la UAB) es un portal de recursos y servicios educativos construidos específicamente para su uso por los Institutos Técnicos Superiores y Comunitarios, pero de acceso abierto al público. Amser está financiado por la National Science Foundation (NSF) como parte de la National Science Digital Library , y está siendo creado por un equipo de socios de proyectos dirigidos por internet scout.
                                <a href="https://amser.org/index.php?P=Home"> (Link)</a>
                            </p>
                        </div>
                        <div class="sec28-cont">
                                <h5>DOAB</h5>
                        </div>
                        <div class="sec28-cont">
                            <p >	El objetivo principal de Doab es aumentar la capacidad de descubrimiento de libros de acceso abierto.
                                El directorio está abierto a todos los editores que publican libros académicos y estén revisados por pares, a condición de que estas publicaciones sean de acceso abierto y cumplan con las normas académicas.
                                <a href="http://www.doabooks.org/doab?uiLanguage=en"> (Link)</a>
                            </p>
                        </div>
                        <div class="sec28-cont">
                                <h5>REDINED</h5>
                        </div>
                        <div class="sec28-cont">
                            <p >Redined es una red de información educativa que recoge investigaciones, innovaciones y recursos producidos en España. Es un proyecto colaborativo del Ministerio de Educación, Cultura y Deporte y de las comunidades autónomas a través de sus consejerías o departamentos de Educación.
                                <a href="http://redined.mecd.gob.es/"> (Link)</a>
                            </p>
                        </div>
                        <div class="sec28-cont">
                                <h5>ERIC</h5>
                        </div>
                        <div class="sec28-cont">
                            <p >	ERIC Contiene más de 700.000 citas, resúmenes y en algunos casos el texto completo de artículos de revistas, ponencias de congresos, informes técnicos, programas educativos y otros documentos de literatura gris. Es un sistema de información patrocinado por el Departamento de Educación de los Estados Unidos, que produce la base de datos bibliográfica nacional.
                                <a href="http://bddoc.csic.es:8080/"> (Link)</a>
                            </p>
                        </div>
                        <div class="sec28-cont">
                                <h5>ISOC</h5>
                        </div>
                        <div class="sec28-cont">
                            <p >ISOC recoge la producción científica española en el área de las ciencias sociales y las humanidades desde 1975. Contiene artículos de revistas, actas de congresos, compilaciones, monografías e informes.
                                <a href="https://indices.csic.es/"> (Link)</a>
                            </p>
                        </div>
                        <div class="sec28-cont">
                                <h5>PROCOMÚN</h5>
                        </div>
                        <div class="sec28-cont">
                            <p >	Espacio destinado a usos educativos y de aprendizaje, fundamentalmente por parte de la comunidad docente y el alumnado, pero también por el público en general. Todos podrán buscar, consultar y descargar objetos de aprendizaje en distintos formatos.
                                <a href="https://procomun.educalab.es/es/"> (Link)</a>
                            </p>
                        </div>
                        <div class="sec28-cont">
                                <h5>MANES</h5>
                        </div>
                        <div class="sec28-cont">
                            <p >Base de datos que recopila registros bibliográficos de manuales escolares producidos en España, Portugal y América Latina desde principios del siglo XIX.
                                <a href="http://www.centromanes.org:8080/"> (Link)</a>
                            </p>
                        </div>
                        <div class="sec28-cont">
                                <h5>RACO</h5>
                        </div>
                        <div class="sec28-cont">
                            <p >Repositorio cooperativo desde el que se pueden consultar, en acceso abierto, los artículos a texto completo de revistas científicas, culturales y académicas catalanas.
                                <a href="http://www.raco.cat/index.php/raco"> (Link)</a>
                            </p>
                        </div>
                        <div class="sec28-cont">
                                <h5>MICROSOFT ACADEMIC SEACH</h5>
                        </div>
                        <div class="sec28-cont">
                            <p >Con una base de más de 120 millones de publicaciones, este motor emplea la búsqueda semántica para proporcionar los resultados más relevantes en función de los criterios indicados.
                                <a href="https://academic.microsoft.com/"> (Link)</a>
                            </p>
                        </div>
                        <div class="sec28-cont">
                                <h5>EDUCATECA</h5>
                        </div>
                        <div class="sec28-cont">
                            <p >Tiene más de 130.000 recursos para todos los niveles educativos y áreas del conocimiento, que puedan localizarse mediante la caja de búsqueda, a través de un navegador temático o navegando por índices.
                                <a href="http://www.educateca.com/"> (Link)</a>
                            </p>
                        </div>
                        <div class="sec28-cont">
                                <h5 style="font-size:13px;">OPEN ACCESS LIBRARY (OALIB)</h5>
                        </div>
                        <div class="sec28-cont">
                            <p >OALIB es un portal que actualmente alberga enlaces y metadatos a más de 4.228.334 artículos de acceso abierto que abarcan una amplia gama de disciplinas académicas. Todos los artículos de texto completo de sus resultados de búsqueda son gratuitos para descargar.
                                <a href="http://www.oalib.com/"> (Link)</a>
                            </p>
                        </div>
                        <div class="sec28-cont">
                                <h5 style="font-size:13px;">REGISTRY OF OPEN ACCESS REPOSITORIES (ROAR)</h5>
                        </div>
                        <div class="sec28-cont">
                            <p >OAR es un directorio de repositorios de acceso abierto. El objetivo de ROAR es promover el desarrollo del acceso abierto proporcionando información oportuna sobre el crecimiento y el estado de los repositorios en todo el mundo.
                                <a href="http://roar.eprints.org/"> (Link)</a>
                            </p>
                        </div>
                        <div class="sec28-cont">
                                <h5>REPOSITORIO DIGITAL DE CORFO</h5>
                        </div>
                        <div class="sec28-cont">
                            <p >Este Repositorio contiene la historia de Corfo, relatada en fotografías y memorias; algunos de los estudios y evaluaciones que contribuyen a la implementación de las políticas públicas encomendadas a la Corporación y, finalmente, el resultado de este esfuerzo constante, plasmados en los proyectos realizados por el sector productivo nacional.
                                <a href="http://repositoriodigital.corfo.cl/"> (Link)</a>
                            </p>
                        </div>
                     </div>
                </div>

                <!-- Sección 3-->
                <div class="inv-titulo">
                        <h3><b> Manuales de Estilo </b></h3>
                </div>

                <div class="inv-sec3">

                        <div class="inv-sec31">
                         <h6 style="font-weight: 800; margin-left:10px;">Citas y Referencias Bibliográficas </h6>
                         <p style="margin-bottom:40px;"> 
                                Las citas y referencias bibliográficas son descripciones muy resumidas y normalizadas de documentos que contienen información.
                                En general, se considera que las citas son las llamadas que hay en un texto a otros documentos. Los documentos citados se especifican con más detalle en las referencias bibliográficas.
                                Los documentos de los que se pueden hacer citas son múltiples así como las formas que pueden tener las citas y referencias también lo son. Dependiendo del tipo de trabajo, de la revista de publicación o de la comunidad científica con la que se trabaja, la cita debe ajustarse a unas normas determinadas, a un estilo de citas.</p>
                        </div>
                        <div class="inv-sec32">
                            <div class="normas">
                                    <h6 style="font-weight: 800; margin-left:10px;">Norma ISO 690 </h6>
                                    <p> 
                                     La manera de realizar citas y referencias bibliográficas está normalizada en ISO (Organización Internacional de Normalización) y UNE (normas españolas a cargo de la Asociación Española de Normalización AENOR).</p>
                                     <h6 style="font-weight: 800; margin-left:10px;margin-top:30px;">Norma UNE-ISO 690:2013  </h6>
                                     <p>Es la versión oficial, en español, de la norma europea ISO 690:2010 </p>
                                    <p> <a href=" ">Existencia en Sistema de Bibliotecas</a></p>
                            </div>
                            <div class="normas">
                                    <h6 style="font-weight: 800; margin-left:10px;">Norma ISO 690:2010  </h6>
                                    <p> 
                                            Proporciona las directrices para la preparación de referencias bibliográficas y para las citas en obras que no son bibliografías. Contempla monografías, publicaciones seriadas, contribuciones, patentes, materiales cartográficos, recursos electrónicos de información (incluidos los programas informáticos y bases de datos), música, materiales sonoros grabados, grabados, fotografías, obras gráficas y audiovisuales e imágenes en movimiento. No se aplica a las citas automatizadas (machine parsable citations) ni a las citas legales, que tienen sus propias normas. La ISO 690:2010 no prescribe un particular estilo de cita ni especifica directrices de estilo para composición de documentos científicos, puntuación, abreviaturas, etc. <a href="http://werken.ubiobio.cl/html/downloads/ISO_690/Guia_Breve_ISO690-2010.pdf"> (Guía Breve)</a> </p>
                                            <p style="padding-top:px;"> Versión Digital: <a href="http://www.inncoleccion.cl">http://www.inncoleccion.cl</a></p>
                                            <p>Para consultar la norma en su versión digital, solicite el acceso en la Sección Referencia/Hemeroteca de su Biblioteca.</p>
                            </div>

                        </div>

                        <div class="inv-sec33">
                            <div class="inv-estilos">
                                    <h6 style="font-weight: 800; margin-left:10px;">Estilo APA </h6>
                                    <p> 
                                            Es el estilo de citas bibliográficas oficial de la American Psychological Association y establece el formato para todo tipo de citas y documentos en Psicología y Ciencias Sociales. Creado en 1929 contempla la estructura de los documentos, longitud, puntuación, abreviaturas, cuadros, partes del manuscrito  y citas bibliográficas. <a href=""> (Guía Breve)</a> </p>

                                    <img src="{!!asset('images/apaimagen.gif')!!}"  style="margin-left:10px; float:left;margin-right:15px;" alt="">
                                    <p style="margin-top:50px;">American Psychological Association</p>
                                         <p > <a href=""> APA Style Guide to Electronic References. Sixth Edition, 2012. </a></p>   
                                           <p style="font-size:13px;">* Vínculo al texto completo en PDF
                                                Sólo descargable desde la red de la universidad.
                                                Requiere autenticación con los datos de su cuenta
                                                de biblioteca.</p> 
                            </div>
                            <div class="inv-estilos">
                      <header><h6 style="font-weight: 800; margin-left:10px;">Estilo Chicago-Deusto </h6> </header>              
                                    <p> 
                                            Desde la 1° edición del Manual de Estilo de Chicago, en 1906, hasta la decimosexta, esta publicación ha ido recogiendo en sus páginas la evolución tecnológica del proceso editorial. Deusto se incorpora el 2013 tomando como punto de partida la edición de 2010, convenientemente actualizada y adaptada. Esta primera edición del Manual de Estilo Chicago-Deusto, además de criterios técnicos y normas lingüísticas, recoge la experiencia del sector editorial universitario con la intención de ofrecer una obra de referencia en la edición científica en español. 
Para bibliografías debe revisar la tercera parte del texto impreso, Documentación, tanto en capítulos 14, Notas y Bibliografía, y 15, Citas autor-año los que se han enriquecido con nuevos ejemplos tomados de los textos españoles, muchos de ellos publicados por la Universidad de Deusto con la intención de acercarse a los textos científicos en nuestro idioma.<a href=""> (Guía Breve) </a> </p>
<p><a href=""> Existencia Sistemas de Bibliotecas </a> </p>
                            </div>

                            <div class="inv-estilos">
                                    <h6 style="font-weight: 800; margin-left:10px;margin-top:10px;">Estilo MLA</h6>
                                    <p> 
                                            
Es el estilo de la Modern Language Association, utilizado para las humanidades. MLA Style indica no sólo el estilo para hacer las citas sino también el estilo para escribir: tipografía, tamaño, calidad de papel, formato de párrafos, de enlaces, puntuación, especialmente para los escritos de lenguas modernas, crítica literaria, escritos culturales. <a href=""> (Guía Breve)</a> </p>
                                        <p><a href=""> Existencia Sistemas de Bibliotecas </a> </p>
      
                            </div>
                            <div class="inv-estilos">
                                    <h6 style="font-weight: 800; margin-left:10px;margin-top:10px;">Estilo Vancouver </h6>
                                    <p> 
                                            
Creado en 1978, es el estilo establecido por el International Committee of Medical Journal Editors (ICMJE). Es conocido igualmente por Uniform Requirements for Manuscripts Submitted to Biomedical Journals o simplemente por Uniform Requirements o por URM. Es una norma de la ANSI y como tal es usada por las principales revistas de Medicina, además de la National Library of Medicine (NLM) desde 1979 y por Pubmed. El objetivo es tanto científico como ético. URM procura establecer un modo claro, sencillo y pertinente para la distribución de estudios e informes biomédicos. El estilo Vancouver (URM) establece normas y recomendaciones para la publicación de artículos científicos, citas bibliográficas, ediciones, revisiones y para los títulos abreviados de las revistas, que deben ser los del Index Medicus. <a href=""> (Guía Breve) </a> </p>
<p><a href=""> Existencia Sistemas de Bibliotecas </a> </p>
                            </div>
                        </div>
 

                </div>


    </div>

    <script src="{{asset('js/investigacion.js')}}"></script>

    @endsection