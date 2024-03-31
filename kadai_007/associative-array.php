<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>連想配列を作って値とキーを出力しよう</title>
</head>

<body>
  <p>
    <?php
      // 連想配列を作成し、値を代入する
      $grocery = ['naeme' => 'onion', 'price' => 200, 'weight' => 160];

      // ブラウザへ出力
      print_r($grocery);
    ?>
  </p>
</body>
</html>