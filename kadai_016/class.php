<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>クラスを2つ作ってそれぞれのインスタンスを出力しよう</title>
</head>
<body>
  <p>
    <?php
    // Foodクラスを定義する
    class Food {
      // プロパティを定義する
      public $name;
      public $price;

      // コンストラクタ
      public function __construct(string $name, int $price) {
        $this->name = $name;
        $this->price = $price;
      }

      // priceプロパティを表示するshow_priceメソッド
      public function show_price() {
        echo $this->price . '<br>';
      }
    }

    // Animalクラスを定義する
    class Animal {
      // プロパティを定義する
      public $name;
      public $height;
      public $weight;

      // コンストラクタ
      public function __construct(string $name, int $height, int $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
      }

      // heightプロパティを表示するshow_heightメソッド
      public function show_height() {
        echo $this->height . '<br>';
      }
    }

    // 任意の食べ物
    $eggplant = new Food('ナス', 238);
    print_r($eggplant);
    echo '<br>';

    // 任意の動物
    $cat = new Animal('ネコ', 30, 10);
    print_r($cat);
    echo '<br>';

    // メソッドへアクセス
    $eggplant->show_price();
    $cat->show_height();

    ?>
  </p>
</body>
</html>