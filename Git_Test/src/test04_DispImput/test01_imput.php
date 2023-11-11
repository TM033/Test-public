<?php
$pageToDisplay = 0; //表示すべきページ
$kisetsu = -1;  //どこも指していない状態
$nickname = "";
$seibetsu = -1; //どこも指していない状態
$kisetsu = -1;  //どこも指していない状態
$checkmessage = "";

if (isset($_POST['okuru']) == true) {
    $pageToDisplay = 1;
    if ($_POST['nickname'] != "") {
        $nickname = htmlspecialchars($_POST['nickname'], ENT_QUOTES);
    } else {
        $pageToDisplay = 0;
        $checkmessage .= "ニックネームが記入されていません。<br>";
    }
    if ($checkmessage != "") {
        $checkmessage = "<font color=\"red\"><b>" . $checkmessage;
        $checkmessage .= "正しく記入してもう一度送信してください。</b></font><br>& lt;br>";
    }
}

$imput = "imput_msg";

$echo_language = "python ";
$echo_filename = "test01_imput.py ";
$command = $echo_language . $echo_filename;

$full_cmmand = $command . " " . escapeshellarg($imput);

exec($full_cmmand, $output);
for ($i = 0; $i < count($output); $i++) {
    print $output[$i] . "<br>\n";
}
?>

<html>

<body>

    <?php
    print "あなたのお名前は？<br>\n";
    ?>
    <form action="testname2.php" method="post">
        <input type="text" size="30" name="username"><br>
        <input type="submit" name="soshin" value="送信">
    </form>

</body>

</html>