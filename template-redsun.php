<?php
/**
 * Template Name: Redsun Template
 */
?>

<section class="container">
  <div class="headerxs visible-xs"><img src="<?php echo get_home_url(); ?>/wp-content/uploads/2016/08/slider_logo.jpg" alt="" class="img-responsive"></div>
  <div id="carousel-header" class="carousel slide slideheader hidden-xs" data-ride="carousel">
  
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <?php
      $loop = new WP_Query( array( 'post_type' => 'slider','order' => 'ASC') );
      $count=0;
      $class="";
        if ( $loop->have_posts() ) :
          while ( $loop->have_posts() ) : $loop->the_post(); 
            
              if ($count==0) {
                $class="active";
              } 
              else {
                $class=" ";
                
              } ?>
                <li data-target="#carousel-header" data-slide-to="<?php echo $count;?>" class="<?php echo $class;?>"></li>
            <?php 
            $count++;
          endwhile;
        endif;
      ?>
  </ol>
  <!-- Wrapper for slides -->
    <div class="carousel-inner carousel-header" role="listbox">
      <?php
        $loop = new WP_Query( array( 'post_type' => 'slider','order' => 'ASC') );
        $count=0;
        $class="";
          if ( $loop->have_posts() ) :
            while ( $loop->have_posts() ) : $loop->the_post(); 
                if ($count==0) { 
                  $class="active";

                } 
                else {
                  $class=" "; 
                  $botonslider='<button type="button" class="btn boton hidden-xs">ir a servicios</button>';   }
            
            ?>
              <div class="item <?php echo $class;?>">
                <?php the_post_thumbnail('tamano_slider', array('class'=>'imagenslider')); //, array('class'=>'')?>
                <div class="carousel-caption captionheader hidden">
                  <h1 class="titulocarousel"><?php echo get_the_title(); ?></h1>
                  <p class="hidden-xs"><?php echo get_the_content(); ?></p>
                  <?php echo $botonslider; ?>
                </div>
              </div>          

            <?php 
              $count++;
            endwhile;
          endif;
      ?>


  <!-- Controls -->
    <a class="left carousel-control" href="#carousel-header" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-header" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</section>

<section class="info" id="parawaypoint">
  <div class="container">
    <div class="col-sm-4 text-center">
      <h2 class="text-uppercase"><strong>quienes somos</strong></h2>
      <hr class="hrrojo">
      <p>Representantes de fábricas Chinas a nivel Mundial</p>
      <p>Contamos con un equipo de especialista de profesionales en el área comercial y de negocios internacionales responsables, activos y comprometidos con el interés de nuestros clientes.</p>
    </div>

    <div class="col-sm-4 text-center">
      <h2 class="text-uppercase"><strong>por que redsun?</strong></h2>
      <hr class="hrrojo">
      <p>Porque atendemos de una manera rápida, eficiente y segura a nuestros clientes, ahorrándoles tiempo, recursos y minimizamos el riesgo en su inversión. Con nosotros usted podrá importar desde China con seguridad y confianza</p>
      <p><em><strong>Somos tus ojos en China</strong></em></p>
    </div>

    <div class="col-sm-4 text-center">
      <h2 class="text-uppercase"><strong>mision</strong></h2>
      <hr class="hrrojo">
      <p>Ofrecer óptimos servicios en materia de asesoría, logística y operaciones, satisfaciendo las necesidades de nuestros clientes y garantizando su exito en las importaciones desde el continente asiático.</p>
    </div>
  </div>
</section>

<section class="testimonial container-fluid">
<div class="row">
  <div class="col-sm-6 no-padding" style="background-image: url(<?php echo get_template_directory_uri(); ?>/dist/images/testimonios.jpg); background-size: cover; height: 400px;">
    <!-- <img src="<?php echo get_template_directory_uri(); ?>/dist/images/testimonios.jpg" alt="testimonials" class="img-responsive"> -->
  </div>
  <div class="col-sm-6 no-padding">
    <div id="carousel-testimonial" class="carousel slide slidetestimonial" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators indicators-testimonial">
        <?php      
          $loop = new WP_Query( array( 'post_type' => 'testimonio','order' => 'ASC') );
        $count=0;
        $class="";
          if ( $loop->have_posts() ) :
            while ( $loop->have_posts() ) : $loop->the_post(); 
              
                if ($count==0) {
                  $class="active";
                } 
                else {
                  $class=" ";
                } ?>
                  <li data-target="#carousel-header" data-slide-to="<?php echo $count;?>" class="<?php echo $class;?>"></li>
              <?php 
              $count++;
            endwhile;
          endif;
        ?>
      </ol>
    
      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
    
            <?php
            
              $loop = new WP_Query( array( 'post_type' => 'testimonio','order' => 'ASC') );
          $count=0;
          $class="";
            if ( $loop->have_posts() ) :
              while ( $loop->have_posts() ) : $loop->the_post(); 
                  if ($count==0) { 
                    $class="active";
    
                  } 
                  else {
                    $class=" ";    }
              
              ?>
                <div class="item <?php echo $class;?>">
    <!--                   <div class="col-sm-6 no-padding">
                      <?php the_post_thumbnail('full', array('class'=>'img-responsive'));?>
                    </div> -->
                    <div class="carousel-caption caption-testimonial">
                      <h1 class="titulocarousel text-left"><?php echo get_the_title(); ?></h1>
                      <p class="text-left"><?php echo get_the_content(); ?></p>
                      <small><p class="text-left">Lorem ipsum dolor sit amet, consectetur.</p></small>
                    </div>
                </div>          
    
              <?php 
                $count++;
              endwhile;
            endif;
        ?>
            
    
      </div>
      <!-- Controls -->
      <a class="controlbackground left carousel-control" href="#carousel-testimonial" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="controlbackground right carousel-control" href="#carousel-testimonial" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
</div>
</section>

<section class="serviciossection hidden">
  <div class="container">
    <div class="row">
      <div class="col-sm-8 col-md-offset-2">
        <?php
        
          $loop = new WP_Query( array( 'post_type' => 'servicio','order' => 'ASC') );
          $count=0;
          if ( $loop->have_posts() ) :
          while ( $loop->have_posts() ) : $loop->the_post(); 
          $count=$count+1;
        ?>
        
        <?php if ($count%2==0) {?>
<div class="row animated animar-derecha">
  <div class="col-xs-9">
    <h2><?php echo get_the_title() ;?></h2>
    <p class="text-justify"><?php echo get_the_excerpt(); ;?></p>
    <a class="btn boton pull-left" href="<?php echo get_home_url(); ?>/servicios" role="button">ir a servicios</a>
  </div>
  <div class="col-xs-3">
    <?php the_post_thumbnail('full', array('class'=>'img-responsive'));?>
  </div>
</div>
<hr class="hr-serv">
<?php
          } 
          else { ?>
    <div class="row animated animar-izquierda">
      <div class="col-xs-3"> 
        <?php the_post_thumbnail('full', array('class'=>'img-responsive'));?>
      </div>
      <div class="col-xs-9">
        <h2><?php echo get_the_title() ;?></h2>
        <p class="text-justify"><?php echo get_the_excerpt(); ;?></p>
        <a class="btn boton pull-right" href="<?php echo get_home_url(); ?>/servicios" role="button">ir a servicios</a>
      </div>
    </div>
<hr class="hr-serv">
        <?php } 
          
        
         endwhile;
        
        endif;
        
        ?>

      </div>
    </div>
  </div>
</section>