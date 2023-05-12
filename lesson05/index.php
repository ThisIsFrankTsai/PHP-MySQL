<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- id=1 之中的id 是關聯式array的index 而1是值 -->
    <!-- <a href="result.php?id=1">連結1</a> 
    <a href="result.php?id=2">連結2</a>     -->
    <!-- action 傳到哪一個網頁 method 用什麼樣的方式傳 -->
     <form action="result.php" method="get"> 
        <h3>查詢國家首都</h3>
        <Input type="text" placeholder="請輸入要查詢的國家" name="country" required></Input>
        <input type="submit" value="查詢">
        <!-- //placeholder屬性:底字 name屬性:未來會透過country這個值，來取得使用者輸入的資料   required屬性:讓使用者必填  //
        //value屬性:按鈕上面的文字      -->
    </form> 
</body>
</html>

