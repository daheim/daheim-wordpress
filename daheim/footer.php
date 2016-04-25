<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the main and #page div elements.
 *
 * @since 1.0.0
 */
?>
	</main><!-- main -->

	<footer id="footer" role="contentinfo">
					<div class="row" style="display: flex; margin: 0; margin: 8px 20px;">
						<div style="flex: 1 1 200px">
							<h3 style="font-size: 16px; color: inherit; margin-top: 0">Impressum</h3>
							<div>
								Daheim gUG (haftungsbeschränkt)<br />
								Kotthaushang 32<br />
								45239 Essen<br />
							</div>
						</div>
						<div style="flex: 1 1 200px">
							<h3 style="font-size: 16px; color: inherit; margin-top: 0">Kontakt</h3>
							<div>
								Geschäfstführer: Madita Best<br />
								Email: hallo@daheimapp.de
							</div>
						</div>
						<div style="flex: 1 1 200px">
							<h3 style="font-size: 16px; color: inherit; margin-top: 0">Partner</h3>
							<div><a href="http://duisburg.socialimpactlab.eu/">Social Impact Lab Duisburg<a/></div>
						</div>
						<div style="flex: 1 1 200px">
							<h3 style="font-size: 16px; color: inherit; margin-top: 0">Links</h3>
							<div><a href="/agb/">AGB</a></div>
							<div><a href="/privacy/">Datenschutz</a></div>
						</div>
					</div>
		<div id="footer-content" class="container">
			<div class="row">
				<div class="copyright col-lg-12">
					<span class="pull-left"><?php printf( __( 'Copyright &copy; %s %s. All Rights Reserved.', 'arcade' ), date( 'Y' ), ' <a href="' . home_url() . '">Daheim gemeinnützige UG (haftungsbeschränkt)</a>' ); ?></span>
				</div><!-- .col-lg-12 -->
			</div><!-- .row -->
		</div><!-- #footer-content.container -->
	</footer><!-- #footer -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>