<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<style>
			#nav { font-family: Arial; font-size: 14px; width: 100%; float: left; margin: 0 0 1em 0; padding: 0; list-style: none;}
			#nav {list-style: none; border:0;}
			#rightnav { list-style: none; }
			#nav li { float: left; }
			#rightnav li { float: right; }
			#nav li a { margin: 0 3px 0 0; font-size: 15px; display: block; padding: 8px 15px; text-decoration: none; color: #000; background-color: #f2f2f2; border: 1px solid #c1c1c1;}
			#nav li a:hover {background-color: #f2e4d5;}
			#nav a:link, a:visited {border-radius: 12px 12px 12px 12px; }		
		</style>
	</head>
	<body>
		<h1>Staff Portal</h1>
		<div>
			<ul id="nav">
				<li><a href='<?php echo site_url('main/staff_view')?>'>Home</a></li>
				<li><a href='<?php echo site_url('main/sys_cinema')?>'>Cinema</a></li>
				<li><a href='<?php echo site_url('main/sys_screen')?>'>Screen</a></li>
				<li><a href='<?php echo site_url('main/sys_member')?>'>Member</a></li>
				<li><a href='<?php echo site_url('main/sys_film')?>'>Film</a></li>
				<li><a href='<?php echo site_url('main/sys_booking')?>'>Booking</a></li>
				<li><a href='<?php echo site_url('main/sys_performance')?>'>Performance</a></li>
				<ul id="rightnav">
					<li><a href='<?php echo site_url('main/help')?>'>Help</a></li>
				</ul>
			</ul>
		</div>
	</body>
</html>