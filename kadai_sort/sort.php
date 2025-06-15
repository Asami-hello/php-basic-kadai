<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>
<body>
    <p>
        <?php
        // ソート対象の配列
        $num = [15, 4, 18, 23, 10];
        $array = $num;

        function sort_2way (&$array, $order) {
            if ($order == true) {
                echo "昇順にソートします。<br>";
                sort($array);
            } else {
                echo "降順にソートします。<br>";
                rsort($array);
            }
            foreach ($array as $value) {
                echo $value . "<br>";
            }
        }

        // 昇順ソートの呼び出し
        sort_2way($num, true);
        // 降順ソートの呼び出し
        sort_2way($num, false);
        ?>
    </p>
</body>
</html>