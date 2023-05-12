<?php
// $_GET取得網址上帶有的參數值
// $_GET 本身就是關聯式ARRAY
// print_r($_GET);
// echo "<br>";
// // 陣列取得索引值的資料
// echo "你點了連結".$_GET["id"];

$city["Japan"]="Tokyo";
$city["France"]="Paris";
$city["Germany"]="Berlin";

// input 框身上的name
// 這裡country 類似變數名稱
// 用$_GET得到 網址傳遞的參數
$a=ucfirst(strtolower($_GET["country"]));
echo "你所查詢的國家首都是:".$city[$a];
?>