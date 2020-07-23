<?php
$testFile = "test.txt";
$contents = "こんにちは！";
if (is_writable($testFile)) {
   
    $fp = fopen($testFile, "w");
  
    fwrite($fp, $contents);
    
    fclose($fp);
    
    echo "finish writing!!";
} else {
   
    echo "not writable!";
    exit;
}
?>

<?php
$test_file = "test2.txt";
if (is_readable($test_file)) {
    
    $fp = fopen($test_file, "r");
    
    while ($line = fgets($fp)) {
      
        echo $line.'<br>';
    }
   
    fclose($fp);
} else {
    
    echo "not readable!";
    exit;
}
echo "<br>";
echo "cakephpの2系、3系の違い"."<br>";
echo "2系最後のメジャーバージョンでもあり、LTS(Long Term Support)が宣言されている 2.10.x がリリースされています"."<br>";
echo "3系最後のメジャーバージョンになるのは 3.6.x であり、このバージョンが LTS される"."<br>";
echo "LAMPとは、Linux ＋ Apache ＋ MySQL（MariaDB） ＋ PHP（Perl、Python）で構成される環境のこと"."<br>";
echo "AWSとは、「アマゾンウェブサービス（Amazon Web Services）」のこと。"."<br>";

