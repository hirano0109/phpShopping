<?php
require_once('dbc.php');

$blogs = $_POST;
// $blogs = $_POST;

// if (empty($blogs['title'])){
//     exit('タイトルを入力してください');
// }

// if (mb_strlen($blogs['title'] < 191)){
//     exit('タイトルは191文字以下にしてください');
// }

// if (empty($blogs['content'])){
//     exit('本文を入力してください');
// }

// if (empty($blogs['category'])){
//     exit('カテゴリーは必須です');
// }

// if (empty($blogs['publish_status'])){
//     exit('公開ステータスは必須です');
// }
try{
$dbc = new Dbc();
$dbc->blogUpdate($blogs);
$message = '更新しました';

}catch(Exception $e){
    $message = 'エラーが発生しました';
}
?>