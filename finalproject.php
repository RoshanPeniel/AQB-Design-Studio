<!DOCTYPE html>
<html>
<head>
	<?php include'finalhead.php'?>
</head>
<body>

	<?php $page='projects'; include'finalnav.php';?>


	<!--Projects-->
	<div id="projects" class="offset" style="margin-top: 5rem;">
		<div class="col-12 text-center">
				<h3 class="heading os-animation" data-os-animation="fadeIn" data-os-animation-delay=".1s">Projects</h3>
				<div class="heading-underline os-animation" data-os-animation="fadeInLeft" data-os-animation-delay=".2s"></div>
		</div>


		<div class="row no-padding os-animation" data-os-animation="fadeIn" data-os-animation-delay=".3s" style="margin: 5rem;padding-left: 2rem">
				<div class="col-sm-4 ">
					<div class="counter" style="padding-bottom: 2rem">
						<h1 class="counter-count">120</h1>
						<h3 class="project-p">Projects</h3>	
					</div>
				</div>
				<div class="col-sm-4 ">
					<div class="counter" style="padding-bottom: 2rem">
						<h1 class="counter-count">85</h1>
						<h3 class="project-p">Happy customers</h3>					
					</div>
				</div>
				<div class="col-sm-4 " >
					<div class="counter">
						<h1 class="counter-count">10</h1>
						<h3 class="project-p">Years of experience</h3>	
					</div>
				</div>
			</div>
		</div>
		
		<div class="container-fluid">	
		 	<div class="row no-padding ">
				<div class="col-sm-3 os-animation" data-os-animation="slideInUp" data-os-animation-delay=".0s">
					<div class="project">
						<a href="arch/z1.jpg">
							<img src="arch/z1.jpg">
						</a>
					</div>
				</div>
				<div class="col-sm-3 os-animation" data-os-animation="slideInUp" data-os-animation-delay=".1s">
					<div class="project">
						<a href="arch/z2.jpg">
							<img src="arch/z2.jpg">
						</a>
					</div>
				</div>
				<div class="col-sm-3 os-animation" data-os-animation="slideInUp" data-os-animation-delay=".2s">
					<div class="project">
						<a href="arch/z3.jpg">
							<img src="arch/z3.jpg">
						</a>
					</div>
				</div>
				<div class="col-sm-3 os-animation" data-os-animation="slideInUp" data-os-animation-delay=".3s">
					<div class="project">
						<a href="arch/z4.jpg">
							<img src="arch/z4.jpg">
						</a>
					</div>
				</div>
			</div>

			<div class="row no-padding ">
				<div class="col-sm-3 os-animation" data-os-animation="slideInUp" data-os-animation-delay=".0s">
					<div class="project">
						<a href="arch/z5.jpg">
							<img src="arch/z5.jpg">
						</a>
					</div>
				</div>
				<div class="col-sm-3 os-animation" data-os-animation="slideInUp" data-os-animation-delay=".1s">
					<div class="project">
						<a href="iarch/z6.jpg">
							<img src="arch/z6.jpg">
						</a>
					</div>
				</div>
				<div class="col-sm-3 os-animation" data-os-animation="slideInUp" data-os-animation-delay=".2s">
					<div class="project">
						<a href="arch/z7.jpg">
							<img src="arch/z7.jpg">
						</a>
					</div>
				</div>
				<div class="col-sm-3 os-animation" data-os-animation="slideInUp" data-os-animation-delay=".3s">
					<div class="project">
						<a href="arch/z8.jpg">
							<img src="arch/z8.jpg">
						</a>
					</div>
				</div>
			</div>

			<div class="row no-padding ">
				<div class="col-sm-3 os-animation" data-os-animation="slideInUp" data-os-animation-delay=".0s">
					<div class="project">
						<a href="arch/z9.jpg">
							<img src="arch/z9.jpg">
						</a>
					</div>
				</div>
				<div class="col-sm-3 os-animation" data-os-animation="slideInUp" data-os-animation-delay=".1s">
					<div class="project">
						<a href="arch/z10.jpg">
							<img src="arch/z10.jpg">
						</a>
					</div>
				</div>
				<div class="col-sm-3 os-animation" data-os-animation="slideInUp" data-os-animation-delay=".2s">
					<div class="project">
						<a href="arch/z11.jpg">
							<img src="arch/z11.jpg">
						</a>
					</div>
				</div>
				<div class="col-sm-3 os-animation" data-os-animation="slideInUp" data-os-animation-delay=".3s">
					<div class="project">
						<a href="arch/z12.jpg">
							<img src="arch/z12.jpg">
						</a>
					</div>
				</div>
			</div>
	    </div>
	





		





		<div class="col-12 narrow text-center">
			<h1>Some sample text</h1>
			<p class="lead">some text based on the content.some text based on the
			 content.some text based on the content.</p>
			<a class="btn btn-secondary btn-md" href="#">click</a>
		</div>

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
					duration: 4000,easing:'swing',step:function (now)
					{
						$(this).text(Math.ceil(now))
					}
				});
		});
</script>