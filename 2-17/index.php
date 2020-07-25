<?php
$count = 1; //何回
$total = 1; //合計

while($total <= 40){ // ①合計1が40以下の時
    $dice = mt_rand(1, 6); //②乱数 ランダムに値を一つ出力します
    $total += $dice; //③ $diceを$totalに足す
    echo $count . "回目=" . $dice . "<br>";//④
    $count++;
    }
printf("合計%dでゴールしました",$count) //⑤printfは完成系の文字列を用意すること
?>
<br>
<?php
$time = date("H",time());
echo "今" . $time . "時台です"."<br>";
if(5 <= $time && $time <= 9){
    echo "おはようございます";
}elseif(10 <= $time && $time <= 18) {
    echo "こんにちは";
}else{
    echo "こんばんは";
}
