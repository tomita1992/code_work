<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    $product[0] = "鉛筆";
    $product[1] = "消しゴム";
    $product[2] = "定規";
    $product[3] = "コンパス";
    $product[4] = "ボールペン";
?>

<table border = "2">
    <tr bgcolor = "#AAAAAA">
        <th>商品名</th>
    </tr>
    <?php
    for($i = 0; $i < 5; $i++)
    {
        print("<tr><td>{$product[$i]}</td></tr>");
    }
    ?>
</table>
<?php
    $stock["みかん"] = 80;
    $stock["りんご"] = 60;
    $stock["いちご"] = 33;
    $stock["もも"] = 25;
    $stock["くり"] = 76;
?>
    <table border = "2">
        <tr bgcolor = "#AAAAAA">
            <th>在庫状況</th>
        </tr>
    <?php
        print("<tr><td>みかんは{$stock["みかん"]}個");
        print("<tr><td>りんごは{$stock["りんご"]}個");
        print("<tr><td>いちごは{$stock["いちご"]}個");
        print("<tr><td>ももは{$stock["もも"]}個");
        print("<tr><td>くりは{$stock["くり"]}個");
    ?>
    </table>
</body>
</html>
