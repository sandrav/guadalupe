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
				<a href="<?php bloginfo('siteurl'); ?>/quienes-somos/">Conocenos m&aacute;s >></a>
				<img class="picresume" src="<?php bloginfo('template_url'); ?>/images/sobre_el_colegio_08_2012.jpg"/>
			</div>
		</div>
		<div class="sectionResume">
			<h2 class="title sprite titleBg"><?php _e('La Fundación','Guadalupe') ?></h2>
			<p><?php $page_id = get_page_by_path("que-hacemos")->ID;
					$page_data = get_page( $page_id );
					echo ($page_data->post_excerpt);
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



     <a href="http://bit.ly/T3Nmtz" target="_blank" style="margin-left:20px"><img src="<?php echo get_option('home')?>/wp-content/uploads/2012/10/donarparaloschicos.jpg" alt="link a formulario de donacion"> </a>
    
  
	<div class="col2">


      

		<h2 class="title sprite titleBg"><?php _e('Novedades','Guadalupe') ?></h2>
		<a class="seeAll" href="<?php bloginfo('siteurl'); ?>/archivo"><?php _e('Ver todas las novedades','Guadalupe') ?></a>
		<?php query_posts($query_string . 'posts_per_page=3'); if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post">
			<a class="postTitle" href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>
			<p class="date"><?php the_time('l j \d\e\ F \d\e\ Y'); ?><?php echo qtrans_formatPostDateTime('l j \d\e\ F \d\e\ Y')?></p>
			<a href="<?php the_permalink() ?>"><?php the_post_thumbnail(array( 110,110 )) ?></a>
			<div class="postContent">
				<?php the_content(__('Leer más...')); ?>
			</div>
		</div>
		<?php endwhile; else: ?>
		<?php _e('No se encuentran resultados para esta búsqueda.'); ?>
		<?php endif; ?>		
	</div>

	<!-- e-planning v3 - Comienzo espacio Fundacion Maria Guadalupe _ Home _ 990x105 -->
	<script type="text/javascript" language="JavaScript1.1">
	<!--
	var rnd = (new String(Math.random())).substring(2,8) + (((new Date()).getTime()) & 262143);
	var cs = document.charset || document.characterSet;
	document.write('<scri' + 'pt language="JavaScript1.1" type="text/javascript" src="http://ads.us.e-planning.net/eb/3/cccf/d428c7143be0a0cc?o=j&rnd=' + rnd + '&crs=' + cs + '"></scr' + 'ipt>');
	//-->
	</script>
	<noscript><a href="http://ads.us.e-planning.net/ei/3/cccf/d428c7143be0a0cc?it=i&rnd=$RANDOM" target="_blank"><img alt="e-planning.net ad" src="http://ads.us.e-planning.net/eb/3/cccf/d428c7143be0a0cc?o=i&rnd=$RANDOM" border=0></a></noscript>
	<!-- e-planning v3 - Fin espacio Fundacion Maria Guadalupe _ Home _ 990x105 -->
</div>

<?php get_footer(); ?>