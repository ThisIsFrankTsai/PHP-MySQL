<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frank's Website</title>
</head>
<body>
    <!-- 表格 3*3 ，預設無外框-->
    <table border="1px"> 
        <tr>
            <!-- 橫向合併 column span -->
            <td colspan="3">1</td>
        </tr>
        <tr>
            <!-- 直向合併 row span -->
            <td rowspan="2">4</td>
            <td>5</td>
            <td>6</td>
        </tr>
        <tr>
            <td>8</td>
            <td>9</td>
        </tr>
    </table>
    <!-- 小試身手 囚犯賽局 -->
    <table border="1px">
        <tr>
            <td colspan="2" rowspan="2" >囚犯賽局</td>
            <td colspan="2">犯人A</td>
        </tr>
        <tr>
        
            <td>招供</td>
            <td>不招</td>
        </tr>
        <tr>
            <td rowspan="2">犯人B</td>
            <td>招供</td>
            <td>各判刑五年</td>
            <td>A:10年;B:1年</td>
        </tr>
        <tr>
            <td>不招</td>
            <td>A:1年;B10年</td>
            <td>各判3年</td>
        </tr>
    </table>
    <!-- emmet 語法table>tr*3>td*3 一層包一層-->
    <table>
        <table>
            <tr>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </table>
    </table>

    <!-- 無序清單 -->
    <ul>
        <li>item1</li>
        <li>item2</li>
        <li>item3</li>
        <li>item3</li>
        <li>item3</li>
        <li>item3</li>
        <li>item3</li>
        <li>item3</li>
    </ul>
    <!-- 有序清單 -->
    <!-- emmet語法，直接在有序清單中展開 ol>li*3 快速展開 -->
    <ol>
        <li>項目1</li>
        <li>項目2</li>
        <li>項目3</li>
    </ol>

    <!-- 我是註解: -->
    <!-- 標題 -->
    <h1>標題1</h1>
    <h2>標題2</h2>
    <h3>標題3</h3>
    
    <hr>
    <!-- 文字段落 -->
    <!-- 自動產生假文字 lorem字數+tab -->
    <!-- span行內文字標籤: 包住文字段落中某些文字內容，我們希望套用css樣式，同時又可以行內水平排列在段落內 -->
    <p><spqn>wiki</span>,<b> 自由的百科全書</b></p>
    <p><span> Lorem</span> ipsum dolor sit amet consectetur adipisicing elit.
         Animi excepturi dignissimos libero necessitatibus minus odit nulla, 
         non numquam ducimus neque doloremque amet dolor quaerat reiciendis 
         vel! Animi quas enim delectus?</p>
         <!-- 超連結 -->
         <!-- target="_blank" 開啟新連結 -->
         <a href=" https://www.google.com.tw" target="_blank">前往google</a>
         <!-- 超連結 設定子頁面檔案路徑 -->
         <a href="./pages/about.php">關於我</a>
         <!-- 圖片 -->
        <img src="https://picsum.photos/id/219/400/300" alt="logo">
        <img src="./images/nara-g7fffdc503_1920.jpg" alt="Nara" width="500px">

        
</body>
</html>