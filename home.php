<?php get_header(); ?>


<div class="blogmk-front">
    <div class="container">
        <div class="row">
<?php if ( have_posts() ) : ?>
          
  <section>
    <?php while ( have_posts() ) : the_post(); ?>
      <div class="col-sm-3"> 
      <article class="portada-articulos">
          <div class="imagen-destacada-front"><?php if ( has_post_thumbnail() ) {	the_post_thumbnail();} ?></div> 
        <div class="cabecera-blog-front">
          <h2 class="h2-blog"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        </div>
         <div class="fecha-autor">
               <div class="fecha-mk">
               <time datatime="<?php the_time('Y-m-j'); ?>"><?php the_time('j F, Y'); ?></time>
               </div>
               <div class="autor-mk">
               <address>Por <?php the_author_posts_link() ?></address>
               </div>
               <div class="clear"></div>
         </div>
       <div class="txt-intro">
        <!--<?php the_excerpt(); ?>-->
        <?php echo get_excerpt(120); ?>
       </div>
        <div class="pie-articulos-home">
            <?php the_tags('<ul><li>','</li><li>','</li></ul>'); ?>
        </div>
      </article>
          </div>
    <?php endwhile; ?>
  </section>

            
<?php else : ?>
  <p><?php _e('Ups!, no hay entradas.'); ?></p>
<?php endif; ?>
        </div>
        <div class="row">
             <div class="pagination">
                   <span class="in-left"><?php next_posts_link('« Entradas antiguas'); ?></span>
                   <span class="in-right"><?php previous_posts_link('Entradas más recientes »'); ?></span>
             </div>
        </div>
    </div>
</div>


<?php get_footer(); ?>