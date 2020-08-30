<!--Navbar-->
<!DOCTYPE html>
<html>
<head>
	<?php include'finalhead.php'?>
</head>
<body>
		
		<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top ">
			<a class="navbar-brand" href="final.php" ><img src="arch/aqbs.png"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link <?php if($page=='home'){echo 'active';}?>" href="final.php">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link <?php if($page=='projects'){echo 'active';}?>" href="finalproject.php">Projects</a>
					</li>
					<li class="nav-item">
						<a class="nav-link <?php if($page=='plans'){echo 'active';}?>" href="finalplans.php">plans</a>
					</li>
					<li class="nav-item">
						<a class="nav-link <?php if($page=='interior'){echo 'active';}?>" href="finalinterior.php">interiors</a>
					</li>
					<li class="nav-item">
						<a class="nav-link <?php if($page=='about'){echo 'active';}?>" href="finalabout.php">About us</a>
					</li>
				</ul>
			</div>
		</nav>
		</body>
</html>
