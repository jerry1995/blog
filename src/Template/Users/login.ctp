<!DOCTYPE html>
<html>
<head>
    <script src="/webroot/js/jquery-3.1.1.min.js"></script>
    <meta charset="UTF-8">
    <title>Blog login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- 引入 Bootstrap -->
    <link href="/webroot/css/bootstrap.css" rel="stylesheet">

    <!-- HTML5 Shim 和 Respond.js 用于让 IE8 支持 HTML5元素和媒体查询 -->
    <!-- 注意： 如果通过 file://  引入 Respond.js 文件，则该文件无法起效果 -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <style>
        body{
            font-family: 'microsoft yahei',Arial,sans-serif;
            background-color: #222;
        }

        .redborder {
            border:2px solid #f96145;
            border-radius:2px;
        }

        .row {
            padding: 20px 0px;
        }

        .bigicon {
            font-size: 97px;
            color: #f08000;
        }

        .loginpanel {
            text-align: center;
            width: 300px;
            border-radius: 0.5rem;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            margin: 10px auto;
            background-color: #555;
            padding: 20px;
        }

        input {
            width: 100%;
            margin-bottom: 17px;
            padding: 15px;
            background-color: #ECF4F4;
            border-radius: 2px;
            border: none;
        }

        h2 {
            margin-bottom: 20px;
            font-weight: normal;
            color: #EFEFEF;
        }

        .btn {
            border-radius: 2px;
            padding: 10px;
        }

        .btn span {
            font-size: 27px;
            color: white;
        }

        .buttonwrapper{
            position:relative;
            overflow:hidden;
            height:50px;
        }

        .lockbutton {
            font-size: 27px;
            color: #f96145;
            padding: 10px;
            width:100%;
            position:absolute;
            top:0;
            left:0;
        }

        .loginbutton {
            background-color: #f08000;
            width: 100%;
            -webkit-border-top-right-radius: 0;
            -webkit-border-bottom-right-radius: 0;
            -moz-border-radius-topright: 0;
            -moz-border-radius-bottomright: 0;
            border-top-right-radius: 0;
            border-bottom-right-radius: 0;
            left: -260px;
            position:absolute;
            top:0;
        }
    </style>

</head>

<?php echo $this->element('topbar') ?>
<div class="container-fluid">
    <div class="row">
        <div class="loginpanel">
            <i id="loading" class="hidden fa fa-spinner fa-spin bigicon"></i>
            <h2>
               </span> 登录 </span>
            </h2>
            <form method="post" id="login" name="loginform" action="/users/login">
            <div>
                <input name="username" id="username" type="text" placeholder="登录账号" onblur="check_values();">
                <input name="password" id="password" type="password" placeholder="输入密码" onkeypress="check_values();">

                <div class="buttonwrapper">
                    <button id="loginbtn" class="btn btn-warning loginbutton" >
                        <span class="fa fa-check"></span>
                    </button>
                    <span id="lockbtn" class="fa fa-lock lockbutton redborder"></span>
                </div>
                <?= $this->Flash->render('incorrect') ?>
                <button type="button" style="margin-left:30px;" class="btn btn-default" onclick="window.location.href='/users/register'">注册</button>

                <div class="form-group">
                    <div class="col-sm-offset-1 col-sm-10">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> 请记住我
                            </label>
                        </div>
                    </div>
                </div>
            </div>
                </form>
            <div id="reminder">
            </div>
        </div>
    </div>
</div>




<script type="text/javascript">


    function check_values() {
        var name=document.getElementById("username").value;
        $.ajax({
            url: '/users/checkUsername',
            data: {
                username: name
            },
            dataType: 'json',
            success: function (result){
                alert(result);
            },
            error: function (xhr, textStatus, errorThrown) {
                //document.getElementById("reminder").innerHTML="some error occurred!"+xhr.status+xhr.readyState;
            }
         });
        if ($("#username").val().length != 0 && $("#password").val().length != 0) {
            $("#loginbtn").animate({ left: '0' , duration: 'slow'});;
            $("#lockbtn").animate({ left: '260px' , duration: 'slow'});;
        }
    }


    $("#loginbtn").click(function(){
        $('#loading').removeClass('hidden');
        document.getElementById("reminder").innerHTML="Logining...";


        //这里书写登录相关后台处理，例如: Ajax请求用户名和密码验证
    });

</script>


</body>
</html>