<!DOCTYPE html>
<html>
   <head>
      <meta charset="UTF-8">
      <title>Blog index</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- 引入 Bootstrap -->
      <link href="/webroot/css/bootstrap.css" rel="stylesheet">
      <link href="/webroot/css/basic.css" rel="stylesheet">
	  

      <!-- HTML5 Shim 和 Respond.js 用于让 IE8 支持 HTML5元素和媒体查询 -->
      <!-- 注意： 如果通过 file://  引入 Respond.js 文件，则该文件无法起效果 -->
      <!--[if lt IE 9]>
         <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
         <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
      <![endif]-->

   </head>
   <body>

      <nav class="navbar navbar-default" role="navigation">
         <div class="navbar-header">
            <a class="navbar-brand" href="#">  JK博客  </a>
         </div>
         <div>
            <ul class="nav navbar-nav">
               <li class="active"><a href="http://www.jkblog.com/">主页</a></li>
               <li><a href="http://www.jkblog.com/articles">博文</a></li>
               <li><a href="#">关于我</a></li>
               <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                     分类列表
                     <b class="caret"></b>
                  </a>
                  <ul class="dropdown-menu">
                     <li><a href="http://www.jkblog.com/articles/csgo">csgo</a></li>
                     <li><a href="http://www.jkblog.com/articles/dota2">dota2</a></li>
                     <li><a href="http://www.jkblog.com/articles/php">php</a></li>
                     <li class="divider"></li>
                     <li><a href="http://www.jkblog.com/articles/talk">说说</a></li>
                     <li class="divider"></li>
                     <li><a href="http://www.jkblog.com/articles/zhuan">转载</a></li>
                  </ul>
               </li>
               <li><a href="http://www.jkblog.com/users/register">注册</a></li>
               <li><a href="http://www.jkblog.com/users/login">登录</a></li>
            </ul>
         </div>
      </nav>
   <div>

      <div class="container">
         <div class="right" >
            <h2>帖子列表</h2>
           
         </div>
         <div class="userinfo">
            <img src="/webroot/img/pic1.jpg" height="200" width="200" class="img-thumbnail">
            <br>
            <t>昵称:JK 等级:1</t>

         </div>

         <div class="search">
           <h2>文章搜索</h2>

         </div>

    


      </div>
   </div>




      <div id="footer">
	     <ul class="panel_head"><span>2016年 JerryKing创建</span></ul>
         常用链接：<button type="button" class="btn btn-link" onclick="window.open('http://www.baidu.com')">百度一下</button>
		 <button type="button" class="btn btn-link" onclick="window.open('http://store.steampowered.com/')">steam</button>
      </div>


      <!-- jQuery (Bootstrap 的 JavaScript 插件需要引入 jQuery) -->
      <script src="/webroot/js/jquery-3.1.1.min.js"></script>
      <!-- 包括所有已编译的插件 -->
      <script src="/webroot/js/bootstrap.min.js"></script>
   </body>
</html>
