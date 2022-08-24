<?php 

session_start();
if(isset($_SESSION['id'])){
    ?>




<html lang="en-US" class="jetpack-lazy-images-js-enabled"><head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Select Post</title>
<meta name="robots" content="max-image-preview:large">
<link rel="dns-prefetch" href="//fonts.googleapis.com">
<link rel="dns-prefetch" href="//s.w.org">
<link rel="dns-prefetch" href="//widgets.wp.com">
<link rel="dns-prefetch" href="//jetpack.wordpress.com">
<link rel="dns-prefetch" href="//s0.wp.com">
<link rel="dns-prefetch" href="//public-api.wordpress.com">
<link rel="dns-prefetch" href="//0.gravatar.com">
<link rel="dns-prefetch" href="//1.gravatar.com">
<link rel="dns-prefetch" href="//2.gravatar.com">
<link rel="dns-prefetch" href="//i0.wp.com">
<link rel="dns-prefetch" href="//c0.wp.com">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<link href="https://fonts.gstatic.com" crossorigin="" rel="preconnect">
<link rel="alternate" type="application/rss+xml" title="County Name Elections » Feed" href="https://electionwebsitetemplate.org/feed/">
<link rel="alternate" type="application/rss+xml" title="County Name Elections » Comments Feed" href="https://electionwebsitetemplate.org/comments/feed/">
<link rel="stylesheet" id="all-css-92bc8ef94714bc741896befa581d31b2" href="https://electionwebsitetemplate.org/_static/??-eJyFkF1OwzAQhC+Eu6pKEDwgXipxAE7g2KuwzfpHXltRbs8G2ioUpbx57Pl2xzNl41KsGCtkbgNFgaGp7LEM0DdiDz0nNxqmvtgyg9SZcedEHqa/KNs5tWqGQv63kaLj5lHgJBDQk0XGsJBrkRXHYhgH6+ZdoPgvrW9rvWZuo7n0/Q8BT1J/wpnLndlvUbdduBRyiuqQ+0Vct12jHzFj9BgdqXhPR+v9DB/LDDnPZltR6tbEE9Zs3Qgh+bYwTCNuhKif2oaAluIqpWgm7IV0NlgR1ORqh2C1qjt1XdYt3vN5sb6F1/1T99IduufD4xfhE9o9" type="text/css" media="all">
<style id="wp-block-library-inline-css">
    
.has-text-align-justify{text-align:justify;}
</style>
<style id="global-styles-inline-css">
body{--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');--wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');--wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');--wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');--wp--preset--duotone--midnight: url('#wp-duotone-midnight');--wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');--wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');--wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');--wp--preset--font-size--small: 13px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 36px;--wp--preset--font-size--x-large: 42px;--wp--preset--spacing--10: 0.3rem;--wp--preset--spacing--20: 0.44rem;--wp--preset--spacing--30: 0.67rem;--wp--preset--spacing--40: 1rem;--wp--preset--spacing--50: 1.5rem;--wp--preset--spacing--60: 2.25rem;--wp--preset--spacing--70: 3.38rem;--wp--preset--spacing--80: 5.06rem;--wp--preset--spacing--90: 7.59rem;--wp--preset--spacing--100: 11.39rem;}:where(.is-layout-flex){gap: 0.5em;}body .is-layout-flow > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-flow > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-flow > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-flex{display: flex;}body .is-layout-flex{flex-wrap: wrap;align-items: center;}body .is-layout-flex > *{margin: 0;}:where(.wp-block-columns.is-layout-flex){gap: 2em;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}
.wp-block-audio{margin: 0 0 1em 0;}
:where(.wp-block-columns.is-layout-flex){gap: 2em;}
.wp-block-table > table{margin: 0 0 1em 0;}
.wp-block-video{margin: 0 0 1em 0;}
.wp-block-embed{margin: 0 0 1em 0;}
</style>
<link rel="stylesheet" id="dashicons-css" href="https://electionwebsitetemplate.org/wp-includes/css/dashicons.min.css?ver=6.0.1" media="all">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro%3Awght%40400%3B600%3B700&amp;display=swap&amp;ver=0.9.4" media="all" onload="this.onload=null;this.media='all'">
<noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro%3Awght%40400%3B600%3B700&#038;display=swap&#038;ver=0.9.4"></noscript>
<style id="jetpack-global-styles-frontend-style-inline-css">
:root { --font-headings: unset; --font-base: unset; --font-headings-default: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif; --font-base-default: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif;}
</style>
<script id="media-video-jwt-bridge-js-extra">
var videopressAjax = {"ajaxUrl":"https:\/\/electionwebsitetemplate.org\/wp-admin\/admin-ajax.php","bridgeUrl":"https:\/\/electionwebsitetemplate.org\/wp-content\/plugins\/jetpack\/modules\/videopress\/js\/videopress-token-bridge.js","post_id":"611"};
</script>
<script type="text/javascript" defer="" src="https://electionwebsitetemplate.org/wp-content/plugins/jetpack/modules/videopress/js/videopress-token-bridge.js?m=1653408914"></script>
<link rel="https://api.w.org/" href="https://electionwebsitetemplate.org/wp-json/"><link rel="alternate" type="application/json" href="https://electionwebsitetemplate.org/wp-json/wp/v2/pages/611">
<link rel="canonical" href="https://electionwebsitetemplate.org/">
<link rel="shortlink" href="https://wp.me/PcyAzn-9R">
<link rel="alternate" type="application/json+oembed" href="https://electionwebsitetemplate.org/wp-json/oembed/1.0/embed?url=https%3A%2F%2Felectionwebsitetemplate.org%2F">
<link rel="alternate" type="text/xml+oembed" href="https://electionwebsitetemplate.org/wp-json/oembed/1.0/embed?url=https%3A%2F%2Felectionwebsitetemplate.org%2F&amp;format=xml">
<style>img#wpstats{display:none}</style>
	<meta name="description" content="Registration How to Vote by Mail (Absentee) View Election Results What’s on the Ballot Where to Vote in Person Become an Election Worker Resources for Candidates Accessible Voting">
<!-- There is no amphtml version available for this URL. -->			<style type="text/css">
				/* If html does not have either class, do not show lazy loaded images. */
				html:not( .jetpack-lazy-images-js-enabled ):not( .js ) .jetpack-lazy-image {
					display: none;
				}
			</style>
			<script>
				document.documentElement.classList.add(
					'jetpack-lazy-images-js-enabled'
				);
			</script>
		
<!-- Jetpack Open Graph Tags -->
<meta property="og:type" content="website">
<meta property="og:title" content="County Name Elections">
<meta property="og:description" content="Find out election dates and register to vote in your county">
<meta property="og:url" content="https://electionwebsitetemplate.org/">
<meta property="og:site_name" content="County Name Elections">
<meta property="og:image" content="https://i0.wp.com/electionwebsitetemplate.org/wp-content/uploads/2020/08/cropped-county-logo.png?fit=512%2C512&amp;ssl=1">
<meta property="og:image:width" content="512">
<meta property="og:image:height" content="512">
<meta property="og:image:alt" content="">
<meta property="og:locale" content="en_US">
<meta name="twitter:text:title" content="Home">
<meta name="twitter:image" content="https://i0.wp.com/electionwebsitetemplate.org/wp-content/uploads/2020/08/cropped-county-logo.png?fit=240%2C240&amp;ssl=1">
<meta name="twitter:card" content="summary">

<!-- End Jetpack Open Graph Tags -->
<meta name="description" content="Find out election dates and register to vote in your county">
<link rel="icon" href="https://i0.wp.com/electionwebsitetemplate.org/wp-content/uploads/2020/08/cropped-county-logo.png?fit=32%2C32&amp;ssl=1" sizes="32x32">
<link rel="icon" href="https://i0.wp.com/electionwebsitetemplate.org/wp-content/uploads/2020/08/cropped-county-logo.png?fit=192%2C192&amp;ssl=1" sizes="192x192">
<link rel="apple-touch-icon" href="https://i0.wp.com/electionwebsitetemplate.org/wp-content/uploads/2020/08/cropped-county-logo.png?fit=180%2C180&amp;ssl=1">
<meta name="msapplication-TileImage" content="https://i0.wp.com/electionwebsitetemplate.org/wp-content/uploads/2020/08/cropped-county-logo.png?fit=270%2C270&amp;ssl=1">
<!-- Your Google Analytics Plugin is missing the tracking ID -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"></script>
</head>

<body class="home page-template-default page page-id-611 wp-custom-logo theme-blue page-home-2-2">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;"><defs><filter id="wp-duotone-dark-grayscale"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></feColorMatrix><feComponentTransfer color-interpolation-filters="sRGB"><feFuncR type="table" tableValues="0 0.49803921568627"></feFuncR><feFuncG type="table" tableValues="0 0.49803921568627"></feFuncG><feFuncB type="table" tableValues="0 0.49803921568627"></feFuncB><feFuncA type="table" tableValues="1 1"></feFuncA></feComponentTransfer><feComposite in2="SourceGraphic" operator="in"></feComposite></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;"><defs><filter id="wp-duotone-grayscale"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></feColorMatrix><feComponentTransfer color-interpolation-filters="sRGB"><feFuncR type="table" tableValues="0 1"></feFuncR><feFuncG type="table" tableValues="0 1"></feFuncG><feFuncB type="table" tableValues="0 1"></feFuncB><feFuncA type="table" tableValues="1 1"></feFuncA></feComponentTransfer><feComposite in2="SourceGraphic" operator="in"></feComposite></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;"><defs><filter id="wp-duotone-purple-yellow"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></feColorMatrix><feComponentTransfer color-interpolation-filters="sRGB"><feFuncR type="table" tableValues="0.54901960784314 0.98823529411765"></feFuncR><feFuncG type="table" tableValues="0 1"></feFuncG><feFuncB type="table" tableValues="0.71764705882353 0.25490196078431"></feFuncB><feFuncA type="table" tableValues="1 1"></feFuncA></feComponentTransfer><feComposite in2="SourceGraphic" operator="in"></feComposite></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;"><defs><filter id="wp-duotone-blue-red"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></feColorMatrix><feComponentTransfer color-interpolation-filters="sRGB"><feFuncR type="table" tableValues="0 1"></feFuncR><feFuncG type="table" tableValues="0 0.27843137254902"></feFuncG><feFuncB type="table" tableValues="0.5921568627451 0.27843137254902"></feFuncB><feFuncA type="table" tableValues="1 1"></feFuncA></feComponentTransfer><feComposite in2="SourceGraphic" operator="in"></feComposite></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;"><defs><filter id="wp-duotone-midnight"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></feColorMatrix><feComponentTransfer color-interpolation-filters="sRGB"><feFuncR type="table" tableValues="0 0"></feFuncR><feFuncG type="table" tableValues="0 0.64705882352941"></feFuncG><feFuncB type="table" tableValues="0 1"></feFuncB><feFuncA type="table" tableValues="1 1"></feFuncA></feComponentTransfer><feComposite in2="SourceGraphic" operator="in"></feComposite></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;"><defs><filter id="wp-duotone-magenta-yellow"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></feColorMatrix><feComponentTransfer color-interpolation-filters="sRGB"><feFuncR type="table" tableValues="0.78039215686275 1"></feFuncR><feFuncG type="table" tableValues="0 0.94901960784314"></feFuncG><feFuncB type="table" tableValues="0.35294117647059 0.47058823529412"></feFuncB><feFuncA type="table" tableValues="1 1"></feFuncA></feComponentTransfer><feComposite in2="SourceGraphic" operator="in"></feComposite></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;"><defs><filter id="wp-duotone-purple-green"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></feColorMatrix><feComponentTransfer color-interpolation-filters="sRGB"><feFuncR type="table" tableValues="0.65098039215686 0.40392156862745"></feFuncR><feFuncG type="table" tableValues="0 1"></feFuncG><feFuncB type="table" tableValues="0.44705882352941 0.4"></feFuncB><feFuncA type="table" tableValues="1 1"></feFuncA></feComponentTransfer><feComposite in2="SourceGraphic" operator="in"></feComposite></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;"><defs><filter id="wp-duotone-blue-orange"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></feColorMatrix><feComponentTransfer color-interpolation-filters="sRGB"><feFuncR type="table" tableValues="0.098039215686275 1"></feFuncR><feFuncG type="table" tableValues="0 0.66274509803922"></feFuncG><feFuncB type="table" tableValues="0.84705882352941 0.41960784313725"></feFuncB><feFuncA type="table" tableValues="1 1"></feFuncA></feComponentTransfer><feComposite in2="SourceGraphic" operator="in"></feComposite></filter></defs></svg>
<?php include('../asset/header.php') ?>


<section class="banner major banner-dark">
	<div class="banner-wrapper">
		<div>
			<h2>Can't make it to the polls? You can vote absentee.</h2>
			<p>Missouri allows any voter who can't vote in person to vote by absentee ballot.</p>
									<p class="learn-more"><a class="button learn-more" href="https://www.sos.mo.gov/elections/goVoteMissouri/howtovote#Absentee">Learn more</a></p>
					</div>
		<img width="219" height="206" src="data:image/svg+xml,%3Csvg width=%22219%22 height=%22206%22 viewBox=%220 0 219 206%22 fill=%22none%22 xmlns=%22http://www.w3.org/2000/svg%22%3E%3Cpath fill=%22%23FFCC80%22 d=%22M113.065 144.963h22.889V206h-22.889z%22/%3E%3Cpath d=%22M113.065 150.686h22.889v20.981l-22.889-9.537v-11.444z%22 fill=%22%23330B0B%22 fill-opacity=%22.2%22 style=%22mix-blend-mode:multiply%22/%3E%3Cmask id=%22a%22 fill=%22%23fff%22%3E%3Cpath fill-rule=%22evenodd%22 clip-rule=%22evenodd%22 d=%22M75.706 40.074c-24.255.683-43.708 20.56-43.708 44.982v63.518a2 2 0 002 2h41.708v.111h141.22a2 2 0 002-2V80.144c0-22.14-17.948-40.088-40.089-40.088H75.706v.018z%22/%3E%3C/mask%3E%3Cpath fill-rule=%22evenodd%22 clip-rule=%22evenodd%22 d=%22M75.706 40.074c-24.255.683-43.708 20.56-43.708 44.982v63.518a2 2 0 002 2h41.708v.111h141.22a2 2 0 002-2V80.144c0-22.14-17.948-40.088-40.089-40.088H75.706v.018z%22 fill=%22%2355D5F1%22/%3E%3Cpath d=%22M75.706 40.074l.226 7.997 7.774-.22v-7.777h-8zm0 110.5h8v-8h-8v8zm0 .111h-8v8h8v-8zm103.131-110.63v8-8zm-71.03 0v-8 8zm-30.845 0v8h.006l-.006-8zm-1.256 0v-8h-8v8h8zm-35.708 45c0-20.078 15.995-36.423 35.934-36.984l-.451-15.994c-28.572.805-51.483 24.215-51.483 52.979h16zm0 63.519V85.056h-16v63.518h16zm-6-6a6 6 0 016 6h-16c0 5.523 4.477 10 10 10v-16zm41.708 0H33.998v16h41.708v-16zm8 8.111v-.111h-16v.111h16zm133.22-8H75.706v16h141.22v-16zm-6 6a6 6 0 016-6v16c5.523 0 10-4.477 10-10h-16zm0-68.541v68.541h16V80.144h-16zm-32.089-32.088c17.722 0 32.089 14.366 32.089 32.088h16c0-26.559-21.53-48.088-48.089-48.088v16zm-71.03 0h71.03v-16h-71.03v16zm-30.81 0h30.81v-16h-30.81v16zm-.029 0h.03v-16h-.042l.012 16zm-1.262 0h1.256v-16h-1.256v16zm8-7.982v-.018h-16v.018h16z%22 fill=%22%2355D5F1%22 mask=%22url%28%23a%29%22/%3E%3Cpath d=%22M39.63 81.542c0-19.226 15.584-34.81 34.81-34.81 19.225 0 34.81 15.584 34.81 34.81v63.421H40.63a1 1 0 01-1-1V81.542z%22 fill=%22%2337899C%22/%3E%3Cpath d=%22M123.555 0h5.722v69.574a1 1 0 01-1 1h-3.722a1 1 0 01-1-1V0z%22 fill=%22%23EE5C4A%22/%3E%3Cpath d=%22M123.555 0h36.194a1 1 0 011 1v19.935a1 1 0 01-1 1h-36.194V0z%22 fill=%22%23EE5C4A%22/%3E%3Cpath fill-rule=%22evenodd%22 clip-rule=%22evenodd%22 d=%22M106.037 67a27.575 27.575 0 013.163 12v63H8V67h98.037z%22 fill=%22%23F4F6FF%22/%3E%3Cpath d=%22M31.307 101.177l-2.332 6.768h-2.41l-2.343-6.768h2.016l1.537 4.887 1.526-4.887h2.006zm4.231 6.836a3.549 3.549 0 01-1.747-.442 3.416 3.416 0 01-1.267-1.238 3.524 3.524 0 01-.46-1.796c0-.665.153-1.26.46-1.785a3.323 3.323 0 011.267-1.239 3.548 3.548 0 011.747-.441c.64 0 1.223.147 1.748.441.53.295.95.708 1.257 1.239.307.525.46 1.12.46 1.785 0 .666-.153 1.264-.46 1.796a3.344 3.344 0 01-1.258 1.238 3.549 3.549 0 01-1.747.442zm0-1.748c.48 0 .858-.156 1.133-.47.282-.314.422-.733.422-1.258 0-.537-.14-.96-.422-1.267-.275-.313-.653-.47-1.133-.47-.486 0-.867.157-1.142.47-.275.307-.413.73-.413 1.267 0 .532.138.954.413 1.268.275.307.656.46 1.142.46zm9.81-5.088v1.498h-1.805v5.27H41.66v-5.27h-1.786v-1.498h5.472zm2.977 1.508v1.104h2.16v1.43h-2.16v1.219h2.448v1.507h-4.33v-6.768h4.33v1.508h-2.448zm10.335 1.785c.397.09.71.288.941.595.237.301.355.647.355 1.037 0 .576-.198 1.027-.595 1.354-.397.326-.953.489-1.67.489h-3.35v-6.768h3.244c.691 0 1.232.154 1.623.461.396.307.595.739.595 1.296 0 .397-.106.73-.317.999-.205.262-.48.441-.826.537zm-2.438-.605h.95c.474 0 .71-.195.71-.585 0-.403-.236-.605-.71-.605h-.95v1.19zm1.094 2.564c.474 0 .71-.199.71-.596 0-.204-.063-.361-.191-.47-.122-.109-.298-.163-.528-.163h-1.085v1.229h1.094zm10.019-5.252l-2.381 4.618v2.15h-1.891v-2.15l-2.381-4.618h2.15l1.19 2.612 1.191-2.612h2.122zm11.116 0v6.768h-1.882v-3.734l-1.277 3.734h-1.574l-1.287-3.763v3.763H70.55v-6.768h2.275l1.7 4.397 1.66-4.397h2.266zm5.752 5.664h-2.4l-.364 1.104H79.46l2.467-6.768h2.17l2.457 6.768h-1.987l-.365-1.104zm-.47-1.44l-.73-2.188-.72 2.188h1.45zm5.717-4.224v6.768h-1.882v-6.768h1.882zm3.353 5.328h2.103v1.44h-3.984v-6.768h1.881v5.328zM32.45 117.988c.72.163 1.288.522 1.705 1.079a2.95 2.95 0 01.644 1.879c0 1.044-.36 1.862-1.079 2.454-.719.591-1.728.887-3.027.887H24.62V112.02h5.881c1.253 0 2.233.279 2.94.835.72.557 1.08 1.34 1.08 2.349 0 .72-.192 1.323-.575 1.81-.37.476-.87.8-1.496.974zm-4.42-1.096h1.723c.858 0 1.288-.354 1.288-1.061 0-.731-.43-1.096-1.288-1.096H28.03v2.157zm1.984 4.646c.858 0 1.288-.36 1.288-1.079 0-.371-.116-.655-.348-.852-.22-.198-.54-.296-.957-.296H28.03v2.227h1.984zm15.04.748h-4.35l-.661 2.001h-3.584l4.471-12.267h3.933l4.454 12.267h-3.602l-.66-2.001zm-.852-2.61l-1.323-3.967-1.305 3.967h2.628zm10.637 2.001h3.81v2.61h-7.22V112.02h3.41v9.657zm9.547 0h3.81v2.61h-7.22V112.02h3.41v9.657zm12.018 2.732a6.43 6.43 0 01-3.167-.8 6.188 6.188 0 01-2.297-2.245c-.556-.963-.835-2.047-.835-3.254 0-1.206.279-2.285.835-3.236a6.012 6.012 0 012.297-2.245 6.43 6.43 0 013.167-.8c1.16 0 2.216.267 3.167.8a5.888 5.888 0 012.28 2.245c.556.951.834 2.03.834 3.236 0 1.207-.278 2.291-.835 3.254a6.057 6.057 0 01-2.28 2.245 6.43 6.43 0 01-3.166.8zm0-3.167c.87 0 1.554-.284 2.053-.852.51-.569.766-1.329.766-2.28 0-.974-.255-1.74-.766-2.297-.499-.568-1.183-.852-2.053-.852-.882 0-1.572.284-2.07.852-.5.557-.749 1.323-.749 2.297 0 .963.25 1.729.748 2.297.5.557 1.19.835 2.071.835zm18.054-9.222v2.715h-3.271v9.552h-3.41v-9.552H84.54v-2.715h9.918z%22 fill=%22%233A3ADA%22/%3E%3Cpath d=%22M44.504 86.15a.2.2 0 01.372 0l1.41 3.608a.2.2 0 00.174.127l3.867.224a.2.2 0 01.115.355l-2.996 2.455a.2.2 0 00-.067.205l.981 3.748a.2.2 0 01-.301.219l-3.26-2.092a.2.2 0 00-.217 0l-3.26 2.092a.2.2 0 01-.302-.22l.98-3.746a.2.2 0 00-.066-.205l-2.997-2.455a.2.2 0 01.115-.355l3.867-.224a.2.2 0 00.175-.127l1.409-3.609zm44.331 0a.2.2 0 01.373 0l1.409 3.608a.2.2 0 00.174.127l3.868.224a.2.2 0 01.115.355l-2.997 2.455a.2.2 0 00-.067.205l.982 3.748a.2.2 0 01-.302.219l-3.26-2.092a.2.2 0 00-.216 0l-3.261 2.092a.2.2 0 01-.302-.22l.982-3.747a.2.2 0 00-.067-.205l-2.997-2.455a.2.2 0 01.116-.355l3.867-.224a.2.2 0 00.175-.127l1.408-3.609zm-29.554 0a.2.2 0 01.373 0l1.408 3.608a.2.2 0 00.175.127l3.868.224a.2.2 0 01.115.355l-2.997 2.455a.2.2 0 00-.067.205l.982 3.748a.2.2 0 01-.302.219l-3.26-2.092a.2.2 0 00-.217 0l-3.26 2.092a.2.2 0 01-.302-.22l.982-3.747a.2.2 0 00-.067-.205l-2.997-2.455a.2.2 0 01.115-.355l3.868-.224a.2.2 0 00.175-.127l1.408-3.609zm-29.554 0a.2.2 0 01.373 0l1.409 3.608a.2.2 0 00.174.127l3.868.224a.2.2 0 01.115.355l-2.997 2.455a.2.2 0 00-.066.205l.981 3.748a.2.2 0 01-.302.219l-3.26-2.092a.2.2 0 00-.216 0l-3.261 2.092a.2.2 0 01-.302-.22l.982-3.747a.2.2 0 00-.067-.205l-2.997-2.455a.2.2 0 01.116-.355l3.867-.224a.2.2 0 00.175-.127l1.408-3.609zm44.331 0a.2.2 0 01.373 0l1.409 3.608a.2.2 0 00.174.127l3.868.224a.2.2 0 01.115.355L77 92.919a.2.2 0 00-.067.205l.982 3.748a.2.2 0 01-.301.219l-3.261-2.092a.2.2 0 00-.216 0l-3.261 2.092a.2.2 0 01-.301-.22l.981-3.747a.2.2 0 00-.067-.205l-2.996-2.455a.2.2 0 01.115-.355l3.867-.224a.2.2 0 00.175-.127l1.408-3.609z%22 fill=%22%23EE5C4A%22/%3E%3Cpath fill=%22%2337899C%22 d=%22M12.847 72H32v1.45H12.847zm-.001 3.625h19.153v1.45H12.846zm0 3.626h13.966v1.45H12.846z%22/%3E%3Ccircle cx=%22126.5%22 cy=%2270.5%22 r=%228.5%22 fill=%22%23EF4C30%22/%3E%3Ccircle cx=%22126.5%22 cy=%2270.5%22 r=%224.5%22 fill=%22%23B5321B%22/%3E%3Cpath d=%22M0 144a2 2 0 012-2h114v9H2a2 2 0 01-2-2v-5z%22 fill=%22%2355D5F1%22/%3E%3C/svg%3E" class="attachment-banner size-banner jetpack-lazy-image jetpack-lazy-image--handled" alt="" loading="eager" data-attachment-id="124" data-permalink="https://electionwebsitetemplate.org/mailbox-light-blue/" data-orig-file="https://electionwebsitetemplate.org/wp-content/uploads/2020/07/mailbox-light-blue.svg" data-orig-size="219,206" data-comments-opened="0" data-image-meta="[]" data-image-title="mailbox-light-blue" data-image-description="" data-image-caption="" data-medium-file="https://electionwebsitetemplate.org/wp-content/uploads/2020/07/mailbox-light-blue.svg" data-large-file="https://electionwebsitetemplate.org/wp-content/uploads/2020/07/mailbox-light-blue.svg" data-lazy-loaded="1">	</div>
</section>

	
<section style="padding: 10px; margin:20px">

    <div style="width:100%; margin-top: 60px;">
    
    <label for="post">Select post:</label>
    <form action="" method="post">
    <select class="form-select" aria-label="Default select example" style="width:100% ;" name="post" >
    <?php 
    include('../asset/connect.php');
    $select  ="SELECT * FROM `post`";
    $res = mysqli_query($link,$select);
    $count = mysqli_num_rows($res);
    while($fetch = mysqli_fetch_array($res)){
        ?>
        <option value="<?php echo  $fetch['id'] ?>"><?php echo $fetch['post']?></option>
        <?php
    }
    ?>
    
    </select>
    
    <br>
    <input  name="submit" type="submit" style="margin-top:50px;background-color: #0693e3;width:200px;color:#fff;border:1px solid #0693e3;padding:10px" class="getaspirant" value="Fetch Aspirant">
    </form>
    </div>
    </section>

    <?php 
    if(isset($_POST['submit'])){
        $id =mysqli_escape_string($link,$_POST['post']);
        if($id){
          echo  "<script> location.href=`https://evotingng.000webhostapp.com/vote/cast-vote.php?type=".$id."`; </script>";
        }else{
            echo 'NO';
        }
        
    }
    
    ?>









<?php include('../asset/footer.php') ?>

	<!--  -->
<script defer="" id="bilmur" data-provider="wordpress.com" data-service="atomic" src="https://s0.wp.com/wp-content/js/bilmur.min.js?m=202233"></script>
<script id="jetpack-lazy-images-js-extra">
var jetpackLazyImagesL10n = {"loading_warning":"Images are still loading. Please cancel your print and try again."};
</script>
<script type="text/javascript" defer="" src="https://electionwebsitetemplate.org/_static/??-eJytjlELgkAQhP9Q15JlPUU/Rc5z0dW7W3FXpX59JyhFQU89Dcww883cG8dRMSr0fqwpCrSovXUdFBQdlCP5CvqGleMq+0Bx38pu/q46Lj27TqAiUWhfhrGRglXiz6Y2GFAAPbolNTOWQpocK4Iqy0aw9Iu53V21mDBWPIAdlRNRyW2J8fZxN+lGjetBSkuDrGQuBYcJh/9j3ow0fgvXwznPs+xyOmZP5a+SHA=="></script>
<script src="https://stats.wp.com/e-202233.js" defer=""></script>
<script>
	_stq = window._stq || [];
	_stq.push([ 'view', {v:'ext',j:'1:11.3-a.3',blog:'185559761',post:'611',tz:'-4',srv:'electionwebsitetemplate.org',hp:'atomic',ac:'2',amp:'0'} ]);
	_stq.push([ 'clickTrackerInit', '185559761', '611' ]);
</script>

	

<img src="https://pixel.wp.com/g.gif?v=ext&amp;j=1%3A11.3-a.3&amp;blog=185559761&amp;post=611&amp;tz=-4&amp;srv=electionwebsitetemplate.org&amp;hp=atomic&amp;ac=2&amp;amp=0&amp;host=electionwebsitetemplate.org&amp;ref=&amp;fcp=0&amp;rand=0.34939686582055796" alt="" width="6" height="5" id="wpstats"></body></html>


<?php
}else{
    echo "<script> location.href='https://evotingng.000webhostapp.com/index.php'; </script>";

}
?>