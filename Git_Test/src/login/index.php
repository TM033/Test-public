<?php
$display_control_no = 0;
if (isset($_POST['login_button']) == true) {
    $display_control_no = 1;
    // $post_text = $_POST['post_text'];
    // print "<h1>入力した値は" . $post_text . "ですね！</h1><br>";
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--  タブ名称  -->
    <title>KS_Login</title>
    <meta name="description" content="An interactive getting started guide for Brackets.">
    <link rel="stylesheet" href="main.css">
</head>

<body>

    <h2>ログイン画面</h2>

    <form method="post">
        <table>
            <tbody>
                <tr>
                    <td>メールアドレス</td>
                    <td><input type="text" name="login_mail" maxlength="50" size="60"></td>
                </tr>
                <tr>
                    <td>パスワード</td>
                    <td><input type="text" name="login_pass" maxlength="50" size="60"></td>
                </tr>
            </tbody>
        </table>
        <br>
        <button type="submit" name="login_button">Login</button>
    </form>

    <?php
    if ($display_control_no == 1) {
        print "<br>";
        print "<h1>ごめんね！　～ボタン押下時のロジック開発中～　ごめんね！</h1>";
        print "<button type=\"button\" name=\"back\" onclick=\"location.href='https://study7980.cloudfree.jp/login/'\">リセット</button>";
        print "<button type=\"button\" name=\"back\" onclick=\"location.href='https://study7980.cloudfree.jp/home/'\">戻る</button>";
    }
    ?>
</body>

</html>