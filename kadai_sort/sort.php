<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP基礎編</title>
</head>

<body>
  <p>
    <?php
    // ソートする配列を宣言
    $num = [15, 4, 18, 23, 10];

    // ソートのための関数を定義する
    function sort_2way($array, $order) {
      // $orderがTRUEなら配列$numを昇順にし、そうでなければ降順
      if($order === TRUE) {
        echo '昇順にソートします。'.'<br>';
        sort($array);
      } else {
        echo '降順にソートします。'.'<br>';
        rsort($array);
      }

      // 配列$numの要素を1つずつ改行しながら表示
      foreach ($array as $value) {
        echo "{$value}<br>";
      }
    }

    // 昇順にする
    sort_2way($num, TRUE);

    // 降順にする
    sort_2way($num, FALSE);
    ?>
  </p>  
</body>
</html>