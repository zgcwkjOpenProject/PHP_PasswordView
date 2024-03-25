<?php

// 文件本身名称
$_thisName = "index.php";
// 验证页面文件名称
$_verifyName = "verify.php";
// 展示页面文件名称
$_indexName = "toindex.php";
// 密钥文件名称
$_keyName = "key.php";
// 引用密钥文件
require_once($_keyName);
// 输出验证页面
if (!isset($_COOKIE["key"])) {
    // 判断是否传递该参数
    if (isset($_REQUEST["key"])) {
        if (strlen($_REQUEST["key"]) == 32) {
            // 传递的参数
            $key_verifyValue = $_REQUEST["key"];
            // 判断是否存在
            if (in_array($key_verifyValue, $key_content)) {
                // 写 Cookie
                setcookie("key", ">" . $key_verifyValue, time() + 3600);
                require_once($_indexName);
                return;
            }
        }
    }
    require_once($_verifyName);
}
// 输出真实页面
if (isset($_COOKIE["key"])) {
    // 获取 Cookie,并替换字符串
    $key_verifyValue = str_replace(">", "",  $_COOKIE["key"]);
    // 判断是否存在
    if (in_array($key_verifyValue, $key_content)) {
        require_once($_indexName);
        return;
    }
    require_once($_verifyName);
}
