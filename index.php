<?php

//first ex
$my_text = "supercalifragilisti";
$text_length = strlen($my_text);
echo $my_text . "<br/>" . $text_length; 

//second ex
$word = $_GET["word"];
echo "<br/>". str_replace($word, "***", $word)."<br/>". strlen(str_replace($word, "***", $word)) ;
