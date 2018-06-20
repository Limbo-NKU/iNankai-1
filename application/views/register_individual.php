
<head>
	<title>个人用户注册</title>
	<link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" charset="utf-8">
</head>
<body>
	<div class="container" style="margin-top: 30px">
		<div class="row">
			<div class="col-md-6 col-md-offset-3 col-xs-12">
				<form class="form-horizontal" role="form" >
					<fieldset><legend>个人用户注册</legend></fieldset>

						<div class="form-group has-feedback">				
               				<label for="username">用户名</label>
                			<div class="input-group">
                    			<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                    			<input id="username" class="form-control" placeholder="请输入用户名" maxlength="20" type="text">
              				</div>

                			<span style="color:red;display: none;" class="tips"></span>
                			<span style="display: none;" class=" glyphicon glyphicon-remove form-control-feedback"></span>
                			<span style="display: none;" class="glyphicon glyphicon-ok form-control-feedback"></span>
            			</div>

            			<div class="form-group has-feedback">
                			<label for="password">密码</label>
                			<div class="input-group">
                    			<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                   				<input id="password" class="form-control" placeholder="请输入密码" maxlength="20" type="password">
                			</div>

                			<span style="color:red;display: none;" class="tips"></span>
                			<span style="display: none;" class="glyphicon glyphicon-remove form-control-feedback"></span>
                			<span style="display: none;" class="glyphicon glyphicon-ok form-control-feedback"></span>
            			</div>

            			<div class="form-group has-feedback">
               				<label for="passwordConfirm">确认密码</label>
                			<div class="input-group">
                    			<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                    		<input id="passwordConfirm" class="form-control" placeholder="请再次输入密码" maxlength="20" type="password">
                			</div>
               				<span style="color:red;display: none;" class="tips"></span>
                			<span style="display: none;" class="glyphicon glyphicon-remove form-control-feedback"></span>
                			<span style="display: none;" class="glyphicon glyphicon-ok form-control-feedback"></span>
            			</div>	

            			<div class="form-group has-feedback">
                			<label for="email">邮箱</label>
                			<div class="input-group">
                    			<span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                    			<input id="email" class="form-control" placeholder="请输入邮箱" type="email">
                			</div>
                			<span style="color:red;display: none;" class="tips"></span>
                			<span style="display: none;" class="glyphicon glyphicon-remove form-control-feedback"></span>
                			<span style="display: none;" class="glyphicon glyphicon-ok form-control-feedback"></span>
           				</div>
						
						<div class="form-group">
                			<input class="form-control btn btn-primary" id="submit" value="注册" type="submit">
            			</div>

				</form>
			</div>
		</div>
	</div>

</body>

<script src="./scripts/register_individual.js" charset="utf-8"></script>