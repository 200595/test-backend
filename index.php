<?php
require_once 'function.php';
$n = $_POST['n'];
$string_a = $_POST['a'];
$a = explode(',', $string_a);
if (count($a) > 1){
    $b = mutateTheArray($n, $a);
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<div style="margin: 10% 0 0 20%">
    <form action="index.php" method="post">
        <?php
        if ($n != count($a)){
            print_r("<h2>Độ dài của mảng '\$n' không bằng '\$a'</h2>");
        }
        if (count($a) < 2){
            print_r("<h2>Độ dài của mảng '\$n' ít nhất là 2 phần tử</h2>");
        }
        ?>
        <div>
Nhập độ dài $a của mảng $n:
        </div>
        <div>
            <input type="number" name="n" required><br>
        </div>
        <div>
Nhập mảng $n (Cách nhau bằng dấu ',')
        </div>
        <div>
            <input type="text" name="a" required><br>
        </div>
        <button type="submit" style="margin-top: 10px">Gửi</button>
    </form>
    <h2 style="margin-top: 10px">
    <?php
    if (isset($b)){
        echo "Mảng '\$b': ";
        echo "<pre>";
        print_r($b);
        echo "</pre>";
    }
     ?>
    </h2>
</div>

</body>
</html>