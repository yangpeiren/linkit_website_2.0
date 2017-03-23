<?php get_header(); ?>
  <div id="main">
    <div id="content">
      <div class="search-title"><strong>Suchergebnisse f&uuml;r: <span class="category-name"><?php echo $s ?></span></strong></div>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <div class="article">
	    <h2 class="title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
	    <?php the_content(); ?>
	  </div> <!-- .article -->
        <?php endwhile; else: ?>
          <p><?php _e('Entschuldigung. Deine Suche ergab keine Treffer.'); ?></p>
	<?php endif; ?>
      </div><!-- #content -->
		
      <div id="sidebar">
        <?php get_sidebar(); ?>
      </div><!-- #sidebar -->
					
      <div class="clear"></div>
  </div><!-- #main -->
<?php get_footer(); ?>