<?php get_header(); ?>

<div class="blog">
    <div class="container">
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-10">
<?php if ( have_posts() ) : the_post(); ?>
  
      <div class="cabecera-blog">
        <h1><?php the_title(); ?></h1>
      </div>
    <div class="imagen-destacada">
<?php
                if ( has_post_thumbnail() ) {
	the_post_thumbnail();
} 
                ?></div>            
      <p><?php the_content(); ?></p>

<?php else : ?>
  <p><?php _e('Ups!, parece que esta entrada no existe.'); ?></p>
<?php endif; ?>
                </div>
            <div class="col-sm-1"></div>
            <div class="clear"></div>
        </div>
    </div>
</div>


<?php get_footer(); ?>