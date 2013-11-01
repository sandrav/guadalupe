<?php /* Template Name: formulario */ ?>
<?php get_header(); ?>
<!-- TEMPLATE page-form -->
<div id="mainContent">
	<div class="col1">
		<h2 class="pageTitle"><?php the_title(); ?></h2>
		<?php if (have_posts()) : ?>
			<?php $i = 1; while (have_posts() && $i < 3) : the_post(); ?>		
				<?php the_content(__('Leer completo »')); ?>       				
			<?php $i++; endwhile; else: ?>
			<?php _e('No se encuentran resultados para esta búsqueda.'); ?>
		<?php endif; ?>
	</div>
	<div class="col2">
	
		<!-- Formulario -->
		<form method="POST" id="donacion">
			<fieldset class="datos">
				<legend><?php _e('¡Ayudá al colegio ahora!','Guadalupe') ?></legend>
				<label for="inNombre" class="lblNombre"><?php _e('Tu nombre y apellido','Guadalupe') ?></label>
				<input type="text" name="nombre" id="inNombre" value="Como figura en la tarjeta" />
				<label for="inDNI" class="lblDNI"><?php _e('Tu D.N.I.','Guadalupe') ?></label>
				<input type="text" name="dni" id="inDNI" value="Ej. 22879847" />
				<label for="inTarjeta" class="lblTarjeta"><?php _e('Tipo de tarjeta','Guadalupe') ?></label>
				<input type="text" name="tipo_tarjeta" id="inTarjeta" value="VISA" />
				<label for="inNumTarjeta" class="lblNumTarjeta"><?php _e('Número de tarjeta','Guadalupe') ?></label>
				<input type="text" name="num_tarjeta" id="inNumTarjeta" value="Sin guiones o espacios" />
				<label for="inMes" class="lblMes"><?php _e('Vencimiento','Guadalupe') ?></label>
				<input type="text" name="ven_mes" id="inMes" value="Mes" />
				<input type="text" name="ven_anio" id="inAnio" value="Año" />
				<label for="inCodigo" class="lblCodigo"><?php _e('Código de seguridad','Guadalupe') ?></label>
				<input type="text" name="codigo" id="inCodigo" value="Ej. 398" />
				<a href="" title="" class="ayudaCodigo"><?php _e('¿Dónde lo encuentro?','Guadalupe') ?></a>
			</fieldset>
			<fieldset class="aporte">
				<legend><?php _e('Quiero ayudar con:','Guadalupe') ?></legend>
				<p>
					<select name="aporte" id="aporteMoney">
						<option value="$20">$20</option>
						<option value="$30">$30</option>
						<option value="$50">$50</option>
						<option value="$100">$100</option>
					</select>
					
					<label for="inUtiles" class="lblUtiles">Pesos</label>
					
					<select name="aporte" id="aporteMoney">
						<option value="Por única vez"><?php _e('Por única vez','Guadalupe') ?></option>
						<option value="Por 6 meses"><?php _e('Por 6 meses','Guadalupe') ?></option>
						<option value="Indefinidamente"><?php _e('Indefinidamente','Guadalupe') ?></option>
					</select>
				</p>
			</fieldset>
			<fieldset class="tipoAporte">
				<input type="submit" value="Ayudar" id="btnAyudar" />
				<p class="nota">
					<?php _e('Cualquier duda o consulta que tengas podés comunicarte al 011-15-4172-3460 de [día] a [día] de [hora] a [hora].','Guadalupe') ?>
				</p>
			</fieldset>
		</form>
		<!-- Fin Formulario -->
	
	</div>
</div>
<?php get_footer(); ?>