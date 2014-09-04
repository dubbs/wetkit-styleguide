<?php

function slugify($string)
{
	return preg_replace('/[^A-Za-z0-9-]+/', '-', $string);
}

function patternize($title, $filename) {
	echo '<div class="pattern" id="'.slugify($title).'"">' . "\n";
	echo ' <details class="pattern-details">' . "\n";
	echo '  <summary class="pattern-name">'.$title.'<a href="#'.slugify($title).'">#</a></summary>' . "\n";

	echo '  <pre><code class="language-markup">' . "\n";

	echo htmlspecialchars(file_get_contents($filename));
	echo '  </code></pre>' . "\n";

	echo ' </details>' . "\n";
	include $filename;
	echo "\n" . '</div>' . "\n\n";
}

function startsWith($haystack, $needle)
{
    return $needle === "" || strpos($haystack, $needle) === 0;
}
