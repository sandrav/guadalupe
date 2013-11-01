<?php /* Template Name: subpage */ ?>
<?php get_header(); ?>
<?php $page = get_page($post->post_parent); ?>
<!-- TEMPLATE page-sub -->
<div id="mainContent">
	<h2 class="pageTitle"><?php the_title(); ?></h2>
	<div class="col1">				
		<?php
			if($post->post_parent)
				$children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0");
			else
				$children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0");
			if ($children) { ?>
				<ul>
					<?php echo $children; ?>
				</ul>
		<?php } ?>
	</div>		
	<div class="col2">
	<?php if (have_posts()) : ?>
		<?php $i = 1; while (have_posts() && $i < 3) : the_post(); ?>
			<?php the_content(__('Leer completo �')); ?>				
		<?php $i++; endwhile; else: ?>
		<?php _e('No se encuentran resultados para esta búsqueda.'); ?>
	<?php endif; ?>
	</div>
	<?php the_post_thumbnail(array( 260,400 )); ?>
</div>
<?php get_footer(); ?>