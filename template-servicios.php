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
	<h1>Servicios</h1>
</div>
<section class="container serviciospage">
<ul class="nav nav-tabs row hidden-xs">
    <?php
      $loop = new WP_Query( array( 'post_type' => 'servicio','order' => 'ASC') );
      $count=0;
        if ( $loop->have_posts() ) :
          while ( $loop->have_posts() ) : $loop->the_post(); 
            $count=$count+1;
              if ($count==1) {
                echo '<li class="active col-sm-3 text-center"><a class="pestana" data-toggle="tab" href="#servicio';echo $count;echo'">'; 
                the_post_thumbnail(array('class'=>'img-responsive')); ?>
                <div class="tabtext"><?php echo get_the_title();?></div>
                <?php echo '</a><hr class="hrserv"></li>';
              } 
              else {
                echo '<li class="col-sm-3 text-center"><a class="pestana" data-toggle="tab" href="#servicio';echo $count;echo'">'; 
                the_post_thumbnail(array('class'=>'img-responsive')); ?>
                <div class="tabtext"><?php echo get_the_title();?></div>
                <?php echo '</a><hr class="hrserv"></li>';
              } 
          endwhile;
        endif;
      ?>
</ul>

<div class="tab-content serv-content hidden-xs">

    <?php
      $loop = new WP_Query( array( 'post_type' => 'servicio','order' => 'ASC') );
      $count=0;
        if ( $loop->have_posts() ) :
          while ( $loop->have_posts() ) : $loop->the_post(); 
            $count=$count+1;
              if ($count==1) {
                echo '<div id="servicio';echo $count;echo'" class="tab-pane fade in active">'; ?>
                <h2 class="text-uppercase"><?php echo get_the_title();?></h2>
                <?php echo get_the_content();
                echo '</div>';
              } 
              else {
                echo '<div id="servicio';echo $count;echo'" class="tab-pane fade">'; ?>
                <h2 class="text-uppercase"><?php echo get_the_title();?></h2>
                <?php echo get_the_content();
                echo '</div>';
              } 
          endwhile;
        endif;
      ?>
</div>

<div class="panel-group visible-xs" id="accordion" role="tablist" aria-multiselectable="true">
  
    <?php
      $loop = new WP_Query( array( 'post_type' => 'servicio','order' => 'ASC') );
      $count=0;
        if ( $loop->have_posts() ) :
          while ( $loop->have_posts() ) : $loop->the_post(); 
            $count=$count+1;
              if ($count==1) {
                ;?>
                <div class="panel panel-default">
                   <div class="panel-heading" role="tab" id="heading<?php echo $count;?>">
                    <h4 class="panel-title">
                      <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $count;?>" aria-expanded="false" aria-controls="collapse<?php echo $count;?>">
                        <?php echo get_the_title();?>
                      </a>
                    </h4>
                   </div>
                  <div id="collapse<?php echo $count;?>" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading<?php echo $count;?>">
                <div class="panel-body"> 
                  <?php echo get_the_content();?>
                </div>
              </div>
              <?php } 
              else { ;?>
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="heading<?php echo $count;?>">
                    <h4 class="panel-title">
                      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $count;?>" aria-expanded="false" aria-controls="collapse<?php echo $count?>">
                        <?php echo get_the_title(); ?>
                      </a>
                    </h4>
                  </div>
                  <div id="collapse<?php echo $count?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?php echo $count;?>">
                    <div class="panel-body">
                      <?php echo get_the_content();?>
                    </div>
                  </div>
              <?php } 
          endwhile;
        endif;
      ?>
</div>
</section>