<form action = "result.php" method="post">
 お名前：<input type="text" name = "my_name" /><br>
 ご希望商品：
 <input type = "radio" name="rank" value="A">A賞
 <input type = "radio" name="rank" value="B">B賞
 <input type = "radio" name="rank" value="C">C賞
 <br>
 個数:
 <select name="num">
        <?php for ($i=1; $i<=10; $i++) { ?>
            <option value="<?php echo $i ?>">
                <?php echo $i; ?>
            </option>
        <?php } ?>
    </select>
    <br>
    <input type="submit" value="申込" />
</form>

<br>
<?php
echo "1,モジュールとは、部品みたいなもの"."<br>"; 
echo "2,バージョン管理システムとは、ファイルの変更履歴を管理してくれるシステムのこと"."<br>";
echo "3,サブクエリとは、SQL文を入れ子にしたSQL文における中に買いてある方のこと"."<br>";
?>
