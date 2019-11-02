<?php

$_thisName = "index.php"; // 文件本身名称
$_verifyName = "verify.php"; // 验证页面文件名称
$_indexName = "toindex.php"; // 展示页面文件名称
$_keyName = "key.php"; // 密钥文件名称
require_once($_keyName); // 引用密钥文件
// 输出验证页面
if (!isset($_COOKIE["key"])) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") { // 判断是否是验证请求
        if (isset($_REQUEST["key"])) { // 判断是否传递该参数
            if (strlen($_REQUEST["key"]) == 32) {
                $key_verifyValue = $_REQUEST["key"]; // 传递的参数
                if (in_array($key_verifyValue, $key_content)) { // 判断是否存在
                    setcookie("key", ">" . $key_verifyValue, time() + 3600); // 写 Cookie
                    require_once($_indexName);
                    return;
                }
            }
        }
    }
    require_once($_verifyName);
}
// 输出真实页面
if (isset($_COOKIE["key"])) {
    $key_verifyValue = str_replace(">", "",  $_COOKIE["key"]); // 获取 Cookie,并替换字符串
    if (in_array($key_verifyValue, $key_content)) { // 判断是否存在
        require_once($_indexName);
        return;
    }
    require_once($_verifyName);
}
