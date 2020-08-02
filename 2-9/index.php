<?php

for ($num = 1 ; $num <= 100 ; $num++) { 
    if ($num%3 == 0 && $num%5 == 0) {
        echo "FizzBuzz!"."<br>";
    } elseif ($num%3 == 0) {
        echo "Fizz!"."<br>";
    } elseif ($num%5 == 0) {
        echo "Buzz!"."<br>";
    } else {
        echo "$num"."<br>";
    }
}
   echo "<br>";

echo "IT用語"."<br>";
echo "パフォーマンス"."<br>";
echo "性能のこと。コンピュータの機器や、ソフトウェア、システムなどの処理性能や実行速度、通信回線ん、ネットワークなどの要領などを指す"."<br>";
echo "スロークエリ"."<br>";
echo "パフォーマンスの悪いSQLのこと"."<br>";
echo "クエリログ"."<br>";
echo "クライアントからのMySQLサーバーへの接続、接続解除の情報およびクライアントから実行されたすべてのSQLクエリを出力してくれるログ";
?>

