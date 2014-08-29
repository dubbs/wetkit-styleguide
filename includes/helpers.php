<?php

function patternize($title, $filename) {
	echo '<div class="pattern">' . "\n";
	echo ' <details class="pattern-details">' . "\n";
	echo '  <summary class="pattern-name">'.$title.'</summary>' . "\n";
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
