<?php get_header();?>
<?php /* Template Name: index */ ?>
<!-- TEMPLATE index -->
<div id="mainContent">

	<div class="col1">
		<div class="sectionResume">
			<h2 class="title sprite titleBg"><?php _e('Sobre el Colegio','Guadalupe')?></h2>
			<p><?php $page_id = get_page_by_path("quienes-somos")->ID;
					$page_data = get_page( $page_id );
					 _e($page_data->post_excerpt);
				?>
			</p>
			<div class="resumePic">
				<a href="<?php bloginfo('siteurl'); ?>/quienes-somos/"><?php _e('Conocenos más','Guadalupe') ?> >></a>
				<!--<img class="picresume" src="<?php bloginfo('template_url'); ?>/images/sobre_el_colegio_08_2012.jpg"/>-->
				<iframe class="homeSideVideo" frameborder="0" allowfullscreen="" src="http://www.youtube.com/embed/RqPLOkpu2OY?rel=0"></iframe>
			</div>
		</div>
		<div class="sectionResume">
			<h2 class="title sprite titleBg"><?php _e('La Fundación','Guadalupe') ?></h2>
			<p><?php $page_id = get_page_by_path("que-hacemos")->ID;
					$page_data = get_page( $page_id );
					_e($page_data->post_excerpt);
				?>
			</p>
			<div class="resumePic">
				<a href="<?php bloginfo('siteurl'); ?>/que-hacemos/"><?php _e('Leer más','Guadalupe')?> >></a>	
				<img class="picresume" src="<?php bloginfo('template_url'); ?>/images/la_fundacion_08_2012.jpg" />
			</div>
		</div>
		<div class="newsletter">
			<?php include (TEMPLATEPATH . '/sidebar2.php'); ?>
		</div>
		<div class="main-link">
			<a href="http://figaroschools.com/login_with_google?openid_provider=21" target="_blank">Acceso a F&iacute;garo</a>
		</div>
	</div>



     <a href="https://www.donaronline.org/fundacion-grupo-educativo-maria-de-guadalupe/sumate-a-nuestro-proyecto-con-tu-aporte-mensual" target="_blank" style="margin-left:20px"><img src="<?php echo get_option('home')?>/wp-content/uploads/2012/10/donarparaloschicos.jpg" alt="link a formulario de donacion"> </a>
    
  <!--https://www.donaronline.org/fundacion-grupo-educativo-maria-de-guadalupe/hacete-socio-de-la-fundacion-grupo-educativo-maria-guadalupe-->
	<div class="col2">


      

		<h2 class="title sprite titleBg"><?php _e('Novedades','Guadalupe') ?></h2>
		<a class="seeAll" href="<?php echo bloginfo('siteurl').'/archivo/' ?>"><?php _e('Ver todas las novedades','Guadalupe') ?></a>
		<?php query_posts($query_string . 'posts_per_page=3'); if (have_posts()) : while (have_posts()) : the_post(); ?>
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
	<!-- actualizado a nuevo servicio de donacion on line -->
	<a href="https://www.donaronline.org/fundacion-grupo-educativo-maria-de-guadalupe/sumate-a-nuestro-proyecto-con-tu-aporte-mensual" target="_blank"><img alt="dona ahora" src="http://www.mariaguadalupe.org.ar/wp-content/themes/guadalupe/images/donaahorafooter.gif" border=0></a>
</div>

<?php get_footer(); ?>