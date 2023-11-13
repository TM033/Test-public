<?php

// Pythonで出力した部品を使った部分
if (isset($_POST['post_submit_button']) == true) {
    $post_text = $_POST['post_text'];
    print "<h1>入力した値は" . $post_text . "ですね！</h1><br>";
}


$input = "input_msg";

// PHPからPythonを呼び出す準備
$echo_language = "python ";
$echo_filename = "index.py ";
$command = $echo_language . $echo_filename;

$full_cmmand = $command . " " . escapeshellarg($input);

// PHPからPythonを呼び出す
exec($full_cmmand, $output);
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--  タブ名称  -->
    <title>KS_Home</title>
    <meta name="description" content="An interactive getting started guide for Brackets.">
    <link rel="stylesheet" href="main.css">
</head>

<body>

    <?php

    print "<a href='http://study7980.cloudfree.jp/'>戻る</a>";

    print "<h1>===================================</h1>";
    print "<h2>メモ</h2>";

    // 呼び出したPythonから受け取った値を出力する処理
    for ($i = 0; $i < count($output); $i++) {
        print $output[$i] . "\n";
    }

    print "<h1>===================================</h1>";

    ?>

    <p>You can reach Kizuna at:</p>

    <ul>
        <li><a href="https://study7980.cloudfree.jp/home/">Website</a></li>
        <li><a href="mailto:kizuna@gmail.com">Email</a></li>
        <li><a href="tel:+123456789">Phone</a></li>
    </ul>

    <h1>サンプル</h1>
    <h2>サンプル</h2>
    <h3>サンプル</h3>
    <h4>サンプル</h4>
    <p>タブ種類</p>
    <ul>
        順序なしリスト要素：&lt;ul&gt;&lt;/ul&gt;<br>
        順序付きリスト要素：&lt;ol type=?&gt;&lt;/ol&gt;<br>
        (任意指定type=a:英小文字,A:英大文字,i:ローマ数字小文字,I:ローマ数字大文字,1:アラビア数字※規定値)<br>
        <ol>
            <li>サンプル</li>
            <li>サンプル</li>
            <li>サンプル</li>
        </ol>
    </ul>

    <p>フォームサンプル</p>
    <ul>
        <form>
            テキストボックス<input type="text"><br>
            テキストボックス（パスワード形式）<input type="password"><br>
        </form>
    </ul>


    <style>
        th {
            width: 200px;
        }

        .cell-long {
            width: 400px;
        }

        .divTable {
            display: table;
            width: 100%;
        }

        .divTableRow {
            display: table-row;
        }

        .divTableHeading {
            background-color: #EEE;
            display: table-header-group;
        }

        .divTableCell,
        .divTableHead {
            border: 1px solid #999999;
            display: table-cell;
            padding: 3px 10px;
        }

        .divTableHeading {
            background-color: #EEE;
            display: table-header-group;
            font-weight: bold;
        }

        .divTableFoot {
            background-color: #EEE;
            display: table-footer-group;
            font-weight: bold;
        }

        .divTableBody {
            display: table-row-group;
        }
    </style>

    <table border="1">
        <thead>
            <tr>
                <th>見出し1</th>
                <th>見出し2</th>
                <th class="cell-long">見出し3</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>データ1</td>
                <td>データ2</td>
                <td>データ3</td>
            </tr>
            <tr>
                <td>データ4</td>
                <td>データ5</td>
                <td>データ6</td>
            </tr>
        </tbody>
    </table>

    <table>
        <tr>
            <th>社名</th>
            <td>ABC株式会社</td>
        </tr>
        <tr>
            <th>本社</th>
            <td>〒123-4567 大阪市淀川区南の北1丁目2番1号</td>
        </tr>
    </table>

    <div class="divTable">
        <div class="divTableBody">
            <div class="divTableRow">
                <div class="divTableCell">a</div>
                <div class="divTableCell">b</div>
                <div class="divTableCell">c</div>
                <div class="divTableCell">d</div>
            </div>
            <div class="divTableRow">
                <div class="divTableCell">e</div>
                <div class="divTableCell">f</div>
                <div class="divTableCell">g</div>
                <div class="divTableCell">h</div>
            </div>
            <div class="divTableRow">
                <div class="divTableCell">i</div>
                <div class="divTableCell">j</div>
                <div class="divTableCell">k</div>
                <div class="divTableCell">l</div>
            </div>
        </div>
    </div>
</body>

</html>