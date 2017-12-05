<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="index.php"><?php echo $companyShortName;?></a>
	</div>

	<div class="collapse navbar-collapse navbar-ex1-collapse">
		<ul id="active" class="nav navbar-nav side-nav">
			<li <?php if(isset($nav) && $nav == "wechat")echo "class=\"selected\"";?>><a href="wechat.php"><i class="fa fa-tasks"></i> 微信</a></li>
			<li <?php if(isset($nav) && $nav == "website")echo "class=\"selected\"";?>><a href="website.php"><i class="fa fa-bullseye"></i> 网站</a></li>
			<li <?php if(isset($nav) && $nav == "itservice")echo "class=\"selected\"";?>><a href="itservice.php"><i class="fa fa-table"></i> IT服务</a></li>
			<!--<li <?php if(isset($nav) && $nav == "aboutus")echo "class=\"selected\"";?>><a href="aboutus.php"><i class="fa fa-globe"></i> 关于我们</a></li>-->
<!--			<li><a href="building.php"><i class="fa fa-tasks"></i> 应用</a></li>-->
<!--			<li><a href="building.php"><i class="fa fa-globe"></i> Demo版</a></li>-->
<!--			<li><a href="building.php"><i class="fa fa-list-ol"></i> IT服务</a></li>-->
			<!--
			<li class="selected"><a href="register.html"><i class="fa fa-font"></i> Register</a></li>
			<li><a href="timeline.html"><i class="fa fa-font"></i> Timeline</a></li>
			<li><a href="forms.html"><i class="fa fa-list-ol"></i> Forms</a></li>
			<li><a href="typography.html"><i class="fa fa-font"></i> Typography</a></li>
			<li><a href="bootstrap-elements.html"><i class="fa fa-list-ul"></i> Bootstrap Elements</a></li>
			<li><a href="bootstrap-grid.html"><i class="fa fa-table"></i> Bootstrap Grid</a></li>
			-->
		</ul>
		<!--
		<ul class="nav navbar-nav navbar-right navbar-user">
			<li class="dropdown messages-dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> Messages <span class="badge">2</span> <b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li class="dropdown-header">2 New Messages</li>
					<li class="message-preview">
						<a href="#">
							<span class="avatar"><i class="fa fa-bell"></i></span>
							<span class="message">Security alert</span>
						</a>
					</li>
					<li class="divider"></li>
					<li class="message-preview">
						<a href="#">
							<span class="avatar"><i class="fa fa-bell"></i></span>
							<span class="message">Security alert</span>
						</a>
					</li>
					<li class="divider"></li>
					<li><a href="#">Go to Inbox <span class="badge">2</span></a></li>
				</ul>
			</li>
			<li class="dropdown user-dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Steve Miller<b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
					<li><a href="#"><i class="fa fa-gear"></i> Settings</a></li>
					<li class="divider"></li>
					<li><a href="#"><i class="fa fa-power-off"></i> Log Out</a></li>

				</ul>
			</li>
			<li class="divider-vertical"></li>
			<li>
				<form class="navbar-search">
					<input type="text" placeholder="Search" class="form-control">
				</form>
			</li>
		</ul>
		-->
	</div>
</nav>