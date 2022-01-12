	<?php include "includes/db.php"; ?>
	
	
	<section class="ftco-section bg-light" id="skills-section">
		<div class="container">
			<div class="row justify-content-center pb-5">
				<div class="col-md-12 heading-section text-center ftco-animate">
					<span class="subheading">Skills</span>
					<h2 class="mb-4">My Skills</h2>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
				</div>
			</div>
			<div class="row progress-circle mb-5">
			
			
			 <?php

                $query = "SELECT * FROM skill";
                $select_all_skill_query = mysqli_query($connection, $query);

                while($row = mysqli_fetch_assoc($select_all_skill_query))
                {
                    $skill_id = $row['skill_id'];
                    $skill_name = $row['skill_name'];
                    $overall = $row['overall'];
                    $last_week = $row['last_week'];
                    $last_month = $row['last_month'];
                    


                ?>

			
				<div class="col-lg-4 mb-4">
					<div class="bg-white rounded-lg shadow p-4">
						<h2 class="h5 font-weight-bold text-center mb-4"><?php echo $skill_name ?></h2>

						<!-- Progress bar 1 -->
						<div class="progress mx-auto" data-value='<?php echo $overall ?>'>
							<span class="progress-left">
								<span class="progress-bar border-primary"></span>
							</span>
							<span class="progress-right">
								<span class="progress-bar border-primary"></span>
							</span>
							<div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
								<div class="h2 font-weight-bold"><?php echo $overall."%" ?></div>
							</div>
						</div>
						<!-- END -->

						<!-- Demo info -->
						<div class="row text-center mt-4">
							<div class="col-6 border-right">
								<div class="h4 font-weight-bold mb-0"><?php echo $last_week."%" ?></div><span class="small text-gray">Last week</span>
							</div>
							<div class="col-6">
								<div class="h4 font-weight-bold mb-0"><?php echo $last_month."%" ?></div><span class="small text-gray">Last month</span>
							</div>
						</div>
						<!-- END -->
					</div>
				</div>
				
				
				<?php } ?>

				

			</div>
		</div>
	</section>