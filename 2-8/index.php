<?php
$fruits = ["りんご","みかん","もも"];
// echo $fruits[0];
// echo $fruits[1];
// echo $fruits[2];
foreach ($fruits as $value) {
    echo $value;
    echo "<br>";
}
$fruits = ["apple" =>"といったらりんご","orenge" =>"といったらみかん","peach" => "といったらもも"];
foreach($fruits as $key => $value){
    echo $key;
    echo $value;
    echo "<br>";
}
?>
<?php
echo "<br>";
echo "IT用語"."<br>";
echo "・トランザクション"."<br>";
echo "コンピュータシステムにおける永続的なデータに対する不可分な一連の処理"."<br>";
echo "・排他ロック"."<br>";
echo "他人が何もできないロック。データベースシステムなどで記憶領域への同時アクセスを制限するロック機能のひとつ"."<br>";
echo "・チューニング"."<br>";
echo "調整すること"."<br>";
?>