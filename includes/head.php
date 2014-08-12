<!DOCTYPE html>
<!--[if lt IE 9]><html class="no-js lt-ie9" lang="en" dir="ltr"><![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" dir="ltr"> <!--<![endif]-->
<head>
<meta charset="utf-8"/>
<title></title>
<meta content="width=device-width, initial-scale=1" name="viewport"/>
<meta name="description" content="Provides an interactive menu with optional sub-menus."/>

<!--[if gte IE 9 | !IE ]><!-->
<link href="http://wet-boew.github.io/v4.0-ci/assets/favicon.ico" rel="icon" type="image/x-icon"/> 
<link rel="stylesheet" href="http://wet-boew.github.io/v4.0-ci/css/wet-boew.min.css"/> 
<!--<![endif]-->
<link rel="stylesheet" href="/wetkit-styleguide/css/style.css">
<link rel="stylesheet" href="/wetkit-styleguide/css/styleguide.css">
<!--[if lt IE 9]>
<link href="http://wet-boew.github.io/v4.0-ci/assets/favicon.ico" rel="shortcut icon"/> 
<link rel="stylesheet" href="http://wet-boew.github.io/v4.0-ci/css/ie8-wet-boew.min.css"/> 
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
<script src="http://wet-boew.github.io/v4.0-ci/js/ie8-wet-boew.min.js"></script>
<![endif]-->
<noscript><link rel="stylesheet" href="http://wet-boew.github.io/v4.0-ci/css/noscript.min.css"/></noscript>
</head>
<body vocab="http://schema.org/" typeof="WebPage">
	<ul id="wb-tphp">
		<li class="wb-slc">
			<a class="wb-sl" href="#wb-cont">Skip to main content</a>
		</li>
		<li class="wb-slc visible-sm visible-md visible-lg">
			<a class="wb-sl" href="#wb-info">Skip to "About this site"</a>
		</li>
	</ul>

<?php function patternize($title, $filename) {
	echo '<div class="pattern">' . "\n";
	echo ' <details class="pattern-details">' . "\n";
	echo '  <summary class="pattern-name">'.$title.'</summary>' . "\n";
	echo '  <pre><code class="language-markup">' . "\n";
	echo htmlspecialchars(file_get_contents($filename));
	echo '  </code></pre>' . "\n";
	echo ' </details>' . "\n";
	include $filename;
	echo "\n" . '</div>' . "\n\n";
} ?>