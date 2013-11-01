<?php get_header();?>

<div id="mainContent">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post single">       
			<h2 class="pageTitle"><?php the_title(); ?></h2>
			<span class="postDate"><?php the_time('l j F Y'); ?></span>
			<a href="<?php the_permalink() ?>"></a>
			<?php the_content(__('Leer completo')); ?>       
		</div>		
	<?php endwhile; else: ?>
	<?php _e('No se encuentran resultados para esta búsqueda.'); ?>
	<?php endif; ?>		
</div>

<?php get_footer(); ?>