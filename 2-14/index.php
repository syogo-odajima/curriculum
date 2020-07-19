<?php
$members = ["tanaka" , "sasaki" , "kimura" , "yoshida" , "ueda"];
echo count($members);"<br>"
?>
"<br>"

<?php
$member = ["tanaka" , "sasaki" , "kimura" , "yoshida" , "ueda"];
sort($member);
var_dump($members);"<br>"
?>
"<br>"

<?php
$members = ["tanaka", "sasaki", "kimura", "yoshida", "uchida"];
$atstr = implode("@", $members);
var_dump($atstr);"<br>"
?>
"<br>"

<?php
$members = ["tanaka", "sasaki", "kimura", "yoshida", "uchida"];
$atstr = implode("@", $members);
var_dump($atstr);

$re_members = explode("@", $atstr);
var_dump($re_members);"<br>"
?>

"<br>"
<?php
echo "要件定義とは、お客様の要望を、まとめる工程の一つ"."<br>";
echo "単体テストとは、合体前の部品のテスト"."<br>";
echo "結合テストとは、合体してちゃんと動くかを確かめるテスト"."<br>";
echo "テスト仕様書とは、どんなテストをするのかをまとめたもの"."<br>";
?>
