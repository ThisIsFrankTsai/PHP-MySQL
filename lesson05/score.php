<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="get-score.php" method="POST">
        <p>    
            <!-- id 是為了要給 label 的for 配對 -->
            <label for="chinese">你的國文成績</label>
            <input type="text" name="chinese" id="chinese">
        </p>
        <p>
            <label for="english">你的英文成績</label>
            <input type="text" name="english" id="english">
        </p>
        <p>
            <label for="math">你的數學成績</label>
            <input type="text" name="math" id="math">
        </p>
        <p>
            <input type="submit" value="送出">
        </p>   
    </form> 
</body>
</html>