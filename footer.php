<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package skdstudios_custom
 */

?>
<footer id="colophon" class="site-footer" data-aos="fade-up">
	<div class="container">
		<div class="row">
			<div id="footer-logo" class="col-md-2">
				<img src="/wp-content/themes/skdstudios_custom/img/skd-logo-white.png" alt="skd studios white logo">
			</div>
			<div class="col-md-3" id="contact-column">
				<h4>Newport Beach</h4>
				<p class="mt-0"><?php if(get_field('phone_number', 'option')){echo 'Phone: '.get_field('phone_number','option').'<br>';}
				if(get_field('fax_number','option')){echo 'Fax: '.get_field('fax_number','option');}?></p>
				<?php if(get_field('footer_text','option')){echo '<p>'.get_field('footer_text','option').'</p>';} ?>
			</div>
			<div class="col-md-3 offset-md-1" id="pages-column">
				<h4>Pages</h4>
				<?php
				wp_nav_menu( array( 
					'theme_location' => 'footer-pages-menu', 
					'container_class' => 'footer-pages-menu' ) ); 
				?>
			</div>
			<div class="col-md-3" id="footer-social-media">
				<h4>Follow Us</h4>
				<ul>
					<?php
						// Pinterest link
						if(get_field('facebook','option')){
							echo '<li><a href="'.get_field('facebook','option').'" target="_blank">Facebook</a></li>';
						}

						// Instagram link
						if(get_field('instagram','option')){
							echo '<li><a href="'.get_field('instagram','option').'" target="_blank">Instagram</a></li>';
						}

						// Pinterest link
						if(get_field('pinterest','option')){
							echo '<li><a href="'.get_field('pinterest','option').'" target="_blank">Pinterest</a></li>';
						}

						// Twitter link
						if(get_field('twitter','option')){
							echo '<li><a href="'.get_field('twitter','option').'" target="_blank">Twitter</a></li>';
						}
						// TikTok link
						if(get_field('tik_tok','option')){
							echo '<li><a href="'.get_field('tik_tok','option').'" target="_blank">TikTok</a></li>';
						}
					?>
				</ul>
			</div>
		</div>
	</div>

</footer><!-- #colophon -->
<div id="copyright-row">
	<p class="m-b-0 m-t-0">© SKD STUDIOS KITCHENS BATHROOMS INTERIORS. All rights reserved.</p>
</div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
	<div id="mySidenav" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		<?php
			wp_nav_menu(
				array(
					'theme_location' => 'side-menu',
					'menu_id'        => 'side-menu',
				)
			);
			wp_nav_menu(
				array(
					'theme_location' => 'mobile-menu',
					'menu_id'        => 'mobile-menu',
				)
			);
		?>
	</div>
	<style>
		body {
			transition: background-color .5s;
		}

		.sidenav {
			height: 100%;
			width: 0;
			position: fixed;
			z-index: 1;
			top: 0;
			right: 0;
			background-color: #111;
			overflow-x: hidden;
			transition: 0.5s;
			padding-top: 60px;
			z-index:9999;
		}

		.sidenav a {
			padding: 8px 8px 8px 32px;
			text-decoration: none;
			font-family: Lato;
			font-style: normal;
			font-weight: normal;
			font-size: 16px;
			line-height: 19px;
			letter-spacing: 0.06em;
			color: #fff;
			text-transform: uppercase;
			display: block;
			transition: 0.3s;
		}

		.sidenav a:hover {
			color: #fff;
		}

		.sidenav .closebtn {
			position: absolute;
			top: 0;
			right: 25px;
			font-size: 36px;
			margin-left: 50px;
			padding-right: 0px;
			padding-top:21px;
		}

		#main {
			transition: margin-right .5s;
			
		}
	</style>
	<script>
		function openNav() {
			document.getElementById("mySidenav").style.width = "250px";
			document.getElementById("main").style.marginRight = "250px";
			// document.getElementById("masthead").style.marginRight = "250px";
		}

		function closeNav() {
			document.getElementById("mySidenav").style.width = "0";
			document.getElementById("main").style.marginRight = "0";
			// document.getElementById("masthead").style.marginRight = "0";
		}
	</script>
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script>
		AOS.init();
	</script>
</html>