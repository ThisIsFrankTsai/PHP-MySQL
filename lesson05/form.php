<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action=" get-data.php" method="post">
        <p>
            <label for="user-name">姓名</label>
            <input type="text" name="user-name" id="user-name">
        </p>
        <p>
            <span>性別</span>
            <!-- 同一個題組  name相同 checked 預設被選-->
            <input type="radio" name="gender" value="male" id="male" checked>
            <label for="male">男</label>
            <input type="radio" name="gender" value="female" id="female">
            <label for="female">女</label>
        </p>
        <p>
        <label for="color">選顏色</label>
        <select name="color" id="color">
        <!-- value為get-data接收到的選項  selected 預設被選-->
            <option value="red" selected >紅色</option>
            <option value="blue">藍色</option>
            <option value="green">綠色</option>
        </select>

        </p>
        <input type="submit" value="送出">
    </form>
    
</body>
</html>