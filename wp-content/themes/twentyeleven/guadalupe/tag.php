<?php get_header();?>

<div id="mainContent">
	<h2 id="novedades-title"><?php single_tag_title(); ?></h2>
	<?php rewind_posts(); query_posts($query_string . '&order=DESC'); while (have_posts()) : the_post(); ?> 
		<div class="post">       
			<h2 class="titulos">
				<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
			</h2>
			<span class="postDate"><?php the_time('l j F Y'); ?></span>
			<a href="<?php the_permalink() ?>"><?php the_post_thumbnail(array( 110,110 )) ?></a>
			<?php the_content(__('(more...)')); ?>
		</div>	
	
	<?php endwhile;	?>
	
	<h2 class="sideTitle">Archivo</h2>
	<ul class="sideLink">
		<?php wp_get_archives('type=monthly&limit=12'); ?>
	</ul>
	<h2 class="sideTitle">Etiquetas</h2>
	<ul class="sideLink">
		<?php $tags = get_tags();
			if ($tags) {
				foreach ($tags as $tag) {
				echo '<li><a href="' . get_tag_link( $tag->term_id ) . '" title="' . sprintf( __( "$tag->name" ), $tag->name ) . '" ' . '>' . $tag->name.'</a> </li>';}
			}
		?>
	</ul>
</div>

<?php get_footer(); ?>