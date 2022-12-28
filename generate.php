<?php

$dataCategories = [];

while($dirs = glob('*', GLOB_ONLYDIR)) {
  $data[$dirs] = array("music" => glob("*.mp3"));
}


$dataMusic = fopen("data.json", "w") or die("Unable to open file!");

fwrite($dataMusic, json_encode($dataCategories));

fclose($dataMusic);
?>
