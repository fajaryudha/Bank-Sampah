
			
			
				<div class="page-header">
							<h1>
								Dashboard
							</h1>
						</div>




						
			<div class="row-fluid">


			   <div class="widget span5" onTablet="span6" onDesktop="100%">
       <!--<div class="content">
       <div class="verticalChart" style="width: 500px"> -->

       <canvas id="myChart" class="widget span5" onDesktop="100%"></canvas>
		<script type="text/javascript" src="<?php echo base_url();?>assets/chart/Chart.bundle.js"></script>
		<script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
		    type: 'bar',
		    data: {
		        labels: [
		        			<?php foreach ($kelas as $key): 
								
								 //echo $key['poin']; 
								  echo '"'.$key['penyetor'].'",'; 
						    endforeach ?> ],
		        datasets: [{
		            label: 'Poin Tertinggi',
		            data: [
		            			<?php foreach ($kelas as $key): 
								
								echo $key['poin'].','; 
								//echo '"'.$key['penyetor'].'",'; 
						    		endforeach ?>
						    		],
		            backgroundColor: [
		                'rgba(255, 99, 132, 0.2)',
		                // 'rgba(54, 162, 235, 0.2)',
		                // 'rgba(255, 206, 86, 0.2)',
		                // 'rgba(75, 192, 192, 0.2)',
		                // 'rgba(153, 102, 255, 0.2)',
		                // 'rgba(255, 159, 64, 0.2)'
		            ],
		            borderColor: [
		                'rgba(255,99,132,1)',
		                // 'rgba(54, 162, 235, 1)',
		                // 'rgba(255, 206, 86, 1)',
		                // 'rgba(75, 192, 192, 1)',
		                // 'rgba(153, 102, 255, 1)',
		                // 'rgba(255, 159, 64, 1)'
		            ],
		            borderWidth: 0
		        }]
		    },
		    options: {
		        scales: {
		            yAxes: [{
		                ticks: {
		                    beginAtZero:true
		                }
		            }]
		        }
		    }
		});
		</script>
		<!-- <div class="clearfix"></div>
		</div> -->
		</div> 

				

				<!-- <div class="widget green span5" onTablet="span6" onDesktop="100%">
					
					<h2><span class="glyphicons leaf"><i></i></span>Data Sampah Perkelas (gr)</h2>
					
					<hr>

					
					<div class="content">
						
						<div class="verticalChart" style="width: 500px">
							<?php foreach ($kelas as $key): ?>
								
								<div class="singleBar">
							
									<div class="bar">
								
										<div class="value">
											<span><?php echo $key['berat_sampah']; ?></span>
										</div>
								
									</div>
								
									<div class="title"><?php echo $key['penyetor']; ?></div>
							
								</div>

							<?php endforeach ?>

							
							<div class="clearfix"></div>
							
						</div>
					
					</div>
					
				</div><!--/span--> 
			
				 <div class="widget span5" onTablet="span6" onDesktop="100%">
       <!--<div class="content">
       <div class="verticalChart" style="width: 500px"> -->

       <canvas id="myChart1" class="widget span5" onDesktop="100%"></canvas>
		<script type="text/javascript" src="<?php echo base_url();?>assets/chart/Chart.bundle.js"></script>
		<script>
		var ctx = document.getElementById("myChart1").getContext('2d');
		var myChart = new Chart(ctx, {
		    type: 'bar',
		    data: {
		        labels: [
		        			<?php foreach ($kelas as $key): 
								
								 //echo $key['poin']; 
								  echo '"'.$key['penyetor'].'",'; 
						    endforeach ?> ],
		        datasets: [{
		            label: 'Berat Sampah',
		            data: [
		            			<?php foreach ($kelas as $key): 
								
								echo $key['berat_sampah'].','; 
								//echo '"'.$key['penyetor'].'",'; 
						    		endforeach ?>
						    		],
		            backgroundColor: [
		                'rgba(255, 99, 132, 0.2)',
		                // 'rgba(54, 162, 235, 0.2)',
		                // 'rgba(255, 206, 86, 0.2)',
		                // 'rgba(75, 192, 192, 0.2)',
		                // 'rgba(153, 102, 255, 0.2)',
		                // 'rgba(255, 159, 64, 0.2)'
		            ],
		            borderColor: [
		                'rgba(255,99,132,1)',
		                // 'rgba(54, 162, 235, 1)',
		                // 'rgba(255, 206, 86, 1)',
		                // 'rgba(75, 192, 192, 1)',
		                // 'rgba(153, 102, 255, 1)',
		                // 'rgba(255, 159, 64, 1)'
		            ],
		            borderWidth: 0
		        }]
		    },
		    options: {
		        scales: {
		            yAxes: [{
		                ticks: {
		                    beginAtZero:true
		                }
		            }]
		        }
		    }
		});
		</script>
		<!-- <div class="clearfix"></div>
		</div> -->
		</div> 
			
				
				
			

		<!-- <div class="widget blue span5" onTablet="span6" onDesktop="100%">
					
					<h2><span class="glyphicons heart"><i></i></span> Poin</h2>
					
					<hr>

					
					<div class="content">
						
						<div class="verticalChart" style="width: 500px">
							<?php foreach ($kelas as $key): ?>
								
								<div class="singleBar">
							
									<div class="bar">
								
										<div class="value">
											<span><?php echo $key['poin']; ?></span>
										</div>
								
									</div>
									
									<div class="title"><?php echo $key['penyetor']; ?></div>
							
								</div>

							<?php endforeach ?>

							
							<div class="clearfix"></div>
							
						</div>
					
					</div>
					
				</div></span--> 
	
			
		
		

			<a href="staff/data_staff/" class="quick-button metro yellow span2">
					<i class="icon-group"></i>
					<p>Staff</p>
				</a>
       </div>

      
		</div>