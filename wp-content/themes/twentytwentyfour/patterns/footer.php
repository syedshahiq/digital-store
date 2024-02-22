<?php
/**
 * Title: Footer with colophon, 4 columns
 * Slug: twentytwentyfour/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)">
	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"width":"30%"} -->
		<div class="wp-block-column" style="flex-basis:30%">
			<!-- wp:group {"style":{"dimensions":{"minHeight":""},"layout":{"selfStretch":"fit","flexSize":null}},"layout":{"type":"flex","orientation":"vertical"}} -->
			<div class="wp-block-group">
				<!-- wp:site-logo {"width":20,"shouldSyncIcon":true,"style":{"layout":{"selfStretch":"fit","flexSize":null}}} /-->

				<!-- wp:site-title {"level":0,"fontSize":"medium"} /-->

				<!-- wp:site-tagline {"fontSize":"small"} /-->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"20%"} -->
		<div class="wp-block-column" style="flex-basis:20%">
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"50%"} -->
		<div class="wp-block-column" style="flex-basis:50%">
			<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
			<div class="wp-block-group">
				<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
				<div class="wp-block-group">
					<!-- wp:heading {"level":2,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontFamily":"body"} -->
					<h2 class="wp-block-heading has-medium-font-size has-body-font-family" style="font-style:normal;font-weight:600"><?php esc_html_e( 'About', 'twentytwentyfour' ); ?></h2>
					<!-- /wp:heading -->

					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","orientation":"vertical"}} -->
					<div class="wp-block-group">

						<!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","orientation":"vertical"},"style":{"typography":{"fontStyle":"normal","fontWeight":"400"},"spacing":{"blockGap":"var:preset|spacing|10"}},"fontSize":"small","ariaLabel":"<?php esc_attr_e( 'About', 'twentytwentyfour' ); ?>"} -->

						<!-- wp:navigation-link {"label":"Team","url":"#"} /-->
						<!-- wp:navigation-link {"label":"History","url":"#"} /-->
						<!-- wp:navigation-link {"label":"Careers","url":"#"} /-->

						<!-- /wp:navigation -->

					</div>
					<!-- /wp:group -->
				</div>

				<!-- /wp:group -->

				<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
				<div class="wp-block-group">
					<!-- wp:heading {"level":2,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontFamily":"body"} -->
					<h2 class="wp-block-heading has-medium-font-size has-body-font-family" style="font-style:normal;font-weight:600"><?php esc_html_e( 'Privacy', 'twentytwentyfour' ); ?></h2>
					<!-- /wp:heading -->

					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","orientation":"vertical"}} -->
					<div class="wp-block-group">

						<!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","orientation":"vertical"},"style":{"typography":{"fontStyle":"normal","fontWeight":"400"},"spacing":{"blockGap":"var:preset|spacing|10"}},"fontSize":"small","ariaLabel":"<?php esc_attr_e( 'Privacy', 'twentytwentyfour' ); ?>"} -->

						<!-- wp:navigation-link {"label":"Privacy Policy","url":"#"} /-->
						<!-- wp:navigation-link {"label":"Terms and Conditions","url":"#"} /-->
						<!-- wp:navigation-link {"label":"Contact Us","url":"#"} /-->

						<!-- /wp:navigation -->

					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
				<div class="wp-block-group">
					<!-- wp:heading {"level":2,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontFamily":"body"} -->
					<h2 class="wp-block-heading has-medium-font-size has-body-font-family" style="font-style:normal;font-weight:600"><?php esc_html_e( 'Social', 'twentytwentyfour' ); ?></h2>
					<!-- /wp:heading -->

					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","orientation":"vertical"}} -->
					<div class="wp-block-group">

						<!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","orientation":"vertical"},"style":{"typography":{"fontStyle":"normal","fontWeight":"400"},"spacing":{"blockGap":"var:preset|spacing|10"}},"fontSize":"small","ariaLabel":"<?php esc_attr_e( 'Social Media', 'twentytwentyfour' ); ?>"} -->

						<!-- wp:navigation-link {"label":"Facebook","url":"#"} /-->
						<!-- wp:navigation-link {"label":"Instagram","url":"#"} /-->
						<!-- wp:navigation-link {"label":"Twitter/X","url":"#"} /-->

						<!-- /wp:navigation -->

					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"0"}}}} -->
	<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:0">
		<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast-2","fontSize":"small"} -->
		<p class="has-contrast-2-color has-text-color has-link-color has-small-font-size">
		<?php
			/* Translators: WordPress link. */
			$wordpress_link = '<a href="' . esc_url( __( 'https://wordpress.org', 'twentytwentyfour' ) ) . '" rel="nofollow">WordPress</a>';
			echo sprintf(
				/* Translators: Designed with WordPress */
				esc_html__( 'Designed with %1$s', 'twentytwentyfour' ),
				$wordpress_link
			);
			?>
		</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
<script type="module">
  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/10.8.0/firebase-app.js";
  import { getAnalytics } from "https://www.gstatic.com/firebasejs/10.8.0/firebase-analytics.js";
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  const firebaseConfig = {
    apiKey: "AIzaSyAQsIkSBkATxdy_h0Fdr0f677cStZdyDZg",
    authDomain: "digital-store-93034.firebaseapp.com",
    projectId: "digital-store-93034",
    storageBucket: "digital-store-93034.appspot.com",
    messagingSenderId: "853007787923",
    appId: "1:853007787923:web:2fda235caac91320a3aa66",
    measurementId: "G-6YRPG8JYYJ"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const analytics = getAnalytics(app);
</script>