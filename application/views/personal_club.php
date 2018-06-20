<!DOCTYP html>
<style type="text/css">
	*{
		text-align: center;
		align: center;
		font-family: microsoft yahei;
	}

    body{
        min-height:100%;
        position:relative;
        font-family: Helvetica,"PingFang SC";
        background: url(./img/自定义底图.png)top center no-repeat;
        background-size:cover;
    }
	#head_bar{
		background: -webkit-linear-gradient(left top, rgba(254,73,66,0.6) , rgba(254,26,103,0.6)); 
        background: -o-linear-gradient(bottom right, rgba(254,73,66,0.6) , rgba(254,26,103,0.6)); 
        background: -moz-linear-gradient(bottom right, rgba(254,73,66,0.6) , rgba(254,26,103,0.6)); 
        background: linear-gradient(to bottom right, rgba(254,73,66,0.6) , rgba(254,26,103,0.6)); 
		padding-bottom: 0.6%;
		padding-top: 0.6%;
		padding-left: 3%;
	}
	#head_bar a{
		color: #ffffff !important;
		font-size: 1em !important;
		text-decoration: none;
	}

	.portrait{
		margin-top:8%;
		border-radius: 50%;
		width:150px;
		border-style: solid;
		border-width:4px ;
		border-color: #F5F5F5 ;
	}
	#name{
		font-size: 1.5em;
		text-align: center;
	}
	.position{
		position:absolute;
		top:50%;
		left:50%;
	}
	
	#intro{
		margin-top: 2%;
	}
	
	.navbar{
		border: 0px !important;
	}
	.active-bar{
		background:none;
		background-image: url(./img/粉色横杠.png) !important;
		color:#000000;
		font-weight: bold!important;
	}
	.inter{
		margin-right:5%; 
	}

	.moments{
		padding-top: 3%; 
		padding-left: 2% !important;
		padding-right:2% !important;

		background-color: #fff;
		border-color:rgb(245,226,232) !important;
		border:2px solid;
	}

	.media-body *{
		text-align: left;
		align: left;
		padding-bottom: 0%;
	}
	.time_before{
		color: #CCCCCC;
		font-size: 0.9em;
	}
	.moments_tag{
		color: #AAAAAA;
		font-size:0.9em;
	}
	.moments_title{
		font-size: 1.2em;
		text-align: left;
	}
	.contents{
		text-align: left;
		padding-top: 2%;
	}
	.moments_content{
		text-align: left;
	}
	.hfunction{
		padding-top:5%;
		padding-bottom: 5%;
	}	
	.btn{
		border-radius: 0.8em !important;
	}
	.plus{
		font-size: 1.5em;
	}

	.icon3{
		margin-bottom: 10%;
	}

	#tab{
		
	}
	.on{
		background-image: url(./img/粉色横杠.png) !important;
		color:#000000;
		font-weight: bold!important;
	}
	.showblock{
		display:block;
	}
	.hideblock{
		display: none; 	
	}
	.contents{
		margin-bottom: 20px;
		
	}
	.page{
		text-align: center;
		text-color: #FF3030;

	}
	.at{
		color:#00CDCD;
	}
	.at2{
		color:#696969;
		font-size: 10px;
	}
	.theme{

	}
	.reply{
		border-color: #F8F8FF;
		border:1px solid ;
	}
	#foot{
		background-color: rgb(59,48,52);
		color: #ffffff;
		position:absolute;
		bottom:0;
		width:100%;
	}
	#foot a{
		color:#ffffff !important;
	}
    .container{
       
    }
    #logo{

    }
    .sideimg{width:45%;}

    @media (min-width: 768px) {
		.sideimg{width:55% !important;}
    }
    @media (min-width: 992px) {
		.sideimg{width:20% !important;}
    }
	.icon1{
		color:rgb(253,57,57);
	}
	.navbar-fixed-top > a:focus {
    	outline: 0px;
	}
	.detail{
		margin-top: 0px !important;
		padding-bottom: 1%;
	}
</style>
<html lang="zh-Hans">
<head>
	<title>个人主页</title>
	<link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link href="./scripts/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
	<script src="./scripts/bootstrap3-editable/js/bootstrap-editable.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" charset="utf-8">
</head>
<body>
	<div class="container-fluid ">
		<div class="navbar-fixed-top row" id="head_bar">
			
			<div class="col-sm-4 col-md-2 col-xs-6" href=""  style="text-align: left;">
				<img src="./img/logo.png" id="logo">
				<a>我的南开inankai</a></div>
				
			<div class="col-sm-2 col-sm-offset-5 col-md-offset-8 col-md-1 col-xs-3" style="padding-right: 5px;">
				<img src="./img/个人页2.png"  id="person">
				<span id="nickname" style="color:white">Hi, xxx  |</span>
			</div>			
			<a class="col-sm-1 col-md-1  col-xs-3" data-toggle="modal" data-target="#registerModal" style="text-align: left;padding-left: 0px;"   id="login" href="">退出</a>	
		</div>
	</div>

	<div class="container-fluid" style=" margin-bottom: 2%">
		<div align="center">
			<img class="portrait" src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1510508361521&di=4d5d34039bc73e253504481146e6640d&imgtype=0&src=http%3A%2F%2Fimgsrc.baidu.com%2Fimgad%2Fpic%2Fitem%2Fb2de9c82d158ccbf6c691e0612d8bc3eb1354130.jpg"  id="portrait">
			<p id="name">社团名称</p>
		</div>
		<!--div class="row" style="margin-top:2px;">
			<a href="" id="edit_info"> 编辑资料</a>
		</div-->
	
		
		<div id="intro">
			<div class="col-md-4 col-md-offset-4 col-xs-6 col-xs-offset-2" style="text-align: left!important">
				<span>社团简介：</span>
				<a id="club_info" href="">xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</a>
			</div>
			<div class="col-md-4 col-md-offset-4 col-xs-6 col-xs-offset-2" style="text-align: left!important">
				<span>社团邮箱：</span>
				<a id="club_email" href="">xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</a>
			</div>
		</div>
	</div>
<!--div id="tab">	
		<div class="row">
			<div class="col-md-10 col-md-offset-3 col-xs-12">
				<ul id="myTab" class="nav nav-tabs">
    				<li class="active inter on"><a href="#collection" data-toggle="tab">我的收藏</a></li>
   					<li  class="inter off" ><a href="#subscribe" data-toggle="tab">我的关注</a></li>
    				<li  class="inter off" ><a href="#message" data-toggle="tab">我的消息</a></li>
    				<li  class="inter off" ><a href="#schedule" data-toggle="tab">我的日程</a></li>
				</ul>
			</div>
		</div>
</div-->	

<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2 col-xs-12 col-sm-10 col-sm-offset-1">
			<ul id="myTab" class="nav nav-tabs">
    			<li class="active inter on"><a href="#collection" data-toggle="tab">我的发布</a></li>
    			<li class="inter off" ><a href="#message" data-toggle="tab">我的消息</a></li>
			</ul>
		</div>
	</div>
</div>


<div id="myTabContent" class="tab-content">
	<div class="tab-pane fade in active" id="collection">
	<div class="container-fluid hfunction" style="padding-top: 1%;">
		<ul class="media-list col-md-8 col-md-offset-2 col-xs-10 col-sm-10 col-sm-offset-1" style="padding:0px;"><!--我的收藏-->
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
		<div class="col-md-2 col-xs-2 col-sm-1">
		<div class="row icon3">
			<a href=""><img src="./img/动态圈圆.png" title="动态圈" class="sideimg"></a>
		</div>
		<div class="row icon3">
			<a href=""><img src="./img/nk.png" title="爱南开" class="sideimg"></a>
		</div>
		<div class="row icon3">
			<a href=""><img src="./img/person.png" title="个人页" class="sideimg"></a>
		</div>
	</div>		
	</div>

	</div>


	<div class="tab-pane fade" id="message">

	<div class="container-fluid" style="padding-top: 1%"><!--我的消息-->
	<div class="col-md-2 col-xs-3">
		<div class="row icon3 " >
			<img src="./img/信封圆浅粉.png" width=20%;>
		</div>
		<div class="row icon3" >
			<img src="./img/@圆深粉.png" width=20%;>
		</div>
	</div>
	<div>
		<ul class="media-list col-md-8  col-xs-10 col-sm-10 " style="padding:0px;">
		<!--<div id="commu" class="moments media">-->
		<li class="moments media">
			<a class="media-left" href="">
			<img class="media-object"  src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1510508361521&di=4d5d34039bc73e253504481146e6640d&imgtype=0&src=http%3A%2F%2Fimgsrc.baidu.com%2Fimgad%2Fpic%2Fitem%2Fb2de9c82d158ccbf6c691e0612d8bc3eb1354130.jpg" alt="头像" width="40px;"></a>
			<div class="media-body">
				<div class="media-heading">			
					<span id="name1" class=" pull-left" >大野智 : </span>
					<span class="at pull-left">@</span>
					<span id="name2" class="at pull-left" style="margin-right: 2px;">二宫和也</span>
					<span class="pull-left">nino今天来聚餐吗？我请。</span>
				</div>	
				<br/>
				<div>
					<span class="at2 pull-left">@提到的主题 ：</span>
					<u class="at2">"inankai产品发布会。   ‘掌’握我南开"</u>
				</div>
				<div class="pull-right">
					<img src="./img/图片标.png" width="20px;" style="margin-right: 6px;">
					<img src="./img/笑脸标.png" width="18px;" style="margin-right: 2px;">
					<img src="./img/@标.png" width="17px;" style="margin-right: 2px;">
				</div>
				<br/>
				<form role="form">
  					<div class="form-group">
    					<textarea class="form-control" rows="3"></textarea>
  					</div>
  					<div class="form-group pull-right">
                		<input class="form-control btn-default-xs btn-primary" value="发表" type="submit">
            		</div>

				</form> 
				

				<br/>
				<br/>
				<div>
					<a href=""><u class="pull-right at2" style="margin-top: 5px;margin-bottom: 5px;">收起回复</u></a>
				</div>
			</div>
		</li>
		<li class="moments media">
			<a class="media-left" href="">
			<img class="media-object"  src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1510508361521&di=4d5d34039bc73e253504481146e6640d&imgtype=0&src=http%3A%2F%2Fimgsrc.baidu.com%2Fimgad%2Fpic%2Fitem%2Fb2de9c82d158ccbf6c691e0612d8bc3eb1354130.jpg" alt="头像" width="40px;"></a>
			<div class="media-body">
				<div class="media-heading">			
					<span id="name1" class=" pull-left" >大野智 : </span>
					<span class="at pull-left">@</span>
					<span id="name2" class="at pull-left" style="margin-right: 2px;">二宫和也</span>
					<span class="pull-left">nino今天来聚餐吗？我请。</span>
				</div>	
				<br/>
				<div>
					<span class="at2 pull-left">@提到的主题 ：</span>
					<u class="at2">"inankai产品发布会。   ‘掌’握我南开"</u>
				</div>
				<div>
					<a href=""><u class="pull-right at2" style="margin-top: 5px;margin-bottom: 5px;">展开回复</u></a>
				</div>
			</div>
		</li>
		<li class="moments media">
			<a class="media-left" href="">
			<img class="media-object"  src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1510508361521&di=4d5d34039bc73e253504481146e6640d&imgtype=0&src=http%3A%2F%2Fimgsrc.baidu.com%2Fimgad%2Fpic%2Fitem%2Fb2de9c82d158ccbf6c691e0612d8bc3eb1354130.jpg" alt="头像" width="40px;"></a>
			<div class="media-body">
				<div class="media-heading">			
					<span id="name1" class=" pull-left" >大野智 : </span>
					<span class="at pull-left">@</span>
					<span id="name2" class="at pull-left" style="margin-right: 2px;">二宫和也</span>
					<span class="pull-left">nino今天来聚餐吗？我请。</span>
				</div>	
				<br/>
				<div>
					<span class="at2 pull-left">@提到的主题 ：</span>
					<u class="at2">"inankai产品发布会。   ‘掌’握我南开"</u>
				</div>											
				<div>
					<a href=""><u class="pull-right at2" style="margin-top: 5px;margin-bottom: 5px;">展开回复</u></a>
				</div>
			</div>
		</li>
		<div class="page" style="margin-top: 10px;font-color:#FF6347;">
				<a href="" style="padding-right: 5px;"><u style="color:#ff6699;">首页</u></a>
				<a href="" style="padding-right: 5px;color:#FF6347;">1</a>
				<a href="" style="padding-right: 5px;color:#FF6347;">2</a>
				<a href="" style="padding-right: 5px;color:#FF6347;">...</a>
				<a href="" style="padding-right: 5px;"><u style="color:#ff6699;">下一页</u></a>
				<a href="" style="padding-right: 5px;"><u style="color:#ff6699;">尾页</u></a>
			</div>	
		</ul>

	<div class="col-md-2 col-xs-2 col-sm-1">
		<div class="row icon3">
			<a href=""><img src="./img/动态圈圆.png" title="动态圈" class="sideimg"></a>
		</div>
		<div class="row icon3">
			<a href=""><img src="./img/nk.png" title="爱南开" class="sideimg"></a>
		</div>
		<div class="row icon3">
			<a href=""><img src="./img/person.png" title="个人页" class="sideimg"></a>
		</div>
	</div>
	</div>
	</div><!--我的消息-->
	</div>

</div>








<!--
<footer class="container-fluid" id="foot">
		<div class="row" style="padding:2%;">
			<div class="col-md-2 col-md-offset-7 col-xs-6" id="foot_words">
				<p><a href="">关于我们</a></p>
				<p><a href="">联系我们</a></p>
				<p><a href="">开发团队</a></p>
				<p><a href="">其他作品</a></p>
			</div>
			<div  class="col-md-2 col-xs-6">
				<img id="qr_code" src="./img/qr_code.jpg" > 
			<div>
		</div>
	</footer>
</body>
-->
<script type="text/javascript">
	$(document).ready(function(){  
    var img = $("#qr_code");  
	var h = $("#foot_words").outerHeight(); 	
	var w = 70;
    img.css({height:h},{width:w});  
    $("#logo").css("width",$("#login").outerHeight());
    $("#person").css("width",$("#login").outerHeight());
    $("#mar").css("height",$("#login").outerHeight());
    $("#gender").css("height",$("#name").outerHeight());
    $("#null").css("width",$("#word").outerHeight());
    });

   var regEmail = /^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+((\.[a-zA-Z0-9_-]{2,3}){1,2})$/;

    $('#club_info').editable({
    	type: 'textarea',
    	//pk: 1,
    	url: '/post',
    	title: '请输入社团简介',
    	mode: 'inline',
    	rows: 3,
    	validate: function (value) { //字段验证
            if (!($.trim(value).length>=20))
                return '简介不能少于20字！';
        }
	});
	$('#club_email').editable({
    	type: 'text',
    	//pk: 1,
    	url: '/post',
    	title: '请输入社团邮箱',
    	mode: 'inline',
    	validate: function (value){
    		if(!regEmail.test(value))
    			return '请输入正确的邮箱！';
    	}
	});

</script>
<!--
<script type="text/javascript">
    // JS实现选项卡切换
    window.onload = function(){
    var myTab = document.getElementById("tab");    //整个div
    var myUl = myTab.getElementsByTagName("ul")[0];//一个节点
    var myLi = myUl.getElementsByTagName("li");    //数组
    var myDiv = myTab.getElementsByTagName("div"); //数组
 
    for(var i = 0; i<myLi.length;i++){
        myLi[i].index = i;
        myLi[i].onclick = function(){
            for(var j = 0; j < myLi.length; j++){
                myLi[j].className="off";
                myDiv[j].className = "hideblock";
            }
            this.className = "active";
            myDiv[this.index].className = "showblock";
        }
      }
    }
    </script>-->