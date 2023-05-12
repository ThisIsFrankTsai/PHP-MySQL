<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- 新增css連結 外觀修改 推薦使用-->
    <link rel="stylesheet" href="./index.css">
</head>
<body>
    <h1 class="title" id="main-title">title1</h1>
    <h2 class="title">title2</h2>
    <h3 class="title">title3</h3>
    <h3 class="title">title3</h3>

    <!-- 表單元件 -->
    <form action="">
        <p> 
            <!-- <標籤名稱 屬性名稱="值">標籤內容</標籤名稱> -->
            <!-- class  班-->
            <!-- id  獨特的學號 -->
            <!-- 因為是label、input行列元素，為了要換行要用p標籤 -->
            <!-- for 同input id 點選"電話"會對應相對應的id框框，同一個題目選擇相同的name，透過name的值為後端伺服器才會知道這個name題目使用者選擇的值-->
            <label for="phone">電話</label>     
            <input type="text"  name="phone" id="phone" placeholder="09XX-XXX-XXX">
        </p>
        <p>
            <label for="address">地址</label>
            <input type="text" name="address" id="address" >
        </p>
        <p>
            <!-- 單選題  如果 name不同 則會變成不同群組 value為後端接受到的內容，name題目丟出value值 -->
            <!-- span 行內文字標籤 -->
            <span>請選擇一種顏色?</span>
            <!-- br換行用 -->
            <br>
            <input type="radio" name="color" value="red" id="red">
            <label for="red">紅色</label>
            <input type="radio" name="color" value="blue" id="blue">
            <label for="blue">藍色</label>
            <input type="radio" name="color" value="green" id="green">
            <label for="green">綠色</label>
        </p>
        <p>
            <!-- 多選題 -->
            <span>選食物(可複選)</span>
            <input type="checkbox" name="food"  value="pizza" id="pizza">
            <label for="pizza">披薩</label>
            <input type="checkbox" name="food" value="sushi" id="sushi">
            <label for="sushi">壽司</label>
            <input type="checkbox" name="food" value="hamburger" id="hamburger">
            <label for="hamburger">漢堡</label>
        </p>
        <P>
            <!-- 下拉選單 -->
            <label for="sport">請選擇一種運動?</label>
            <select name="sport" id="sport">
                <option value="請選擇">請選擇</option>
                <option value="basketball">籃球</option>
                <option value="baseball">棒球</option>
                <option value="volleyball">排球</option>
                <option value="swimming">游泳</option>
            </select>
        </P>
        <p>
            <!-- 送出 value:設定按鈕上面的文字-->
            <input type="submit" value="送出">
        </p>

    </form>
    
</body>
</html>