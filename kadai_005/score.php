<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP基礎編-テストの平均点を計算しよう-</title>
</head>

<body>
  <p>
    <?php
      // 変数score1～score10の作成
      $score1 = 80;
      $score2 = 60;
      $score3 = 55;
      $score4 = 40;
      $score5 = 100;
      $score6 = 25;
      $score7 = 80;
      $score8 = 95;
      $score9 = 30;
      $score10 = 60;

      // 平均点の計算
      $average = ($score1 + $score2 + $score3 + $score4 + $score5 + $score6 + $score7 + $score8 + $score9 + $score10) / 10;

      // ページ上に出力
      echo $average;
    ?>
  </p> 
</body>

</html>