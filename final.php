<!DOCTYPE html>
<html>
<head>
	<?php include'finalhead.php'?>
</head>
<body>

	<!--Home-->

		<?php $page='home'; include'finalnav.php';?>
		

		<!--Image slider-->
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="4000">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1" ></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2" ></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="3" ></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="4" ></li>
			</ol>
			<div class="carousel-inner" role="listbox">
				<div class="carousel-item active" >
					<figure>
						<div class="fixed-wrap">
						<div id="fixed1">
				
						</div>
						</div>
					</figure>
					<div class="carousel-caption text-center">


						<img src="arch/aqb.png" class="img-fluid os-animation" data-os-animation="slideInDown" data-os-animation-delay=".2s" >
						<!--<h1 class="os-animation" data-os-animation="slideInDown" data-os-animation-delay="0s">AQ'b </h1>
						<h3 class="os-animation" data-os-animation="fadeIn" data-os-animation-delay=".8s">Design Studios</h3>--><br>
						<a class="btn btn-outline-light btn-lg os-animation" data-os-animation="slideInUp" data-os-animation-delay=".4s" href="#main">Get Started</a>
					</div>
				</div>
				<div class="carousel-item" >
					<figure>
						<div class="fixed-wrap">
						<div id="fixed2" >
				
						</div>
						</div>
					</figure>
				</div>
				<div class="carousel-item" >
					<figure>
						<div class="fixed-wrap">
						<div id="fixed3">
				
						</div>
						</div>
					</figure>
				</div>
				<div class="carousel-item" >
					<figure>
						<div class="fixed-wrap">
						<div id="fixed4">
				
						</div>
						</div>
					</figure>
				</div>
				<div class="carousel-item" >
					<figure>
						<div class="fixed-wrap">
						<div id="fixed5">
				
						</div>
						</div>
					</figure>
				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
			</a>


		</div>
	</div>

	<div class="container-fluid text-center" id="main" >
		<h1>A'Qb Design Studios</h1>
	</div>


	
	<div class="container-fluid first" >	
		<div class="row no-padding">
			<div class="col-sm-4">
				<div class="row no-padding ">
					<div class=" os-animation" data-os-animation="slideInUp" data-os-animation-delay=".0s" style="margin-right: 6rem">
						<div class="front text-center">
							<a href="finalproject.php">
								<img src="front/w1.jpg">					
							</a>
						</div>
					</div>
				</div>
				<div class="row no-padding ">
					<div class=" os-animation" data-os-animation="slideInUp" data-os-animation-delay=".1s" style="margin-left: 6rem">
						<div class="front text-center">
							<a href="finalplans.php">
								<img src="front/w2.jpg">						
							</a>
						</div>
					</div>
				</div>
				<div class="row no-padding ">
					<div class=" os-animation" data-os-animation="slideInUp" data-os-animation-delay=".2s" style="margin-right: 6rem">
						<div class="front text-center">
							<a href="finalinterior.php">
								<img src="front/w3.jpg">		
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				
			</div>

			<div class="col-sm-4 os-animation" data-os-animation="slideInUp" data-os-animation-delay=".0s" style="padding-top: 2rem;">
				<h1>Some sample text</h1>
				<p class="lead">some text based on the content.some text based on the
				 content.some text based on the content.
				some text based on the content.some text based on the
				 content.some text based on the content.
				some text based on the content.some text based on the
				 content.some text based on the content.
				some text based on the content.some text based on the
				 content.some text based on the content.</p>
				 some text based on the content.some text based on the
				 content.some text based on the content.<br>
				<a class="btn btn-secondary btn-md" href="#">click</a>
			</div>
		</div>
	</div>
	<!--Contact-->
	

	<?php include'finalfooter.php'?>


</body>
</html>
<script type="text/javascript">
	$('.counter-count').each(function()
		{
			$(this).prop('Counter',0).animate(
				{
					Counter: $(this).text()
				},
				{
					duration: 10000,easing:'swing',step:function (now)
					{
						$(this).text(Math.ceil(now))
					}
				});
		});
</script>