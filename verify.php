<?php isset($_thisName) ? $_SERVER['PHP_SELF'] != '/' . $_thisName ? exit() : '' : exit(); ?>
<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width">
    <title>Verify</title>
</head>
<body>
    <form action="/" method="post">
        <input type="text" name="key">
        <input type="submit" value="提交">
    </form>
</body>
</html>