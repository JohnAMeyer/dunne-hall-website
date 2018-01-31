<?php

//should do all processing here or on outside?
file_put_contents("menu.csv", fopen("https://docs.google.com/spreadsheets/export?id=1dtgm4G_NNzj6FIhbjvwSkxO14dSfLFuy4NmLfuVZDzQ&exportFormat=csv", 'r'));

file_put_contents("leaders.txt", fopen("https://docs.google.com/document/export?id=1ons756KnNCn2LXkWmxPwEwAuHpLwSpLLofPAQBxtsqs&exportFormat=txt", 'r'));

$arr = array_reverse(file("https://docs.google.com/document/export?id=1ons756KnNCn2LXkWmxPwEwAuHpLwSpLLofPAQBxtsqs&exportFormat=txt"));

$html = '<div class="hidden-xs hidden-sm hidden-md">';
$textPos = 0;
$titles = array();
$title = array();
$item = array();
$i = 0;
$j = 0;
foreach ($arr as $line) {
	$line = preg_replace('/[^[:ascii:]]/', "", $line);
	if(strlen($line) == 0) continue;
	if($line[0] == "$"){
		$titles[substr($line,1)] = $title;
		$title = array();
		$j = 0;
	}elseif($line[0] == "#"){
		$item["name"] = substr($line,1);
		$title[$j++] = $item;
		$item = array();
		$i = 0;
	}elseif($line[0] == "?"){
		if(array_key_exists("img", $item))
			$item["img2"] = substr($line,1);
		else
			$item["img"] = substr($line,1);
	}else{
		$item[$i++] = $line;
	}
}

$side = 1;
$titles = array_reverse($titles);
foreach ($titles as $title => $x) {
	$x = array_reverse($x);
	$html .= '<div class="text-center"><h3><u>'.$title."</u></h3></div>";
	foreach ($x as &$y){
		if(array_key_exists('img', $y)){
			file_put_contents(preg_replace("/[^a-zA-Z0-9_-]/", "",$y["img"]) . ".jpg", fopen("https://docs.google.com/uc?id=".preg_replace("/[^a-zA-Z0-9_-]/", "", $y["img"])."&export=download", 'r'));
			if (array_key_exists("img2", $y))
				file_put_contents(preg_replace("/[^a-zA-Z0-9_-]/", "",$y["img2"]) . ".jpg", fopen("https://docs.google.com/uc?id=".preg_replace("/[^a-zA-Z0-9_-]/", "", $y["img2"])."&export=download", 'r'));
		}
		$html .= '<div class="media">';
		if(array_key_exists("img2", $y) || array_key_exists('img', $y) && ($side *= -1) == -1){
			$html .= '<div class="media-left media-'.(array_key_exists("img2", $y)?"top":"middle").'"><a href="#"><img class="img-rounded" src="../cache/'.preg_replace("/[^a-zA-Z0-9_-]/", "",$y["img"]).'.jpg" /></a></div>';
		}
		$html .= '<div class="media-body media-middle">';
		$html .= '<h4 class="media-heading">'.$y["name"].'</h4>';
		$y = array_reverse($y);
		foreach ($y as $key => $z){
			if(is_int($key)){
				$html .= '<p class="indented">' . $z . '</p>';
			}
		}
		$html .= "</div>";
		if(array_key_exists("img2", $y) || array_key_exists('img', $y) && $side == 1){
			$html .= '<div class="media-right media-'.(array_key_exists("img2", $y)?"bottom":"middle").'"><a href="#"><img class="img-rounded" src="../cache/'.preg_replace("/[^a-zA-Z0-9_-]/", "",$y[array_key_exists("img2", $y)?"img2":"img"]).'.jpg" /></a></div>';
		}
		$html .= "</div>";
	}
}

$html .= '</div><div class="hidden-lg hidden-xl">';

$isFirst = true;
foreach ($titles as $title => $x) {
	$x = array_reverse($x);
	if(!$isFirst) $html .= "<hr/>";
	$isFirst = false;
	$html .= '<div class="text-center"><h3><u>'.$title."</u></h3></div>";
	foreach ($x as &$y){
		$html .= '<div class="text-center">';
		if(array_key_exists("img2", $y) || array_key_exists('img', $y))
			$html .= '<img class="img-rounded img-responsive" src="../cache/'.preg_replace("/[^a-zA-Z0-9_-]/", "",$y["img"]).'.jpg" />';
		$html .= '<h4>' . $y["name"] . '</h4>';
		$html .= "</div>";
		$y = array_reverse($y);
		foreach ($y as $key => $z){
			if(is_int($key)){
				$html .= '<p class="indented">' . $z . '</p>';
			}
		}
	}
}
$html .= "</div></div>";

file_put_contents("leaders.html",$html);

file_put_contents("gallery.txt", fopen("https://docs.google.com/document/export?id=1fkLMzWBM-iqV8AeV2AHryNQDrwCaXyOFCS7cQdrnQCw&exportFormat=txt", 'r'));
$arr = file("gallery.txt");
foreach ($arr as $i){
	$i = preg_split("/\s?:\s?/",$i, 3);
	file_put_contents(preg_replace("/[^a-zA-Z0-9_\-]/","",$i[0]).".jpg", fopen("https://docs.google.com/uc?id=".preg_replace("/[^a-zA-Z0-9_\-]/","",$i[0])."&export=download", 'r'));
}

echo "<h1>Updating finished</h1>";