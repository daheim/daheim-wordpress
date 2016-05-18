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
					<div class="row" style="display: flex; flex-wrap: wrap; margin: 0 20px 8px 20px;">
						<div style="flex: 1 1 200px">
							<h3 style="font-size: 16px; color: inherit; margin-top: 8px">Impressum</h3>
							<div>
								<p>Daheim gUG (haftungsbeschränkt)<br />
								c/o Social Impact Lab Duisburg<br />
								Franz-Haniel-Platz 1<br />
								47119 Duisburg<br /></p>
								<p><a href="/impressum/">Impressum</a></p>
							</div>
						</div>
						<div style="flex: 1 1 200px">
							<h3 style="font-size: 16px; color: inherit; margin-top: 8px">Kontakt</h3>
							<div>
								<p>Geschäfstführer: Madita Best<br />
								Tel: +49 201 6472 9928<br />
								Email: <a href="mailto:hallo@daheimapp.de" target="_blank">hallo@daheimapp.de</a></p>
							  <p><a href="/agb/">AGB</a> | <a href="/privacy/">Datenschutz</a></p>
							</div>
						</div>
						<div style="flex: 1 1 200px">
							<h3 style="font-size: 16px; color: inherit; margin-top: 8px">Partner</h3>
							<div><a href="http://duisburg.socialimpactlab.eu/">Social Impact Lab Duisburg</a></div>
						</div>
						<div style="flex: 1 1 200px">
							<h3 style="font-size: 16px; color: inherit; margin-top: 8px">Für Newsletter anmelden</h3>
							<div>
								<form action="//daheimapp.us12.list-manage.com/subscribe/post?u=c4d83a63f2e01438e01ffb425&amp;id=8090515741" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
									<p>
										<label for="footer-mce-EMAIL">E-Mail-Adresse  <span class="asterisk">*</span></label>
										<br/>
										<input style="background: #555; color: #DDD; border-radius: 3px; border-color: #777; padding: 5px; width: 80%;" type="email" value="" name="EMAIL" id="footer-mce-EMAIL">
									</p>

									<p>
										<label for="footer-mce-FNAME">Vorname</label>
										<br/>
										<input style="background: #555; color: #DDD; border-radius: 3px; border-color: #777; padding: 5px; width: 80%;" type="text" value="" name="FNAME" id="footer-mce-FNAME">
									</p>
									<p><input style="background: #555; color: #DDD; padding: 6px 12px; border-color: #777; border-radius: 3px;" type="submit" value="Anmelden" name="subscribe" class="button"></p>
								</form>
							</div>
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