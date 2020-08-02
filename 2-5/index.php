<?PHP
$age = 22;

if($age >= 20) {
    echo "お酒が飲めるぞ!";
}else {
    echo "お酒は二十歳になってから!!";
}
echo "<br>"; 


//課題
$name = "taro";
$password = "pass";

if($name === "taro" && $password ==="pass"){
    echo "ログイン成功です";

}elseif($name == "taro"){
    echo "パスワードが間違っています";

}elseif($password == "pass"){
    echo "名前が間違ってます";
    
}else{
    echo "入力情報が間違っています";
}
echo "<br>";
echo "<br>";
echo "IT用語" . "<br>";

echo "1.IDE(統合開発環境)"."<br>";
echo "開発環境のこと。プログラムを作るために必要な物が全部詰まった開発環境"."<br>";
echo "2.JOIN(データベースにおいて)"."<br>";
echo "複数のテーブルを合体させて一つのテーブルにする"."<br>";
echo "3.コンフリクト"."<br>";
echo "同じものを同時に使おうとしてぶつかっちゃった状態"."<br>";
?>
