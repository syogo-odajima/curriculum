<?php
$x = 5.3;
echo ceil($x);
?>

<?php
$x = 5.3;
echo floor($x);
?>

<?php
$x = 5.3;
echo round($x);
?>

<?php
$x = 5.3;
echo pi();

function circleArea($r) {
    $circle_area = $r * $r * pi();
    echo $circle_area;
}
circleArea(2);
?>

<?php
echo mt_rand(1,100);
?>

<?php
$str = "hogehoge";
echo strlen($str);
?>

<?php
$str = "odajima";
echo strpos($str,"a");
?>

<?php
$str = "odajima" ;
echo substr($str,-2,2);
?>

<?php
$str = "odajima";
echo str_replace("neya","NEYA",$str);
?>

<?php
$str = "あいうえお";
echo strlen($str);
<br>
?>

<br>
<?php
echo "1.PostgreSQL・Oracle SQLとは"."<br>";
echo "PostgreSQLとは、MYSQLを嫌いな人が馬部システムでよく使うデーターベースです"."<br>";
echo "Oracle SQLとは、大規模システムでよく使われるデーターベースです"."<br>";
echo "2.TortoiseGit・TortoiseSVN"."<br>";
echo "TortoiseGitとは、Gitをより扱いy空くするために開発されたWindowsようのソフトウェアです"."<br>";
echo "2.TortoiseSVNとは、TortoiseSVNはSubversion（SVN）クライアントであり、Windowsシェル拡張として実装されています。 "."<br>";
echo "3. 外部設計・内部設計"."<br>";
echo "3.内部設計とは、実際のプログラムが作れるように、システムの詳細を考える工程"."<br>";
echo "3.内部設計とはシステムの外洋いとか基本的なことを考える工程"."<br>";
