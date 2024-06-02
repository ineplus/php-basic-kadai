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
      public function show_price()
      {
        echo $this->price . '<br>';
      }
    }
    class Animal
    {
      private $name;
      private $height;
      private $weight;

      // コンストラクタを定義する
      public function __construct(string $name, int $height, int $weight)
      {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
      }
      public function show_height()
      {
        echo $this->height . '<br>';
      }
    }
    // インスタンス化する
    $potato = new Food('potato', 250);
    $dog = new Animal('dog', 60, 5000);

    // インスタンス$userの各プロパティの値を出力する
    print_r($potato);
    echo '<br>';
    print_r($dog);
    echo '<br>';

    $potato->show_price();
    $dog->show_height();

    ?>
  </p>
</body>

</html>