<?php
// 1.索引式陣列:數字編號0號開始
$colors=array("Red","Green","Blue");
//輸出整組陣列內容
var_dump($colors); 
echo "<br>";
print_r($colors);
echo "<br>";
// 指定數字索引值來輸出該索引對應的資料內容
echo $colors[1];
echo "<br>";
$colors[3]="Black" ;
print_r($colors);
echo "<br>";
// 不放數字預設遞增
$colors[]="Brown";
print_r($colors);
echo "<br>";
// 2.關聯式陣列:自訂索引值
$products=array("iphone7"=>24500,"iphone8"=>26500,);
$products["iphoneX"]=28500;
print_r($products);
echo "<br>";
echo "iphone8的價格是".$products["iphone8"]."元";

echo "<br>";

// Array example
$capitals["Japan"] ='Tokyo';
$capitals["France"] ='Paris';
$capitals["Germany"] ='Berlin';
// 因為大小寫會造成無法查詢array所以
// 1.每個字都先轉成小寫 strtolower()
// 2.在把手字母轉成大寫 ucfirst()
$input=ucfirst(strtolower("japan"));
echo "查詢結果:".$input."的首都是".$capitals[$input];

?>