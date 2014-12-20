<?php

/**
 * Add this line of code in your page:
 *<?php include "autoqote.php"; ?>
 */

$quotes[] = "<p><b>Islam is peace.</b><p>";
$quotes[] = "<p><b>Allah is almighty</b></p>";
$quotes[] = "<p><b>Quran is a complete code of life</b></p>";
$quotes[] = "<p><b>Namaz is the best exercise</b></p>";
$quotes[] = "<p><b>Obey your parents</b></p>";
$quotes[] = "<p><b>Allah is One<b></p>";

srand ((double) microtime() * 1000000);
$autoqote = rand(0,count($quotes)-1);

echo "<p>" . $quotes[$autoqote] . "</p>";

?> 

