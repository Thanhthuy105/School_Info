<?= include_once("../template/header.php") ?>
<div class="banner">
	<div class="container">
		<div class="banner-text agileits-w3layouts">
			<div id="top" class="callbacks_container">
				<ul class="rslides" id="slider3">
					<li>
						<div class="banner-textagileinfo">
							<h6>WELCOME TO</h6>
							<h3>My School</h3>
							<div class="more">
								<a href="#" data-toggle="modal" data-target="#myModal"> Read More</a>
							</div>
						</div>
					</li>
					<li>
							<div class="banner-textagileinfo"> 
								<h6>WELCOME TO</h6>	 
								<h3>dolor sit amet </h3>	
								<div class="more">
									<a href="#" data-toggle="modal" data-target="#myModal"> Read More</a>
								</div>	
							</div>	
						</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- modal-sign -->

	<div class="modal bnr-modal fade" id="myModal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div> 
				<div class="modal-body modal-spa">
					<img class="img-responsive" src="../image/library.jpg" alt="library">
					<p style="color: black">Finding a school as per everyone’s choice is now a days is very essential and confusing as there are many schools in and around the city. Visiting each and every school physically and getting information is really very difficult. Hence concept of developing “SchoolsInfo” seems very much needed. SchoolsInfo is a website which provides the information about the various schools available in the city. People who are interested in seeking admission for their kids  can view this website where they can get to know where all the schools are situated and what all other facilities are available in that particular school. 
						<br>Currently people generally find out the details about the schools from relatives/friends or visiting schools personally. But this is becoming difficult as many new schools are being established everywhere.  Thus this can be overcome by the proposed system called “SchoolsInfo” where viewing all schools and related information in particular area from anywhere. </p>
				</div> 
			</div>
		</div>
	</div>
<!-- //modal-sign -->

<?= include_once("../template/footer.php") ?>
<script>
		// You can also use "$(window).load(function() {"
		$(function () {
		  // Slideshow 3
		  $("#slider3").responsiveSlides({
			auto:false,
			pager: true,
			nav: false,
			speed: 500,
			namespace: "callbacks",
			before: function () {
			  $('.events').append("<li>before event fired.</li>");
			},
			after: function () {
			  $('.events').append("<li>after event fired.</li>");
			}
		  });
	
		});
	</script>