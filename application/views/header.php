<style type="text/css">
	#head_bar a{
		color: #ffffff !important;
		text-decoration: none;
	}
	#head_bar{
		background: -webkit-linear-gradient(left top, rgba(254,73,66,0.6) , rgba(254,26,103,0.6)); 
        background: -o-linear-gradient(bottom right, rgba(254,73,66,0.6) , rgba(254,26,103,0.6)); 
        background: -moz-linear-gradient(bottom right, rgba(254,73,66,0.6) , rgba(254,26,103,0.6)); 
        background: linear-gradient(to bottom right, rgba(254,73,66,0.6) , rgba(254,26,103,0.6)); 
		padding-top: 5px;
		padding-bottom: 5px;
		padding-left: 3%;
		height: 40px;
		font-size: 14px;
	}
</style>
<body>
<header>
	<div class="container-fluid">
		<div class=" navbar-fixed-top row" id="head_bar">
			<div class="col-sm-4 col-md-2 col-xs-6" href=""  style="text-align: left;">
				<img src="/inankai/assets/img/logo.png" id="logo" height=30px>
				<a>我的南开inankai</a>
			</div>	
			<a class="col-sm-1 col-sm-offset-6 col-md-offset-8 col-md-1 col-xs-3" data-toggle="modal" data-target="#loginModal" style="text-align: right; padding-top:5px" href="" id="login">登录</a>	
			<a class="col-sm-1 col-md-1  col-xs-3" data-toggle="modal" data-target="#registerModal" style="text-align: left;padding-top:5px" href="" id='register'>注册</a>
			
		</div>

	</div>



	<!-- 注册框（Modal） -->
	<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					&times;
				</button>
				<h4 class="modal-title" id="myModalLabel">
					注册
				</h4>
			</div>
			<div class="modal-body ">
				<a class="user_type" title="个人" href="Register_individual" id="individual_reg"><img src="http://img0.imgtn.bdimg.com/it/u=1745062794,1700195832&fm=27&gp=0.jpg" width="40%"></a>
				<a class="user_type" title="社团" href="Register_club" id="club_reg"><img src="http://img0.imgtn.bdimg.com/it/u=1745062794,1700195832&fm=27&gp=0.jpg" width="40%"></a>
			</div>
		
		</div>
	</div>
	</div>
	
	
	<!-- 登录框（Modal） -->
	<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content"  >
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					&times;
				</button>
				<h3 class="modal-title" id="myModalLabel">
					登录
				</h3>
			</div>
			<div class="modal-body" style="width:72.6%; margin:auto">
				<form class="form" role="form" action="">
					<div class="form-group">
						<input class="form-control input-lg" type="text" placeholder="用户名" id="username"></input>
					</div>
					<div class="form-group">
						<input class="form-control input-lg" type="password" placeholder="密码" id="password"></input>
					</div>
					<div class="form-group pull-left">
						<div class="checkbox">
							<label><input type="checkbox" id="remeberme">请记住我</label>
						</div>
					</div>
					<div class="form-group">
						<input type="submit" class="btn btn-primary btn-lg btn-block" data-dismiss="modal" value="登录" id="submit" style="text-align: center !important; background-color: #6d323b; border:0px">
						<div style="padding: 2%;">
							<span class="pull-left"><a href="">找回密码</a></span>
							<a id="regist_jump" class="pull-right" href="">注册</a>
						</div>
					</div>
					
				</form>
			</div>
			
		</div>
	</div>
	</div>
</header>
</body>
<script src="./scripts/login.js" charset="utf-8"></script>

