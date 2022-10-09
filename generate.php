<?php

$allFile = array("music" => glob("*.mp3"));
$dataMusic = fopen("data.json", "w") or die("Unable to open file!");

fwrite($dataMusic, json_encode($allFile));

fclose($dataMusic);
?>