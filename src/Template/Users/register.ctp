<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Blog register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- 引入 Bootstrap -->
    <link href="/webroot/css/bootstrap.css" rel="stylesheet">

    <!-- HTML5 Shim 和 Respond.js 用于让 IE8 支持 HTML5元素和媒体查询 -->
    <!-- 注意： 如果通过 file://  引入 Respond.js 文件，则该文件无法起效果 -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<h1 style="margin-left:30px;">Blog Register</h1>

<form class="form-horizontal" role="form" method="post" action="/users/register">
    <?= $this->Form->create($user) ?>
    <div class="form-group">
        <label for="username" class="col-sm-1 control-label">username</label>
        <div class="col-sm-2">
            <input type="text" class="form-control" id="username" name="username"
                   placeholder="用户名">
        </div>
    </div>
    <div class="form-group">
        <label for="password" class="col-sm-1 control-label">password</label>
        <div class="col-sm-2">
            <input type="password" class="form-control" id="password" name="password"
                   placeholder="密码">
        </div>
    </div>
   <?= $this->Flash->render('unable') ?>

    <div class="form-group">
        <div class="col-sm-offset-1 col-sm-10">
            <button type="submit" class="btn btn-default">注册</button>
        </div>

    </div>
</form>


</body>