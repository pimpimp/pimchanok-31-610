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
        <label for="age">เดือน</label>
        <input type="text" name = "month">
        </div>
        <input type="submit" value = "enter" >
        <?php 
            if (isset($_GET['month'])){
        <?php
        if(isset($_GET['month'])){
            $month = $_GET['month'];
            if($score1 > $score2){
                echo "$name1 WIN  $name2 $score1 - $score2 ";

            switch($month){
                case 'มกราคม':
                    Day(31);
                    break;
                case 'กุมภาพันธ์':
                    Day(29);
                    break;
                case 'มีนาคม':
                    Day(31);
                    break;
                case 'เมษายน':
                    Day(30);
                    break;
                case 'พฤษภาคม':
                    Day(31);
                    break;
                case 'มิถุนายน':
                    Day(30);
                    break;
                case 'กรกฎาคม':
                    Day(31);
                    break;
                case 'สิงหาคม':
                    Day(31);
                    break;
                case 'กันยายน':
                    Day(30);
                    break;
                case 'ตุลาคม':
                    Day(31);
                    break;
                case 'พฤศจิกายน':
                    Day(30);
                    break;
                case 'ธันวาคม':
                    Day(31);
                    break;
            }
            else{
                echo "$name2 WIN $name1 $score2 - $score1  ";
            }
            }
        ?>
        }

        function Day($d){
            $m = $_GET['month'];
            echo 'เดือน'.$m."มี ".$d." วัน";
        }
    ?>

    </form>
</body>
</html>
