<?php

header('Content-Type: text/plain');

$text = isset($_GET['text']) ? $_GET['text'] : '';

$text_arr = explode(" ", $text);
$r_text = '';

foreach($text_arr as $value) {
	if ($value) {
		$r_text .= ' ' . $value;
	}
}

echo trim($r_text);

//echo trim(preg_replace('/\s{2,}/', ' ', $text));
