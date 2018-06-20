<!DOCTYPE html>
<style type="text/css">
	*{
		text-align: center;
		align: center;
		font-family: microsoft yahei;
	}
	input{
		text-align: left !important;
	}

	
	.img_sidebar{
		margin-bottom: 6%;
	}

	#box_bar{
		margin-top: 2%;
		margin-bottom: 2%;
	}
	.moments{
		padding-top: 3%; 
		padding-left: 2% !important;
		padding-right:2% !important;
		background-color: #fff;
		border-color: rgb(245,226,232)!important;
		border:2px solid;
	}
	.media-body *{
		text-align: left;
		align: left;
	}
	.time_before{
		color: #CCCCCC;
	}
	.moments_tag{
		color: #AAAAAA;
	}
	.moments_title{
		font-size: 1.3em;
		text-align: left;
	}
	.contents{
		text-align: left;
		padding-top: 2%;
	}
	.moments_content{
		text-align: left;
	}
	.view_more a{
		color: rgb(163,59,56) !important;
	}
	.location{
		font-size: 0.9em;
	}
	.follow{
		background-color: #AAAAAA;
	}
	.unfollow{
		background-color: #777777;
	}
	.user_type{
		margin:2%;
	}


	#myTab > li{
		border-bottom:2px!important;
	}

	.nav-pills{
		border:0px;
	}
	.nav-pills > li{
		border-bottom: 2px !important;
		border-color: rgb(248,88,135) !important;		
		margin-bottom: 0px!important;
	}
	.nav-pills > li > a{
		color:#000;
		border-left, border-right, border-top: 0px !important;
		border-bottom: 2px !important;
		border-color: #000;
		font-size: 1.3em;


	}
	.nav-pills > li.active > a,
	.nav-pills > li.active > a:focus,
	.nav-pills > li > a:hover{  	
    	color:#000!important;
    	font-weight:bold !important;
    	background-color: #fff !important;
    	border-bottom: 2px !important;
	}
	.btn{
		border-radius: 0.8em !important;
	}
	.func_title{
		color:rgb(255,67,73);
		font-size: 1.5em;
	}
	.detail{
		margin-top: 0px !important;
		padding-bottom: 1%;
	}
	.icon3{
		margin-bottom: 10%;
	}
	.sideimg{width:45%;}
	

    @media (min-width: 768px) {
		.sideimg{width:55% !important;}
		.modal-dialog{width: 70% !important;}
    }
    @media (min-width: 992px) {
		.sideimg{width:20% !important;}
		.modal-dialog{width: 50% !important;}
    }
    @media (min-width: 1500px){
    	.modal-dialog{width: 30% !important;}
    }
	.icon1{
		color:rgb(253,57,57);
	}
	.navbar-fixed-top > a:focus {
    	outline: 0px;
	}
} 
</style>


<html lang="zh-Hans">
<head>
	<title>动态圈</title>
</head>
<body>


	<!--div class="container">
		<div class=" row" id="box_bar">
			<div class="col-md-2 col-md-offset-3 col-xs-4">
				<img src="./img/动态圈2.png" width="30%">
			</div>
			<div class="col-md-2  col-xs-4">
				<img src="./img/爱南开2.png" width="30%">
			</div>
			<div class="col-md-2  col-xs-4">
				<img src="./img/个人页2.png" width="33%">
			</div>
		</div>
		<div class="row">
			<span class="col-md-2 col-md-offset-3 col-xs-4 func_title">动态圈
			</span>
			<span class="col-md-2 col-xs-4 func_title">爱南开
			</span>
			<span class="col-md-2 col-xs-4 func_title">个人页
			</span>
		</div>
		<div class="row">
			<div class="col-md-10 col-md-offset-1 col-xs-12">

 				<ul id="myTab" class="nav nav-tabs">
    				<li class="active"><a href="" data-toggle="tab">热门动态</a></li>
   					<li><a href="" data-toggle="tab">最新动态</a></li>
    				<li><a href="" data-toggle="tab">我的订阅</a></li>
				</ul>
			</div>
		</div>
	</div-->
	<div class="container-fluid">
		<div class="row">
			<img src="/inankai/assets/img/主页设计_02.jpg" width="100%">
		</div>
	</div>

<div class="container-fluid">
	<hr width="80%" size="2px" style="margin-top:5%">
	<div class="row">
		<ul id="myTab" class="nav nav-pills">
    		<li class="col-md-2 col-md-offset-3 col-xs-3 active"><a href="#hot" data-toggle="tab">热门动态</a></li>
   			<li class="col-md-2 col-xs-6" ><a href="#new" data-toggle="tab">最新动态</a></li>
    		<li class="col-md-2 col-xs-3" ><a href="#subscribe" data-toggle="tab">我的订阅</a></li>
		</ul>
	</div>
</div>



		<!--热门-->
<div class="container-fluid" style="padding-top: 2%; background-color: #efefef;">
	<div class="tab-content">
		<div class="tab-pane fade in active col-md-8 col-md-offset-2 col-xs-10 col-sm-8 col-sm-offset-1" id="hot">
		<ul class="media-list ">
			<li class="media moments ">
				<a class="media-left">
				<img class="media-object" src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1510508361521&di=4d5d34039bc73e253504481146e6640d&imgtype=0&src=http%3A%2F%2Fimgsrc.baidu.com%2Fimgad%2Fpic%2Fitem%2Fb2de9c82d158ccbf6c691e0612d8bc3eb1354130.jpg"
                 alt="头像" width="60px">
				</a>
				<div class="media-body">
					<h4 class="media-heading">我的南开inankai</h4>
					<div>
						<span class="time_before">x分钟前</span> 
						<span class="moments_tag">活动通知</span>
						<span class="moments_tag">文娱活动</span>
						<button class="follow btn btn-default-xs" style="float: right;" >关注</button>
					</div>
				
				<div class="contents">			
					<div class="moments_title">inankai产品发布会，掌握我的南开</div>
					<div class="moments_content">这里是活动介绍，这里是活动介绍这里是活动介绍，这里是活动介绍，这里是活动介绍，这里是活动介绍这里是活动介绍，这里是活动介绍，这里是活动介绍</div>
					<span class="view_more"><a href="">展开全文</a></span>
				</div> 	
				<div class="media detail">
					<a class="media-left media-middle" href="">
						<img class="media-object" src="./img/一键添加按钮.png" width="25px">
					</a>
					<div class="media-body container">
						<div class="row"><span class="col-md-1 glyphicon glyphicon-time icon1"></span><span class="time">2018年4月25日 14:00-18:00</span></div>
						<div class="row"><span class="col-md-1 glyphicon glyphicon-map-marker icon1"></span><span class="location">八里台校区东方艺术大量</span></div>
					</div>			
				</div>
				</div>
			</li>

			<li class="media moments ">
				<a class="media-left">
				<img class="media-object" src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1510508361521&di=4d5d34039bc73e253504481146e6640d&imgtype=0&src=http%3A%2F%2Fimgsrc.baidu.com%2Fimgad%2Fpic%2Fitem%2Fb2de9c82d158ccbf6c691e0612d8bc3eb1354130.jpg"
                 alt="头像" width="60px">
				</a>
				<div class="media-body">
					<h4 class="media-heading">我的南开inankai</h4>
					<div>
						<span class="time_before">x分钟前</span> 
						<span class="moments_tag">活动通知</span>
						<span class="moments_tag">文娱活动</span>
						<button class="follow btn btn-default-xs" style="float: right;" >关注</button>
					</div>
				
				<div class="contents">			
					<div class="moments_title">inankai产品发布会，掌握我的南开</div>
					<div class="moments_content">这里是活动介绍，这里是活动介绍这里是活动介绍，这里是活动介绍，这里是活动介绍，这里是活动介绍这里是活动介绍，这里是活动介绍，这里是活动介绍</div>
					<span class="view_more"><a href="">展开全文</a></span>
				</div> 	
				<div class="media detail">
					<a class="media-left media-middle" href="">
						<img class="media-object" src="./img/一键添加按钮.png" width="25px">
					</a>
					<div class="media-body container">
						<div class="row"><span class="col-md-1 glyphicon glyphicon-time icon1"></span><span class="time">2018年4月25日 14:00-18:00</span></div>
						<div class="row"><span class="col-md-1 glyphicon glyphicon-map-marker icon1"></span><span class="location">八里台校区东方艺术大量</span></div>
					</div>			
				</div>
				</div>
			</li>	


			<li class="media moments ">
				<a class="media-left">
				<img class="media-object" src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1510508361521&di=4d5d34039bc73e253504481146e6640d&imgtype=0&src=http%3A%2F%2Fimgsrc.baidu.com%2Fimgad%2Fpic%2Fitem%2Fb2de9c82d158ccbf6c691e0612d8bc3eb1354130.jpg"
                 alt="头像" width="60px">
				</a>
				<div class="media-body">
					<h4 class="media-heading">我的南开inankai</h4>
					<div>
						<span class="time_before">x分钟前</span> 
						<span class="moments_tag">活动通知</span>
						<span class="moments_tag">文娱活动</span>
						<button class="follow btn btn-default-xs" style="float: right;" >关注</button>
					</div>
				
				<div class="contents">			
					<div class="moments_title">inankai产品发布会，掌握我的南开</div>
					<div class="moments_content">这里是活动介绍，这里是活动介绍这里是活动介绍，这里是活动介绍，这里是活动介绍，这里是活动介绍这里是活动介绍，这里是活动介绍，这里是活动介绍</div>
					<span class="view_more"><a href="">展开全文</a></span>
				</div> 	
				<div class="media detail">
					<a class="media-left media-middle" href="">
						<img class="media-object" src="./img/一键添加按钮.png" width="25px">
					</a>
					<div class="media-body container">
						<div class="row"><span class="col-md-1 glyphicon glyphicon-time icon1"></span><span class="time">2018年4月25日 14:00-18:00</span></div>
						<div class="row"><span class="col-md-1 glyphicon glyphicon-map-marker icon1"></span><span class="location">八里台校区东方艺术大量</span></div>
					</div>			
				</div>
				</div>
			</li>
		</ul>
	</div>

<div class="tab-pane fade in col-md-8 col-md-offset-2 col-xs-10 col-sm-8 col-sm-offset-1" id="new">
		<ul class="media-list ">
			<li class="media moments ">
				<a class="media-left">
				<img class="media-object" src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1510508361521&di=4d5d34039bc73e253504481146e6640d&imgtype=0&src=http%3A%2F%2Fimgsrc.baidu.com%2Fimgad%2Fpic%2Fitem%2Fb2de9c82d158ccbf6c691e0612d8bc3eb1354130.jpg"
                 alt="头像" width="60px">
				</a>
				<div class="media-body">
					<h4 class="media-heading">我的南ankai</h4>
					<div>
						<span class="time_before">x分钟前</span> 
						<span class="moments_tag">活动通知</span>
						<span class="moments_tag">文娱活动</span>
						<button class="follow btn btn-default-xs" style="float: right;" >关注</button>
					</div>
				
				<div class="contents">			
					<div class="moments_title">inankai产品发布会，掌握我的南开</div>
					<div class="moments_content">这里是活动介绍，这里是活动介绍这里是活动介绍，这里是活动介绍，这里是活动介绍，这里是活动介绍这里是活动介绍，这里是活动介绍，这里是活动介绍</div>
					<span class="view_more"><a href="">展开全文</a></span>
				</div> 	
				<div class="media detail">
					<a class="media-left media-middle" href="">
						<img class="media-object" src="./img/一键添加按钮.png" width="25px">
					</a>
					<div class="media-body container">
						<div class="row"><span class="col-md-1"><img src="./img/时间图标.png" width="40%"></span><span class="time">2018年4月25日 14:00-18:00</span></div>
						<div class="row"><span class="col-md-1"><img src="./img/地点图标.png" width="40%"></span><span class="location">八里台校区东方艺术大量</span></div>
					</div>			
				</div>
				</div>
			</li>	

			<li class="media moments ">
				<a class="media-left">
				<img class="media-object" src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1510508361521&di=4d5d34039bc73e253504481146e6640d&imgtype=0&src=http%3A%2F%2Fimgsrc.baidu.com%2Fimgad%2Fpic%2Fitem%2Fb2de9c82d158ccbf6c691e0612d8bc3eb1354130.jpg"
                 alt="头像" width="60px">
				</a>
				<div class="media-body">
					<h4 class="media-heading">我的南开inankai</h4>
					<div>
						<span class="time_before">x分钟前</span> 
						<span class="moments_tag">活动通知</span>
						<span class="moments_tag">文娱活动</span>
						<button class="follow btn btn-default-xs" style="float: right;" >关注</button>
					</div>
				
				<div class="contents">			
					<div class="moments_title">inankai产品发布会，掌握我的南开</div>
					<div class="moments_content">这里是活动介绍，这里是活动介绍这里是活动介绍，这里是活动介绍，这里是活动介绍，这里是活动介绍这里是活动介绍，这里是活动介绍，这里是活动介绍</div>
					<span class="view_more"><a href="">展开全文</a></span>
				</div> 	
				<div class="media detail">
					<a class="media-left media-middle" href="">
						<img class="media-object" src="./img/一键添加按钮.png" width="25px">
					</a>
					<div class="media-body container">
						<div class="row"><span class="col-md-1"><img src="./img/时间图标.png" width="40%"></span><span class="time">2018年4月25日 14:00-18:00</span></div>
						<div class="row"><span class="col-md-1"><img src="./img/地点图标.png" width="40%"></span><span class="location">八里台校区东方艺术大量</span></div>
					</div>			
				</div>
				</div>
			</li>	


			<li class="media moments ">
				<a class="media-left">
				<img class="media-object" src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1510508361521&di=4d5d34039bc73e253504481146e6640d&imgtype=0&src=http%3A%2F%2Fimgsrc.baidu.com%2Fimgad%2Fpic%2Fitem%2Fb2de9c82d158ccbf6c691e0612d8bc3eb1354130.jpg"
                 alt="头像" width="60px">
				</a>
				<div class="media-body">
					<h4 class="media-heading">我的南开inankai</h4>
					<div>
						<span class="time_before">x分钟前</span> 
						<span class="moments_tag">活动通知</span>
						<span class="moments_tag">文娱活动</span>
						<button class="follow btn btn-default-xs" style="float: right;" >关注</button>
					</div>
				
				<div class="contents">			
					<div class="moments_title">inankai产品发布会，掌握我的南开</div>
					<div class="moments_content">这里是活动介绍，这里是活动介绍这里是活动介绍，这里是活动介绍，这里是活动介绍，这里是活动介绍这里是活动介绍，这里是活动介绍，这里是活动介绍</div>
					<span class="view_more"><a href="">展开全文</a></span>
				</div> 	
				<div class="media detail">
					<a class="media-left media-middle" href="">
						<img class="media-object" src="./img/一键添加按钮.png" width="25px">
					</a>
					<div class="media-body container">
						<div class="row"><span class="col-md-1"><img src="./img/时间图标.png" width="40%"></span><span class="time">2018年4月25日 14:00-18:00</span></div>
						<div class="row"><span class="col-md-1"><img src="./img/地点图标.png" width="40%"></span><span class="location">八里台校区东方艺术大量</span></div>
					</div>			
				</div>
				</div>
			</li>	
		</ul>
	</div>


<div class="tab-pane fade in col-md-8 col-md-offset-2 col-xs-10 col-sm-8 col-sm-offset-1" id="subscribe">
		<ul class="media-list ">
			<li class="media moments ">
				<a class="media-left">
				<img class="media-object" src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1510508361521&di=4d5d34039bc73e253504481146e6640d&imgtype=0&src=http%3A%2F%2Fimgsrc.baidu.com%2Fimgad%2Fpic%2Fitem%2Fb2de9c82d158ccbf6c691e0612d8bc3eb1354130.jpg"
                 alt="头像" width="60px">
				</a>
				<div class="media-body">
					<h4 class="media-heading">我的南开inankai</h4>
					<div>
						<span class="time_before">x分钟前</span> 
						<span class="moments_tag">活动通知</span>
						<span class="moments_tag">文娱活动</span>
						<button class="follow btn btn-default-xs" style="float: right;" >关注</button>
					</div>
				
				<div class="contents">			
					<div class="moments_title">inankai产品发布会，掌握我的南开</div>
					<div class="moments_content">这里是活动介绍，这里是活动介绍这里是活动介绍，这里是活动介绍，这里是活动介绍，这里是活动介绍这里是活动介绍，这里是活动介绍，这里是活动介绍</div>
					<span class="view_more"><a href="">展开全文</a></span>
				</div> 	
				<div class="media detail">
					<a class="media-left media-middle" href="">
						<img class="media-object" src="./img/一键添加按钮.png" width="25px">
					</a>
					<div class="media-body container">
						<div class="row"><span class="col-md-1"><img src="./img/时间图标.png" width="40%"></span><span class="time">2018年4月25日 14:00-18:00</span></div>
						<div class="row"><span class="col-md-1"><img src="./img/地点图标.png" width="40%"></span><span class="location">八里台校区东方艺术大量</span></div>
					</div>			
				</div>
				</div>
			</li>	

			<li class="media moments ">
				<a class="media-left">
				<img class="media-object" src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1510508361521&di=4d5d34039bc73e253504481146e6640d&imgtype=0&src=http%3A%2F%2Fimgsrc.baidu.com%2Fimgad%2Fpic%2Fitem%2Fb2de9c82d158ccbf6c691e0612d8bc3eb1354130.jpg"
                 alt="头像" width="60px">
				</a>
				<div class="media-body">
					<h4 class="media-heading">我的南开inankai</h4>
					<div>
						<span class="time_before">x分钟前</span> 
						<span class="moments_tag">活动通知</span>
						<span class="moments_tag">文娱活动</span>
						<button class="follow btn btn-default-xs" style="float: right;" >关注</button>
					</div>
				
				<div class="contents">			
					<div class="moments_title">inankai产品发布会，掌握我的南开</div>
					<div class="moments_content">这里是活动介绍，这里是活动介绍这里是活动介绍，这里是活动介绍，这里是活动介绍，这里是活动介绍这里是活动介绍，这里是活动介绍，这里是活动介绍</div>
					<span class="view_more"><a href="">展开全文</a></span>
				</div> 	
				<div class="media detail">
					<a class="media-left media-middle" href="">
						<img class="media-object" src="./img/一键添加按钮.png" width="25px">
					</a>
					<div class="media-body container">
						<div class="row"><span class="col-md-1"><img src="./img/时间图标.png" width="40%"></span><span class="time">2018年4月25日 14:00-18:00</span></div>
						<div class="row"><span class="col-md-1"><img src="./img/地点图标.png" width="40%"></span><span class="location">八里台校区东方艺术大量</span></div>
					</div>			
				</div>
				</div>
			</li>	


			<li class="media moments ">
				<a class="media-left">
				<img class="media-object" src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1510508361521&di=4d5d34039bc73e253504481146e6640d&imgtype=0&src=http%3A%2F%2Fimgsrc.baidu.com%2Fimgad%2Fpic%2Fitem%2Fb2de9c82d158ccbf6c691e0612d8bc3eb1354130.jpg"
                 alt="头像" width="60px">
				</a>
				<div class="media-body">
					<h4 class="media-heading">我的南开inankai</h4>
					<div>
						<span class="time_before">x分钟前</span> 
						<span class="moments_tag">活动通知</span>
						<span class="moments_tag">文娱活动</span>
						<button class="follow btn btn-default-xs" style="float: right;" >关注</button>
					</div>
				
				<div class="contents">			
					<div class="moments_title">inankai产品发布会，掌握我的南开</div>
					<div class="moments_content">这里是活动介绍，这里是活动介绍这里是活动介绍，这里是活动介绍，这里是活动介绍，这里是活动介绍这里是活动介绍，这里是活动介绍，这里是活动介绍</div>
					<span class="view_more"><a href="">展开全文</a></span>
				</div> 	
				<div class="media detail">
					<a class="media-left media-middle" href="">
						<img class="media-object" src="./img/一键添加按钮.png" width="25px">
					</a>
					<div class="media-body container">
						<div class="row"><span class="col-md-1"><img src="./img/时间图标.png" width="40%"></span><span class="time">2018年4月25日 14:00-18:00</span></div>
						<div class="row"><span class="col-md-1"><img src="./img/地点图标.png" width="40%"></span><span class="location">八里台校区东方艺术大量</span></div>
					</div>			
				</div>
				</div>
			</li>	
		</ul>
	</div>


	</div>


	<div class="col-md-2 col-xs-2 col-sm-1">
		<div class="row icon3">
			<a href="Dynamics"><img src="/inankai/assets/img/动态圈2.png" title="动态圈" class="sideimg"></a>
		</div>
		<div class="row icon3">
			<a href="Inankai"><img src="/inankai/assets/img/爱南开2.png" title="爱南开" class="sideimg"></a>
		</div>
		<div class="row icon3">
			<a href="Personal"><img src="/inankai/assets/img/个人页2.png" title="个人页" class="sideimg"></a>
		</div>
	</div>

</div>

<ul class="pager">
  <li><a href="#">上一页</a></li>
  <li><a href="#">下一页</a></li>
</ul>




	

</body>
<script type="text/javascript">
	$(".follow").click(function(){
		//$("button.follow").css("background-color","#AAAAAA");
		$(".follow").toggleClass("unfollow");
	});
	$("#regist_jump").click(function(){
		$("#loginModal").modal("hide");
		$("registerModal").modal("show");
	})
	$("nav>ul>li").each(function(i,element){
        element.onclick=function(){
            $(this).addClass("active_bar").siblings().removeClass('active');
        }
    });
</script>

</html>
	

