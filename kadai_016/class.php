<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>
<body>
    <p>
        <?php
        // クラスFoodを作成する
        class Food {

            // プロパティを作成する
            private $name;
            private $price;

            // メソッドを作成する
            public function show_price () {
                echo $this->price . "<br>";
            }

            // コンストラクトを作成する
            public function __construct ($name, $price) {
                $this->name = $name;
                $this->price = $price;
            }
        }

        // インスタントを作成する
        $food_detail = new Food('potato', 250);
        



        // クラスAnimalを作成する
        class Animal {

            // プロパティを作成する
            private $name;
            private $height;
            private $weight;

            // メソッドを作成する
            public function show_height () {
                echo $this->height . "<br>";
            }

            // コンストラクタを作成する
            public function __construct ($name, $height, $weight) {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }
        }

        // インスタントを作成する
        $animal_detail = new Animal('dog', 60, 5000);  
        


        // メソッドにアクセスして実行する
        print_r($food_detail);
        echo '<br>';
        print_r($animal_detail);
        echo '<br>';
        $food_detail->show_price();     
        $animal_detail->show_height();
        ?>
    </p>    
</body>
</html>