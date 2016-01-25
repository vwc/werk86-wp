<?php get_header(); ?>
    <div class="page-container" id="team">
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
                    <li><a href="http://werk86.de/?p=4" id="one">COACHING</a></li>
                    <li><a href="http://werk86.de/?p=6" id="two">STRATEGISCHE<br/>KOMMUNIKATION</a></li>
                    <li><a href="http://werk86.de/?p=8" id="three">TEAM</a></li>
                    <li><a href="http://werk86.de/?p=10" id="four">PARTNER</a></li>
                    <li><a href="http://werk86.de/?p=12" id="five">AKTUELLES</a></li>
                    <li><a href="http://werk86.de/?p=14" id="six">REFERENZEN</a></li>
                    <li><a href="http://werk86.de/?p=16" id="seven">KONTAKT</a></li>
                </ul>
                <ul class="social">
                  <!--  <li><a href="#"><i class="fa fa-xing"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li> -->
                    <li><a href="https://www.facebook.com/werk86/?fref=ts"><i class="fa fa-facebook"></i></a></li>
                </ul>
            </div> <!-- END .sidebar-offcanvas -->
<!-- main area -->
<div class="col-xs-12 col-sm-9 main-page">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <h1 class="entry-title"><?php the_title(); ?></h1>
        <div class="headerpic"></div>
            <div class="entry">
<?php if (has_post_thumbnail()) {
  the_post_thumbnail(); 
}?>
            <?php the_content(); ?>
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-4">
            <a href="stefan-dalessio" id="coach1">
                <div class="coach-header"></div>
                <h3>Stefan D'Alessio</h3>
                <p>
                Markenentwicklung,<br />Strategische Kommunikation
                </p>
            </a>                
        </div>
        <div class="col-xs-12 col-sm-4">
            <a href="/dagmar-jesussek" id="coach2">
                <div class="coach-header"></div>
                <h3>Dagmar Jesussek</h3>
                <p>Körpersprache,<br />Stimme</p>
            </a>                
        </div>
        <div class="col-xs-12 col-sm-4">
            <a href="/jochen-mack" id="coach3">
                <div class="coach-header"></div>
                <h3>Jochen Mack</h3>
                <p>
    Public Relations,<br />Krisenkommunikation
                </p>
            </a>                   
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-4">
            <a href="/christian-schmidt" id="coach4">
                <div class="coach-header"></div>
                <h3>Christian Schmidt</h3>
                <p>
    Liquiditätscoaching,<br />Strategische Finanzplanung
                </p>
            </a>                
        </div>
        <div class="col-xs-12 col-sm-4">
            <a href="/lena-pilz" id="coach5">
                <div class="coach-header"></div>
                <h3>Lena Pilz</h3>
                <p>
    Gesunder Arbeitsplatz,<br />Stiftungsorganisation
                </p>
            </a>                
        </div>
        <div class="col-xs-12 col-sm-4">
            <a href="/brigitta-stegherr" id="coach6">
                <div class="coach-header"></div>
                <h3>Brigitta Stegherr</h3>
                <p>Bewerbungstraining,<br />Assistenz</p>
            </a>                   
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-4">
            <a href="/sandra-gutmann" id="coach7">
                <div class="coach-header"></div>
                <h3>Sandra Gutmann</h3>
                <p>Persönlichkeitstraining,<br />Verkauf und Vertrieb</p>
            </a>                
        </div>
        <div class="col-xs-12 col-sm-4">
            <a href="/team/christoph-mann" id="coach8">
                <div class="coach-header"></div>
                <h3>Christoph Mann</h3>
                <p>Analyse,<br />Projektsteuerung</p>
            </a>                
        </div>
        <div class="col-xs-12 col-sm-4">
            <a href="/ulrich-oberndorfer" id="coach9">
                <div class="coach-header"></div>
                <h3>Ulrich Oberndorfer</h3>
                <p>
    Strategieentwicklung,<br />Strategisches Marketing
                </p>
            </a>                   
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-4">
            <a href="/susanne-beck" id="coach10">
                <div class="coach-header"></div>
                <h3>Susanne Beck</h3>
                <p>Businessknigge,<br />Entspannungstraining</p>
            </a>                
        </div>
        <div class="col-xs-12 col-sm-4">
            <a href="/paul-peteanu" id="coach11">
                <div class="coach-header"></div>
                <h3>Paul Peteanu</h3>
                <p>Prozessmanagement,<br />Auditdurchführung</p>
            </a>                
        </div>
        <div class="col-xs-12 col-sm-4">
            <a href="/sabine-schmidt" id="coach12">
                <div class="coach-header"></div>
                <h3>Sabine Schmidt</h3>
                <p>Supervision,<br />Persönlichkeitsentwicklung</p>
            </a>                   
        </div>
    </div>
</div>

            </div>
            <?php endwhile;  ?>
            <?php endif; ?>
<?php get_footer();?>
