<?php /* Template Name: archivo */ ?>
<?php get_header(); ?>
<!-- TEMPLATE archive -->
<div id="mainContent">
	<div class="col1">
		<h3 class="subpageTitle"><?php _e('Archivo', 'Guadalupe')?></h3>
		<ul class="">
			<?php wp_get_archives('type=monthly&limit=12'); ?>
		</ul>
		<h3 class="subpageTitle"><?php _e('Etiquetas', 'Guadalupe') ?></h3>
		<ul class="">
			<?php $tags = get_tags();
				if ($tags) {
					foreach ($tags as $tag) {
					echo '<li><a href="' . get_tag_link( $tag->term_id ) . '" title="' . sprintf( __( "$tag->name" ), $tag->name ) . '" ' . '>' . $tag->name.'</a> </li>';}
				}
			?>
		</ul>
	</div>
	
	<div class="col2">
		<?php global $more; ?>
		<?php query_posts('posts_type=posts&posts_per_page=-1'); if (have_posts()) : while (have_posts()) : the_post(); ?>
		<?php $more = 0; ?>
		<div class="post">
			<a class="postTitle" href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>
			<p class="date"><?php the_time('l j \d\e\ F \d\e\ Y'); ?></p>
			<a href="<?php the_permalink() ?>"><?php the_post_thumbnail(array( 110,110 )) ?></a>
			<div class="postContent">
				<?php the_content(__('Leer más...')); ?>
			</div>
		</div>
		<?php endwhile; else: ?>
		<?php _e('No se encuentran resultados para esta búsqueda.'); ?>
		<?php endif; ?>
	</div>
	
</div>

<?php get_footer(); ?>