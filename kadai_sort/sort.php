<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // ソートする配列を宣言
        $nums = [15, 4, 18, 23, 10];

        // 宣言した配列とは無関係の関数(箱を想定)を作成する
        function sort_2way($array, $order) {
            if ($order == true) {
                echo '昇順にソートします。<br>';
                sort($array);
                foreach($array as $num) {
                    echo "{$num}<br>";
                }
            } else {
                echo '降順にソートします。<br>';
                rsort($array);
                foreach($array as $num) {
                    echo "{$num}<br>";
                }
            
        }
    }
        // sort_2way($array, $order)の$arrayと$orderに引数を渡して実行
        // $arrayに$numが代入され、ソートされる
        // $orderにtrue or falseが代入され、それぞれに応じた処理を行う
        sort_2way($nums,true);
        sort_2way($nums,false);
        ?>
    </p>
</body>

</html>
