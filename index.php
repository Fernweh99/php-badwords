<?php
//first ex
$my_text = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incid.";
$text_length = strlen($my_text);
echo $my_text . "<br/>" . $text_length ;
$word = $_GET["word"];
$my_text_censored = str_replace($word, "***", $my_text);
echo "<br/>" . $my_text_censored . "<br/>" . strlen($my_text_censored)
?>