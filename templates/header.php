<header class="banner">
<nav class="navbar navbar-default menutop">
    <div class="red-stripe hidden-xs">
    </div>
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/logo.png" alt="Logo"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse text-center" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
<!--         <li><a href="#">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Servicios</a></li>
        <li><a href="#">Otros</a></li>
        <li><a href="#">Contacto</a></li> -->
              <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav navbar-right']);
      endif;
      ?>
      </ul>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</header>