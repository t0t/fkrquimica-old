<footer class="content-info" role="contentinfo">
  
	<div class="">
    	<?php dynamic_sidebar('sidebar-footer'); ?>
	</div>

	<div class="col__12">

		<div class="col__4">
			<?php get_search_form(); ?>
		</div>

		<div class="col__4">
			<h6>
			<a class="url" href="#">
				<i class="icon-logo-t0theme"></i> <?php bloginfo('name'); ?>
			</a></h6>
			<address>
				<span class="street-address">Calle número 13</span>
				<span class="region">La Provincia</span>
				<span class="postal-code">12980</span>
				<span class="country-name">Spain</span>
				<span class="phone">+44 (0)345 345345</span>
			</address>
		</div>

		<div class="col__4">
			<h6>Redes Sociales</h6>
			<a href="https://twitter.com/t0tinspire" target="_blank">
				<i class="icon-twitter"></i>
			</a>
			<a href="https://github.com/t0t" target="_blank">
				<i class="icon-github"></i>
			</a>
		</div>
	</div>

	<p class="creditos" rel="author">
		 
		<small>
			<a href="http://sergiofores.net" target="_blank"><i class="icon-logo-mazizo"></i> Sergio Forés</a> &sdot; <?php bloginfo('name'); ?>
			 <?php echo date('Y'); ?>
		</small>
		 <?php edit_post_link('&oplus; Editar ') ?>&sdot;
		 <?php wp_loginout(); ?>
	</p>

</footer>
<?php wp_footer(); ?>
