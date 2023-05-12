</div> <!-- /#content -->

<footer id="footer">
	<div id="footer-elements">
		<div id="footer-columns">
			<div class="footer-col">
				<h3><?php echo function_exists('pll__') ? pll__('Categorias') : ''; ?></h3>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'footer_menu_1',
						'menu_class' => 'footer-list',
						'container'  => false,
					)
				);
				?>
			</div>
			<div class="footer-col">
				<h3>Green Bitácora</h3>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'footer_menu_2',
						'menu_class' => 'footer-list',
						'container'  => false,
					)
				);
				?>
			</div>
		</div>
		<div id="copyright" class="txt-center">
			<p>Copyright © <?php echo date("Y"); ?> Green Bitácora</p>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

<!-- Matomo -->
<script type="text/javascript">
	var _paq = window._paq = window._paq || [];
	_paq.push(['requireConsent']);
	_paq.push(['trackPageView']);
	_paq.push(['enableLinkTracking']);
	_paq.push(['alwaysUseSendBeacon']);
	_paq.push(['setTrackerUrl', "\/\/greenbitacora.org\/wp-content\/plugins\/matomo\/app\/matomo.php"]);
	_paq.push(['setSiteId', '1']);
	var d = document,
		g = d.createElement('script'),
		s = d.getElementsByTagName('script')[0];
	g.type = 'text/javascript';
	g.async = true;
	g.src = "\/\/greenbitacora.org\/wp-content\/uploads\/matomo\/matomo.js";
	s.parentNode.insertBefore(g, s);
</script><!-- End Matomo Code -->

<!-- Check if cookies are accepted -->
<?php if (function_exists('cookie_accepted') && cookie_accepted()) { ?>
	<script>
		_paq.push(['rememberConsentGiven']);
	</script>
<?php  } ?>
</body>

</html>