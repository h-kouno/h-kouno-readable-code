<?php
// ファイル名
$filename = 'recipe-data.txt';

// ファイルの存在チェック
if (!file_exists($filename)) {
    echo "$filename は存在しません";
    exit;
}

// ファイルを取得します
if (! ($recipe_data = file_get_contents($filename))) {
   echo "ファイルが開けません。";
}
   
// 出力
echo $recipe_data;
