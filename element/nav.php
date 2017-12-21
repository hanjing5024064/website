<nav class="navbar navbar-expand-lg navbar-dark">
	<a class="navbar-brand" href="#"><?php echo $companyShortName;?></a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item <?php if(isset($nav) && $nav == 'wechat')echo 'active';?>">
				<a class="nav-link" href="?nav=wechat"><i class="fa fa-tasks"></i>微信</a>
			</li>
			<li class="nav-item <?php if(isset($nav) && $nav == 'website')echo 'active';?>">
				<a class="nav-link" href="?nav=website"><i class="fa fa-bullseye"></i>网站</a>
			</li>
<!--			<li class="nav-item --><?php //if(isset($nav) && $nav == 'system')echo 'active';?><!--">-->
<!--				<a class="nav-link" href="system.php"><i class="glyphicon glyphicon-list"></i>业务系统</a>-->
<!--			</li>-->
<!--			<li class="nav-item --><?php //if(isset($nav) && $nav == 'iot')echo 'active';?><!--">-->
<!--				<a class="nav-link" href="iot.php"><i class="glyphicon glyphicon-link"></i>物联网</a>-->
<!--			</li>-->
			<li class="nav-item <?php if(isset($nav) && $nav == 'itservice')echo 'active';?>">
				<a class="nav-link" href="?nav=itservice"><i class="fa fa-table"></i>服务</a>
			</li>
<!--			<li class="nav-item --><?php //if(isset($nav) && $nav == 'aboutus')echo 'active';?><!--">-->
<!--				<a class="nav-link" href="aboutus.php"><i class="fa fa-globe"></i>关于我们</a>-->
<!--			</li>-->
		</ul>
<!--		<form class="form-inline my-2 my-lg-0">-->
<!--			<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">-->
<!--			<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>-->
<!--		</form>-->
	</div>
</nav>