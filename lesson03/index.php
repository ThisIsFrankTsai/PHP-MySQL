
<?php
    // 單行註解
    /*
    多行註解
    多行註解
    */
    // $number = 10 ;
    // $number =$number+5;
    // $name="Harry Poter"; //變數名稱大小寫不同
    //變數輸出到畫面上
    //echo $number;
    //hello!harry poter 
    //文字串接運算子. 組裝連結兩個文字(或變數)
    //echo "Hello!".$name;
    
    //基本資料型別
    $a="5";
    //var_dump($a);
    $b=9;
    //var_dump($b);
    $c=$a.$b;
    //var_dump($c);
    $d=$a+$b;//加法的時候會檢查，將文字轉數值
    // var_dump($d);
    // 浮點數
    $numberFloat=13.5;
    // var_dump($numberFloat);
    $numberInt=14;
    // var_dump($numberInt);
    //單引號或雙引號包住文字型態
    // 雙引號當中 包住變數，會自動把變數的值拿過來做串接輸出
    $name="Frank";
    // Hello!Frank
    // echo "Hello!".$name;
    // echo "<br>";  // 換行
    // echo "Hello! $name";
    // echo "<br>";  // 換行
    // 單引號當中若有變數不會判別成變數
    // echo 'Hello!$name';

    // echo "I'm happy!";
    // echo "<br>";
    // // 跳脫字元 載要顯示的引號前面加\
    // echo 'I\'m happy!';
    // echo "<br>" ;
    // echo "I'm learning \"PHP\"!" ;
    // echo "<br>";
    // echo 'I\'m learning "PHP"!';
    // 小試身手
    $name="Frank";
    $age=30;

    echo "我是$name";
    echo "<br>" ;
    echo "我今年".$age."歲<br>";
    echo "我正在學\"PHP\"";
    echo "<br>" ;
    // 運算子
    echo 5%2;
    echo "<br>" ;
    // 複合運算子
    $number=5;
    // $number=$number+10;
    $number+=10 ;
    echo $number;
    echo "<br>";
    $x=5;
    // 希望遞增1的結果存到y
    // ++放後面:1.先執行=將x原本的5設定給y 2.再去執行$x++ 將$x更新成6
    // ++放前面:1.先執行$x遞增1 2.= 將6設定給y
    $y=++$x;
    echo "y:".$y."<br>";
    echo "x:".$x;   
    echo "<br>";
    // 小試身手
    $chinese =72;
    $english=60;
    $math=80;
    $total=$chinese+$english+$math;
    $avg=$total/3 ;
    // 指定小數位數四捨五入到第幾位 round(資料,取道小數點後幾位)
    $avg1=round($total/3,2);

    echo "國文成績".$chinese."分<br>" ;
    echo "英文成績".$english."分<br>" ;
    echo "數學成績".$math."分<br>" ;
    echo "三科的平均".$avg."分<br>" ;
    echo "三科的平均".$avg1."分<br>" ;
    echo "三科的總分".$total."分<br>" ;
    echo "<br>";

    $a="20";
    var_dump($a);
    echo "<br>";
    $b=20;
    // 比較 是否相等 運算子
    // ==寬鬆檢查:檢查值不檢查型態
    var_dump($a == $b);
    echo "<br>";
    // === 嚴格檢查:檢查值也檢查型態
    var_dump($a === $b);
    echo "<br>";
    // 比較是否不相等
    // != 寬鬆檢查:檢查值不檢查型態
    var_dump($a != $b);
    echo "<br>";
    // === 嚴格檢查:檢查值也檢查型態
    var_dump($a !== $b);
    echo "<br>";
    //  logical operator
    $data=80;
    // data是否介於1~50之間
    //  && and 每個問題都要true 才會回答true
    // || or 
    $result=($data>0) && ($data<=50) ;
    var_dump($result);
    echo "<br>";
    $result=($data>0) || ($data<=50) ;
    var_dump($result);
    echo "<br>";
    // ! :把true 變成false 把false 變成true
    $ans=true;
    var_dump(!$ans);
    var_dump($ans);




?>
    
