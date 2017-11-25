<?php
require_once 'vendor/autoload.php';
$r = json_decode(file_get_contents("https://newsapi.org/v2/everything?q=" . urlencode($_GET['q']) . "&apiKey=297a2382d51e4302a38b6a38fa167b7a"));
$s = "";
foreach ($r->articles as $i) {
	$s .= $i->description . " ";
}
$summarizer = new \Znck\Summarizer\Summarizer;
$output = $summarizer->summarize($s);
echo $output;
