# PHP_PasswordView

PHP 密码查看页面（实现需要秘钥才能访问页面）

# 修改密码集

key.php 是存放秘钥的文件，需要手动修改秘钥

# 新页面说明

> php 文件顶部添加以下代码

```
<?php isset($_thisName) ? '' : exit(); ?>
```

# 关联

Blog：
1. [实现访问页面需要秘钥2](http://zgcwkj.cn/archives/222.html)
2. [实现访问页面需要秘钥1](http://zgcwkj.cn/archives/125.html)
