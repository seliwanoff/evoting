
<header>
	<div class="header-wrapper">
		<a class="site-title-wrapper" href="http://localhost/evoting/index.php" tabindex="-1">
			<img width="56" height="56" src="https://i0.wp.com/electionwebsitetemplate.org/wp-content/uploads/2020/08/county-logo.png?fit=56%2C56&amp;ssl=1" class="attachment-header-icon size-header-icon jetpack-lazy-image jetpack-lazy-image--handled" alt="" loading="eager" data-attachment-id="421" data-permalink="https://electionwebsitetemplate.org/sample-county-logo/" data-orig-file="https://i0.wp.com/electionwebsitetemplate.org/wp-content/uploads/2020/08/county-logo.png?fit=200%2C200&amp;ssl=1" data-orig-size="200,200" data-comments-opened="0" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="Sample county logo" data-image-description="" data-image-caption="" data-medium-file="https://i0.wp.com/electionwebsitetemplate.org/wp-content/uploads/2020/08/county-logo.png?fit=200%2C200&amp;ssl=1" data-large-file="https://i0.wp.com/electionwebsitetemplate.org/wp-content/uploads/2020/08/county-logo.png?fit=200%2C200&amp;ssl=1" data-lazy-loaded="1" sizes="(max-width: 56px) 100vw, 56px" srcset="https://i0.wp.com/electionwebsitetemplate.org/wp-content/uploads/2020/08/county-logo.png?w=200&amp;ssl=1 200w, https://i0.wp.com/electionwebsitetemplate.org/wp-content/uploads/2020/08/county-logo.png?resize=150%2C150&amp;ssl=1 150w">
						<h1 class="site-title">E - Voting</h1>
						<span class="mobile-menu icon-bars" aria-expanded="false" tabindex="0">
				<span class="icon-bar bar-top"></span>
				<span class="icon-bar bar-middle"></span>
				<span class="icon-bar bar-bottom"></span>
			</span>
		</a>
		<nav class="menu-top-nav-menu-container">
<ul id="menu-top-nav-menu" class="menu">
	<?php if(isset($_SESSION['id']) && isset($_SESSION['user'])){
		?>

			<li id="menu-item-610" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-610 hfgr"><a href="javascript:void()"><?php echo $_SESSION['user'] ?> </a></li>
			<li id="menu-item-610" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-610 hfgr"><a href="http://localhost/evoting/logout/logout.php">Logout</a></li>

		<?php

	}else{
		?>

		<li id="menu-item-431" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-431 hdyt"><a href="http://localhost/evoting/register/register-form.php">Register</a></li>
		<li id="menu-item-608" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-608 hdyt"><a href="http://localhost/evoting/login/login-form.php">Login</a></li>
		<?php
		
	} ?>


</ul></nav>	</div>
</header>

