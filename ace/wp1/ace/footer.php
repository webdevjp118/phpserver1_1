<?php
?>

<footer>
		<div class="footerInner">
				<figure class="footer_logo">
						<a href="<?php echo get_site_url(); ?>/">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/footer_logo.png" alt="">
		</a>
				</figure>
				<div class="flex">
						<div class="address">
								〒000-0000 〇〇県〇〇市〇〇〇〇-〇
						</div>
						<div class="navContainer">
								<nav class="footerNav">
										<ul class="navList">
												<li class="navItem"><a href="<?php echo get_site_url(); ?>/company">会社概要</a></li>
												<li class="navItem"><a href="<?php echo get_site_url(); ?>/service">事業案内</a></li>
												<li class="navItem"><a href="<?php echo get_site_url(); ?>/works">施工実績</a></li>
												<li class="navItem"><a href="<?php echo get_site_url(); ?>/recruit">採用情報</a></li>
												<li class="navItem"><a href="<?php echo get_site_url(); ?>/privacypolicy">プライバシーポリシー</a></li>
										</ul>
								</nav>
						</div>
				</div>
		</div>
		<div class="footerText">
				Copyright ACE. All Rights Reserved.
		</div>
</footer>



<?php wp_footer(); ?>
<!--JQuery-->
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<!--Scripts-->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/script.js"></script>
</body>
</html>
