<?php get_header(); ?>
    <div class="page-container" id="aktuelles">
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
<div class="col-xs-12 col-sm-9 main-page">
<div class="container">
    <h1>Aktuelles</h1>
        <div class="headerpic"></div>
    <?php query_posts('category_name=Aktuelles'); ?>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="row post">

        <div class="col-xs-12 col-md-12 col-lg-4 thumb">
            <?php if (has_post_thumbnail()) {
                the_post_thumbnail(); 
                }?>
        </div>
        <div class="col-xs-12 col-md-12 col-lg-8">
            <p class="date"><?php the_time('F, Y'); ?></p>
            <a href=" <?php the_permalink(); ?>"><h2 class="entry-title"><?php the_title(); ?></h2></a>
            <div class="entry">

            <?php the_content(); ?>

            </div>  

        </div>
    </div>
            <?php endwhile;  ?>
            <?php if (function_exists('wp_pagenavi')) wp_pagenavi(); ?>
            <?php endif; ?>
                <a class="btn btn-default" href="javascript:history.back();" role="button">Zurück</a>
    </div>
<?php get_footer();?>
