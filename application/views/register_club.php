<head>
	<title>社团用户注册</title>
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
					<fieldset><legend>社团用户注册</legend></fieldset>

						<!--div class="form-group has-feedback">				
               				<label for="username">用户名</label>
                			<div class="input-group">
                    			<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                    			<input id="username" class="form-control" placeholder="请输入用户名" maxlength="20" type="text">
              				</div>

                			<span style="color:red;display: none;" class="tips"></span>
                			<span style="display: none;" class=" glyphicon glyphicon-remove form-control-feedback"></span>
                			<span style="display: none;" class="glyphicon glyphicon-ok form-control-feedback"></span>
            			</div-->


                        <div class="form-group has-feedback">
                            <label for="clubName">社团名称</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-flag"></span></span>
                                <input id="clubName" class="form-control" placeholder="请输入社团名称" type="text" maxlength="20">
                            </div>
                            <span style="color:red;display: none;" class="tips"></span>
                            <span style="display: none;" class="glyphicon glyphicon-remove form-control-feedback"></span>
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
                			<label for="email">社团邮箱</label>
                			<div class="input-group">
                    			<span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                    			<input id="email" class="form-control" placeholder="请输入邮箱" type="email">
                			</div>
                			<span style="color:red;display: none;" class="tips"></span>
                			<span style="display: none;" class="glyphicon glyphicon-remove form-control-feedback"></span>
                			<span style="display: none;" class="glyphicon glyphicon-ok form-control-feedback"></span>
           				</div>

						<div class="form-group has-feedback">
            				<label for="inviteCode">邀请码</label>
            				<div class="input-group">
            					<span class="input-group-addon"><span class="glyphicon glyphicon-bullhorn"></span></span>
            					<input id="inviteCode" class="form-control" placeholder="请输入邀请码" type="text">
            				</div>
            				<span style="color:red;display: none;" class="tips"></span>
                			<span style="display: none;" class="glyphicon glyphicon-remove form-control-feedback"></span>
                			<span style="display: none;" class="glyphicon glyphicon-ok form-control-feedback"></span>
            			</div>

                        <div class="form-group has-feedback">
                            <label for="contact">联系电话</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-earphone"></span></span>
                                <input class="form-control" id="contact" placeholder="请输入社团联系方式" type="text"></input>
                            </div>
                            <span style="color:red;display: none;" class="tips"></span>
                            <span style="display: none;" class="glyphicon glyphicon-remove form-control-feedback"></span>
                            <span style="display: none;" class="glyphicon glyphicon-ok form-control-feedback"></span>
                        </div>


            			<div class="form-group">
            				<label for="clubIntro">社团简介</label>
            				<div class="input-group">
            					<span class="input-group-addon"><span class="glyphicon glyphicon-pencil"></span></span>
            					<textarea class="form-control" id="clubIntro" rows="3" placeholder="请输入20-100字的社团简介" minlength="20" maxlength="100"></textarea>
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

<script src="./scripts/register_club.js" charset="utf-8"></script>

