<?php get_header(); ?>
<div class="pagina-author">
<div class="container">

<div class="row">
<p class="titulo-autor">Publicaciones de <strong><?php echo get_the_author(); ?></strong></p>


<?php if ( have_posts() ) : ?>


    <?php while ( have_posts() ) : the_post(); ?>
<div class="col-sm-12">
      <article>
        <div class="imagen-art-autor">
              <div class="imagen-destacada-art-autor"><?php if ( has_post_thumbnail() ) {	the_post_thumbnail();} ?></div> 
        </div>
        <div class="cabecera-author">
          <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
          <time datatime="<?php the_time('Y-m-j'); ?>"><?php the_time('j F, Y'); ?></time>
          <?php the_category (); ?>
        </div>
        <!--<?php the_excerpt(); ?>-->
        <?php echo get_excerpt(240); ?>
        <div class="pie-author">
            <address>Por <?php the_author_posts_link() ?></address>
        </div>
      </article>
</div>
    <?php endwhile; ?>


<?php else : ?>
  <p><?php _e('Ups!, no hay entradas.'); ?></p>
<?php endif; ?>


</div>

<div class="paginacion">
    <div class="row">

     <div class="col-sm-3">
          <span class="in-left"><?php next_posts_link('« Entradas antiguas'); ?></span>
     </div>
     <div class="col-sm-6"></div>
     <div class="col-sm-3">
          <span class="in-right"><?php previous_posts_link('Entradas más recientes »'); ?></span>
     </div>
    </div>
</div>


</div>
</div>

<?php get_footer(); ?>