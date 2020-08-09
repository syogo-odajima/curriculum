<?php 
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成
$name = $_POST["name"];
$answer1 = $_POST["answer1"];
$answer2 = $_POST["answer2"];
$answer3 = $_POST["answer3"];

$response1 =  $_POST["response1"];
$response2 =  $_POST["response2"];
$response3 =  $_POST["response3"];
//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する
function check ($answer , $response) {
    if ($answer == $response) {
        echo "正解!";
    }else{
        echo "残念・・・";
    }
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>3章チェックテスト</title>
  <link rel="stylesheet" href="index.css">
</head>
<body>
<p><?php echo $name; ?>さんの結果は・・・？</p><!--POST通信で送られてきた名前を表示-->
<p>①の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php check ($answer1 , $response1); ?>
<p>②の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php check ($answer2 , $response2); ?>
<p>③の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php check ($answer3 , $response3); ?>
</body>
</html>
