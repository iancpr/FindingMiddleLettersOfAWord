<?php

echo "Enter your word \n";
$str = stream_get_line(STDIN, 999, "\n");
$wordlength=strlen($str);
echo "The length of " . $str . " is " . $wordlength . " characters long";
echo "\n";

if ($wordlength %2 == 0){
    $wordlength = $wordlength - 2;
    $trim = $wordlength / 2;
    $evenmiddle = substr($str , $trim, -$trim);  
    echo $evenmiddle . " are the middle characters";
}else {

//find number of letters to trim either side
$trim = $wordlength / 2;

//round down the number & display
$rounddown = round($trim, 0, PHP_ROUND_HALF_DOWN);


//Find middle Character (ODD)
$oddmiddle = substr($str, $rounddown, -$rounddown);
echo $oddmiddle . " is the middle character";
}
