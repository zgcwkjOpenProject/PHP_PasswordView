<?php isset($_thisName) ? '' : exit(); ?>
<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width">
    <title>验证页面</title>
    <style>
        body {
            width: 100vw;
            height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            font-family: 'PT Sans', Helvetica, Arial, sans-serif;
            background-color: white;
            color: #A6A6A6;
        }
    
        form>div {
            display: flex;
        }
    
        input {
            width: 100%;
            height: 50px;
            border: none;
            padding-left: 3px;
            font-size: 18px;
            flex: 8;
            border-bottom: 1px solid #000
        }
    
        input:focus {
            outline: none;
        }
    
        button {
            width: 200px;
            height: 50px;
            background: #1E90FF;
            border-radius: 10px;
            border: none;
            font-size: 18px;
            font-weight: 700;
            color: #fff;
            flex: 1;
        }
    
        button:hover {
            background: #79A84B;
            outline: 0;
        }
    
        @media(min-width:1441px) {
            *, input {
                font-size: 32px;
            }
        }
    
        @media(max-width:768px) {
            form>div {
                display: block!important;
                text-align: center;
                line-height: 5;
            }
        }
    </style>
</head>
<body>
    <div style="display:flex;height: 120px;">
        <h2>您的访问需要验证</h2>
    </div>
    <form action='' method='post' style="width: 60%;">
        <div>
            <input type="password" name="key" placeholder="请输入提供的秘钥" />
            <button type="submit">验证</button>
        </div>
    </form>
    <div style="position: absolute;bottom: 5px;">
        <p>Powered by <a href="http://blog.zgcwkj.cn" target="_blank">zgcwkj</a></p>
    </div>
</body>
</html>
