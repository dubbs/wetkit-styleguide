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
<link rel="stylesheet" href="/wetkit-styleguide/vendor/wet-boew/css/wet-boew.min.css"/> 
<!--<![endif]-->
<link rel="stylesheet" href="/wetkit-styleguide/assets/css/style.css">
<link rel="stylesheet" href="/wetkit-styleguide/assets/css/styleguide.css">
<!--[if lt IE 9]>
<link href="/wetkit-styleguide/vendor/wet-boew/assets/favicon.ico" rel="shortcut icon"/> 
<link rel="stylesheet" href="/wetkit-styleguide/vendor/wet-boew/css/ie8-wet-boew.min.css"/> 
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
<script src="/wetkit-styleguide/vendor/wet-boew/js/ie8-wet-boew.min.js"></script>
<![endif]-->
<noscript><link rel="stylesheet" href="/wetkit-styleguide/vendor/wet-boew/css/noscript.min.css"/></noscript>
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

<?php include __DIR__ . '/helpers.php' ?>

<!-- syntax highlight all pre-tags on page -->
<span class="wb-prettify all-pre"></span>

<ul>
	<li>
		<a href="/wetkit-styleguide/">home</a>
	</li>
	<li>
		<a href="/wetkit-styleguide/elements">elements</a>
<?php if (startsWith($_SERVER['REQUEST_URI'], '/wetkit-styleguide/elements')) { ?>
		<ul>
			<li>
				<a href="/wetkit-styleguide/elements/category/sections">headings</a>
			</li>
			<li>
				<a href="/wetkit-styleguide/elements/category/text-level-semantics">text</a>
			</li>
			<li>
				<a href="/wetkit-styleguide/elements/category/grouping-content">lists & paragraphs</a>
			</li>
			<li>
				<a href="/wetkit-styleguide/elements/category/forms">forms</a>
			</li>
			<li>
				<a href="/wetkit-styleguide/elements/category/tabular-data">tables</a>
			</li>
			<li>
				<a href="/wetkit-styleguide/elements/category/embedded-content">audio & video</a>
			</li>
			<li>
				<a href="/wetkit-styleguide/elements/category/interactive-elements">details & summary</a>
			</li>
		</ul>
<?php } ?>
	</li>
	<li>
		<a href="/wetkit-styleguide/components">components</a>
<?php if (startsWith($_SERVER['REQUEST_URI'], '/wetkit-styleguide/components')) { ?>
		<ul>
			<li>
				<a href="/wetkit-styleguide/components/menu/all">menu</a>
			</li>
			<li>
				<a href="/wetkit-styleguide/components/overlay/all">overlay</a>
			</li>
			<li>
				<a href="/wetkit-styleguide/components/tabs/all">tabs</a>
			</li>
		</ul>
<?php } ?>
	</li>
</ul>
