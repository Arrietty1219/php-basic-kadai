<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>kadai_016</title>
</head>

<body>
  <p>
    <?php
    // クラスを定義する
    class Food
    {
      private $name;
      private $price;

      // コンストラクタを定義する
      public function __construct(string $name, int $price)
      {
        $this->name = $name;
        $this->price = $price;
      }

      //メソッドを定義する
      public function show_price()
      {
        echo $this->price . '<br>';
      }
    }

    // インスタンス化する
    $food = new Food('potato', 250);

    // インスタンス$foodの各プロパティの値を出力する
    print_r($food);

    // print_rの改行
    echo '<br>';

    // クラスを定義する
    class Animal
    {
      private $name;
      private $height;
      private $weight;

      // コンストラクタを定義する
      public function __construct(string $name, int $height, int $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
      }
      
      //メソッドを定義する
      public function show_height() {
        echo $this->height;
      }
    }

      // インスタンス化する
      $animal = new Animal('dog', 60, 5000);
    
      // インスタンス$animalの各プロパティの値を出力する
      print_r($animal);

      // print_rの改行
      echo '<br>';

    //メソッドにアクセスして実行する
    $food->show_price();
    $animal->show_height();
    ?>
  </p>
</body>