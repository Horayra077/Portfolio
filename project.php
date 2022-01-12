	<?php include "includes/db.php"; ?>
	
	<section class="ftco-hireme">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-md-8 col-lg-8 d-flex align-items-center">
					<div class="w-100 py-4">
						<h2>Have a project on your mind.</h2>
						<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly.</p>
						<p class="mb-0"><a href="#contact-section" class="btn btn-white py-3 px-4">Contact me</a></p>
					</div>
				</div>
				<div class="col-md-4 col-lg-4 d-flex align-items-end">
					<img src="images/author00.jpg" class="img-thumbnail" alt="" width="67.5%">
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section ftco-project" id="projects-section">
		<div class="container-fluid px-md-4">
			<div class="row justify-content-center pb-5">
				<div class="col-md-12 heading-section text-center ftco-animate">
					<span class="subheading">Accomplishments</span>
					<h2 class="mb-4">My Projects</h2>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
				</div>
			</div>
			<div class="row">
			
			
				<?php

                $query = "SELECT * FROM project";
                $select_all_project_query = mysqli_query($connection, $query);

                while($row = mysqli_fetch_assoc($select_all_project_query))
                {
                    $project_id = $row['project_id'];
                    $project_name = $row['project_name'];
                    $project_detail = $row['project_detail'];
                    $project_image = $row['project_image'];

                ?>
			
			
			
				<div class="col-md-3">
					<div class="project img shadow ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/<?php echo $project_image; ?>);">
						<div class="overlay"></div>
						<div class="text text-center p-4">
							<h3><a href="#projects-section"><?php echo $project_name; ?></a></h3>
							<span><?php echo $project_detail; ?></span>
						</div>
					</div>
				</div>
				
				
				<?php } ?>
				
				
				
			</div>
		</div>
	</section>
	


