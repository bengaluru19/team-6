<div class="container-fluid">
	<div class="row" style="margin-top: 10px;">
		<?php 
			
			$query = "select * from events";
			$res = mysqli_query($conn,$query);
			if($res)
			{
				while($row1 = mysqli_fetch_array($res))
				{
					?>
						
						<div class="col-md-3 tiless">
							<div class="thumbnail text-center" style="padding: 10px;">
								<p class="lead">Event Name : <?php echo($row1[1]); ?></p>
								<caption><a class="anchor-color" ><?php echo($row1[2]); ?></a></caption><br>
								<caption><a style="color: black;">Date- <?php echo($row1[3]." to ".$row1[4]); ?></a></caption><br>
								<caption><a style="color: black;">Time- <?php echo($row1[5]." to ".$row1[6]); ?></a></caption><br>
								<caption><a style="color: black;">Location - <?php echo(ucwords($row1[8].", ".$row1[9].", ".$row1[10])); ?></a></caption><br><br>
								<div align="center" style="display:inline;" class="col-6"><button event_id='<?php echo($row1[0]) ?>' class="register btn btn-md btn-primary">Register</button></div>
								
							</div>
						</div>

					<?php
				}
			}

		?>
	</div>
	
</div>