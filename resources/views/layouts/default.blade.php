<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title', 'Sample') - Laravel 入门教程</title>

	<!-- 加载app.css文件 -->
	<link rel="stylesheet" type="text/css" href="/css/app.css">
</head>
<body>

	<!-- 页眉部分 -->
	<header class="navbar navbar-fixed-top navbar-inverse">
		<div class="container">
			<div class="col-md-offset-1 col-md-10">
				<a href="/" id="logo">Sample App</a>
				<nav>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="{{route('help')}}">帮助</a></li>
						<li><a href="#">登录</a></li>
					</ul>
				</nav>
				
			</div>
		</div>
	</header>

	<!-- 容器／内容部分 -->
	<div class="container">
		@yield('content')
	</div>

	<!-- footer页脚部分 -->
<!-- 	<div class="col-md-12">
  		<footer class="footer">
    		<small class="slogon">
      			<img class="brand-icon" src="https://dn-phphub.qbox.me/uploads/images/201612/12/1/iq7WQc2iuW.png?imageView2/1/w/34/h/34">
      			<a href="http://estgroupe.com/"> 优帆远扬 | 创造不息，交付不止</a>
    		</small>
    		<nav>
      			<ul>
        			<li><a href="{{ route('about') }}">关于</a></li>
      			</ul>
    		</nav>
  		</footer>
	</div> -->
	
</body>
</html>