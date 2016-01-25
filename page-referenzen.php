<?php get_header(); ?>
    <div class="page-container" id="referenzen">
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
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <h1 class="entry-title"><?php the_title(); ?></h1>
        <div class="headerpic"></div>
            <div class="entry">
<?php if (has_post_thumbnail()) {
  the_post_thumbnail(); 
}?>
            <?php the_content(); ?>

            </div>
            <?php endwhile;  ?>
            <?php endif; ?>
<?php get_footer();?>
