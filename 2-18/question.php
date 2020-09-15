<?php
//POST送信で送られてきた名前を受け取って変数を作成
$name = $_POST["my_name"];
//①画像を参考に問題文の選択肢の配列を作成してください。
$question1 = ["80", "22", "20", "21"];
$question2 = ["php", "Python", "JAVA", "HTML"];
$question3 = ["join", "select", "insert" ,"update"];
//② ①で作成した、配列から正解の選択肢の変数を作成してください
$answer1 = "80";
$answer2 = "HTML";
$answer3 = "select";
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>2章チェックテスト</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
<p>お疲れ様です <?php echo $name; ?>さん</p><!--POST通信で送られてきた名前を出力-->
<!--フォームの作成 通信はPOST通信で-->
<form action = "answer.php" method = "post">
    <h2>①ネットワークのポート番号は何番？</h2>
    <!--③ 問題のradioボタンを「foreach」を使って作成する-->
    <?php foreach ($question1 as $value) { ?>
        <input type ="radio" name = "response1" value = '<?php echo $value; ?>'> <?php echo '120'; ?>
    <?php } ?>
    <h2>②Webページを作成するための言語は？</h2>
    <!--③ 問題のradioボタンを「foreach」を使って作成する-->
    <?php foreach ($question2 as $value) { ?>
        <input type= "radio" name ="response2" value ="<?php echo $value; ?>"> <?php echo $value; ?>
    <?php }?>
    <h2>③MySQLで情報を取得するためのコマンドは？</h2>
    <!--③ 問題のradioボタンを「foreach」を使って作成する-->
    <?php foreach ($question3 as $value) { ?>
        <input type="radio" name="response3" value="<?php echo $value; ?>"><?php echo $value; ?>
    <?php } ?>
    <!--問題の正解の変数と名前の変数を[answer.php]に送る-->
    <input type ="hidden" name = "answer1" value="<?php echo $answer1; ?>">
    <input type ="hidden" name = "answer2" value="<?php echo $answer2; ?>">
    <input type ="hidden" name = "answer3" value="<?php echo $answer3; ?>">
      
    <input type ="hidden" name= "name" value = "<? $name; ?>" >
    <div>
        <input type="submit" value = "回答する" class="answer"> 
    </div>
        <?php echo $answer; ?>
    </form>
    
</body>
</html>
<?php 
echo a;