<?php get_header(); ?>
    <div class="page-container">
    <!-- top navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="offcanvas" data-target=".sidebar-nav">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/"></a>
            </div> <!-- END .navbar-header -->
        </div> <!-- END .container -->
    </div> <!-- END .navbar -->
    
    <div class="container">
        <div class="row row-offcanvas row-offcanvas-left">
            <!-- sidebar -->
            <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
                <a href="/"><div class="logo"></div></a>
                <ul class="nav">
                    <li><a href="coaching" id="one">COACHING</a></li>
                    <li><a href="strategische-kommunikation" id="two">STRATEGISCHE<br/>KOMMUNIKATION</a></li>
                    <li><a href="team" id="three">TEAM</a></li>
                    <li><a href="partner" id="four">PARTNER</a></li>
                    <li><a href="aktuelles" id="five">AKTUELLES</a></li>
                    <li><a href="referenzen" id="six">REFERENZEN</a></li>
                    <li><a href="kontakt" id="seven">KONTAKT</a></li>
                </ul>
                <ul class="social">
                  <!--  <li><a href="#"><i class="fa fa-xing"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li> -->
                    <li><a href="https://www.facebook.com/werk86/?fref=ts"><i class="fa fa-facebook"></i></a></li>
                </ul>
            </div> <!-- END .sidebar-offcanvas -->
            <!-- main area -->
            <div class="col-xs-12 col-sm-9 main">
                <div class="jumbotron">
                    <h1>WIE. IMMER. ANDERS</h1>
                    <p class="lead">
                        <span class="blue">WIE.</span> POTENZIALE IN RELEVANZEN TRANSFORMIEREN<br />
                        <span class="blue">IMMER.</span> BEW&Auml;HRTES UND NEUES ZUR STRATEGIE ENTWICKELN<br />
                        <span class="blue">ANDERS.</span> STRATEGIE KLAR UND ERKENNBAR MACHEN
                    </p>
                <div id="galerie">

   <?php echo do_shortcode('[huge_it_slider id="2"]'); ?>

                    </div>
                </div>

                <div class="row" id="middlerow">
                    <h1>WIE UND WAS</h1>
                    <p class="lead">Ob Organisation, Marke oder Pers&ouml;nlichkeit - wir sind neugierig auf alles, was etwas komplizierter ist und erkl&auml;rt werden muss.
Da, wo für andere die 'Verst&auml;ndnisprobleme' beginnen, f&auml;ngt f&uuml;r uns der Spa&szlig; erst an. Ernsthaft.
                    </p>
                    <div class="row">
                        <a href="coaching" id="coaching">
                        <div class="col-xs-12 col-sm-12 col-lg-6">
                            <h2>COACHING &amp; <br />BERATUNG</h2>
                            <div class="divide"></div>
                            <p>Der Blick nach innen sch&auml;rft das Bewusstsein f&uuml;r vorhandene Potentiale.
                            Wir schärfen Persönlichkeiten und Organisationen. Werden Sie zu Ihrer eigenen Marke!</p>
                        </div>
                        </a>
                        <a href="strategische-kommunikation" id="kommunikation">
                        <div class="col-xs-12 col-sm-12 col-lg-6">
                            <h2>STRATEGISCHE<br />KOMMUNIKATION</h2>
                            <div class="divide"></div>
                            <p>Der Blick auf das Ganze er&ouml;ffnet neue Perspektiven f&uuml;r eine langfristige Entwicklung.
                            Wir entwickeln mit Ihnen klare Konzepte für erfolgreiche Kommunikation.</p>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="row" id="bottomrow">
                    <h1>IMMER WIEDER NEU</h1>
                    <p class="lead">Wenn es um belastbare Lösungen geht, reicht ein Experte selten aus.<br />
Wir werfen 15 Experten und eine eigene Full-Service - Werbeagentur<br /> in den Ring.
So stellen wir für jede Herausforderung die passende<br /> Kompetenz-Kombination bereit. Na ja, für fast jede...
                    </p>
                    <a href="team">
                    <div class="col-xs-12 col-sm-12 col-lg-4">
                        <div class="box-header werkself"></div>
                        <h3>WERKSELF</h3>
                        <div class="divide"></div>
                        <p>Der Blick &uuml;ber den Tellerrand zeichnet Werk86 aus. Durch eingespielte interdisziplin&auml;re
                        Teams entstehen vielf&auml;ltige und belastbare Konzepte aus einem Guss.</p>
                    </div>
                    </a>
                    <a href="partner">
                    <div class="col-xs-12 col-sm-12 col-lg-4">
                        <div class="box-header netzwerk"></div>
                        <h3>NETZWERK</h3>
                        <div class="divide"></div>
                        <p>Ein Konzept braucht konsistente L&ouml;sungen. Mit unserem Netzwerk an 
                        etablierten Partnern werden Ihre Erwartungen zu fassbarer Wirklichkeit.</p>
                    </div>
                    </a>
                    <a href="aktuelles">
                    <div class="col-xs-12 col-sm-12 col-lg-4">
                        <div class="box-header werkschau"></div>
                        <h3>WERKSCHAU</h3>
                        <div class="divide"></div>
                        <p>Denken, Reden, Machen: Von der ersten Idee bis zum Ansatz - hier finden Sie aktuelle Schwerpunkte, Leuchtturm-<br />projekte, oder einfach Spa&szlig;iges.</p>
                    </div>
                    </a>
                </div>
<div class="row ref"><a href="referenzen">
    <?php logo_slider(); ?></a></div>
<?php get_footer();?>