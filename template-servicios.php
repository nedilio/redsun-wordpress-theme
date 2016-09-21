<?php
/**
 * Template Name: Servicios Template
 */
?>

<!-- <?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
 -->
<div class="pageheader text-center">
  <div class="overlayheader"></div>
  <h1 class="headertitle">Servicios</h1>
</div>
<section class="container serviciospage">
<ul class="nav nav-tabs row hidden-xs">
    <?php
      $loop = new WP_Query( array( 'post_type' => 'servicio','order' => 'ASC') );
      $count=0;
      $class="";
        if ( $loop->have_posts() ) :
          while ( $loop->have_posts() ) : $loop->the_post(); 
            if ($count==0) {
                $class="active";
            } else {
                $class=" ";
            }?>
                <li class="<?php echo $class;?> col-sm-3 text-center">
                  <a class="pestana" data-toggle="tab" href="#servicio<?php echo $count;?>">
                   <?php the_post_thumbnail(array('class'=>'img-responsive')); ?>
                   <div class="tabtext"><?php echo get_the_title();?></div>
                  </a><hr class="hrserv">
                </li>
              <?php 
$count++;
          endwhile;
        endif;
      ?>
</ul>

<div class="tab-content serv-content hidden-xs">

    <?php
      $loop = new WP_Query( array( 'post_type' => 'servicio','order' => 'ASC') );
      $count=0;
      $class="";
        if ( $loop->have_posts() ) :
          while ( $loop->have_posts() ) : $loop->the_post(); 
            if ($count==0) {
                $class="in active";
                $cajasflechas='<div class="row">
              <div class="col-sm-4">
                <div class="cajas text-center">
                  <h3 class="textcajas">Ubicación de productos y proveedores</h3>
                  <div class="flechagris"></div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="cajas text-center">
                  <div class="flechawhite"></div>
                  <h3 class="textcajas">Ubicación de productos y proveedores</h3>
                  <div class="flechagris"></div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="cajas text-center">
                  <div class="flechawhite"></div>
                  <h3 class="textcajas">Ubicación de productos y proveedores</h3>
                </div>
              </div>
            </div>';
            } else {
                $class=" ";
                $cajasflechas=' ';
            }?>
                
                <div id="servicio<?php echo $count;?>" class="tab-pane fade <?php echo $class;?>">
                  <?php echo $cajasflechas; ?>
                  <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                  <h2 class="text-uppercase">
                    <?php echo get_the_title();?>
                  </h2>
                    <?php echo get_the_content();?>
                  </div>
                  </div>
                </div>
              <?php 
$count++;
          endwhile;
        endif;
      ?>      
</div>

<div class="panel-group visible-xs" id="accordion" role="tablist" aria-multiselectable="true">
  
    <?php
      $loop = new WP_Query( array( 'post_type' => 'servicio','order' => 'ASC') );
      $count=0;
$class="";
        if ( $loop->have_posts() ) :
          while ( $loop->have_posts() ) : $loop->the_post(); 
            if ($count==0) {
                $class="in";
            } else {
                $class=" ";
            }?>
                <div class="panel panel-default">
                   <div class="panel-heading" role="tab" id="heading<?php echo $count;?>">
                    <h4 class="panel-title">
                      <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $count;?>" aria-expanded="false" aria-controls="collapse<?php echo $count;?>">
                        <?php echo get_the_title();?>
                      </a>
                    </h4>
                   </div>
                  <div id="collapse<?php echo $count;?>" class="panel-collapse collapse <?php echo $class ?>" role="tabpanel" aria-labelledby="heading<?php echo $count;?>">
                   <div class="panel-body"> 
                    <?php echo get_the_content();?>
                   </div>
                 </div>
                </div>
              <?php 
$count++;
          endwhile;
        endif;
      ?>
    </div>
</section>