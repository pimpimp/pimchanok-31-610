<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form mathod="GET" >
        <h1>กรุณากรอกชื่อ</h1>
        <div>
        <label for="age">ชื่อทีมที่ 1</label>
        <input type="text" name = "name1">
        <label for="name">ใส่คะแนน</label>
        <input type="text" name = "score1">
        </div>
        <div>
        <label for="age">ชื่อทีมที่ 2</label>
        <input type="text" name = "name2">
        <label for="name">ใส่คะแนน</label>
        <input type="text" name = "score2">
        </div>
        <input type="submit" value = "enter" >
        <?php 
            if (isset($_GET['name1']) && isset($_GET['score1']) && isset($_GET['name2']) && isset($_GET['score2'])){
            $name1 = $_GET['name1'];
            $name2 = $_GET['name2'];

            $score1 = $_GET['score1'];
            $score2 = $_GET['score2'];
            if($score1 > $score2){
                echo "$name1 WIN  $name2 $score1 - $score2 ";
            }
            else{
                echo "$name2 WIN $name1 $score2 - $score1  ";
            }
            }
        ?>
    </form>
</body>
</html>
