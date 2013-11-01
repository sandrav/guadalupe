<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title><link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css" />
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-34620378-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head><body <?php body_class($class); ?>>	<?php $exclude = get_page_by_path("archivo")->ID; ?>	<div id="mainContainer">	  <div id="header">		<a class="logo" href="<?php echo get_option('home'); ?>/">
			<img src="<?php bloginfo('template_url'); ?>/images/mariadeguadalupeLogo.jpg" />
		</a>		<img src="<?php bloginfo('template_url'); ?>/images/header_08_2012.jpg" />
		<div class="navs">
		<?php include (TEMPLATEPATH . '/sidebar.php'); ?>
			
			<ul class="socialNav">
				<li class="sprite fb"><a href="http://www.facebook.com/colegiomariaguadalupe" target="_blanck"></a></li>
				<li class="sprite tw"><a href="https://twitter.com/mra_guadalupe" target="_blanck"></a></li>
			</ul>			<ul class="mainNav">				<?php wp_list_pages('title_li=&depth=1&sort_column=menu_order&exclude='.$exclude); ?>			</ul>		</div>	  </div>