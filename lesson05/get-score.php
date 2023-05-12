<?php
echo "你的國文成績為:".$_POST["chinese"]."分<br>";
echo "你的英文成績為:".$_POST["english"]."分<br>";
echo "你的數學成績為:".$_POST["math"]."分<br>";

$total=$_POST["chinese"]+$_POST["english"]+$_POST["math"] ;
echo "總分:".$total."分<br>";
echo "平均:".round($total/3,2)."分<br>";
?>