<article <?php post_class(); ?>>
  	<a href="<?php the_permalink(); ?>" class="pull-left span2">
  		<?php echo get_the_post_thumbnail(NULL, 'thumbnail', array('class' => 'media-object') ); ?>
  	</a>
  	<div class="media-body span10">
		<header>
			<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<?php get_template_part('templates/entry-meta'); ?>
		</header>
		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div>
	</div>
</article>
