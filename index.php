<?php

include "checkNum.php";

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $number = $_REQUEST["number"];
    $arr = explode(" ", $number, 2);

    $viettel = ["032", "033", "034", "035", "036", "037", "038", "039"];
    $vinaphone = ["083", "084", "085", "081", "082"];
    $mobifone = ["070", "079", "077", "076", "078"];
}
?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="get">
    <label>
        <textarea name="number"></textarea>
    </label>
    <button>Check</button>
</form>
<div>
    <?php
    if (isset($number)) {
        if (checkNumber($viettel, $arr[0])) {
            echo "Bạn đang sử dụng dịch vụ của nhà mạng Viettel";
        } elseif (checkNumber($mobifone, $arr[0])) {
            echo "Bạn đang sử dụng dịch vụ của nhà mạng Mobifone";
        } elseif (checkNumber($vinaphone, $arr[0])) {
            echo "Bạn đang sử dụng dịch vụ của nhà mạng Vinaphone";
        }
    }
    ?>
</div>
</body>
</html>
