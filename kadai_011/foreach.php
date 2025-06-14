<!-- 連想配列を作成 -->
<?php
 $product_details = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];
 
 //  foreach文で1つずつ出力
 foreach ($product_details as $key => $value) {
    echo "{$key}：{$value}<br>";
 }
?>