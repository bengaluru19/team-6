<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php include 'head_content.php'; 
			include 'connection.php';
	?>
</head>
<body>
	<div class="container">
		<div class="row">
			
			<div class="col-md-10">
				<?php
					$arr= $_GET['eventid'];
					$query = "select A.id,A.name,A.email,A.skillset,B.status from volunteer as A inner join event_volunteers as B on A.id=B.vol_id where B.event_id=".$arr;
					$result  = mysqli_query($conn,$query);
					if($result)
					{
						echo "<table class='table table-striped'>";
						echo "<tr><th>Volunteer ID</th>
						<th>Volunteer Name</th>
						<th>Volunteer Volunteer Email</th>
						<th>Volunteer Skillset</th><th>Status</th><th>&nbsp;</th></tr>";
						while ($row = mysqli_fetch_array($result)) {
							?>
								
								<tr>
									<td><?php echo $row[0]; ?></td>
									<td><?php echo $row[1]; ?></td>
									<td><?php echo $row[2]; ?></td>
									<td><?php echo $row[3]; ?></td>
									<td><?php echo $row[4]; ?></td>
									<td><button vid="<?php echo($row[0]) ?>" class="btn approve btn-primary">Approve</button><button vid="<?php echo($row[0]) ?>" class="btn waitlist btn-info">Waitlist</button><button vid="<?php echo($row[0]) ?>" class="btn btn-danger reject">Reject</button></td>
								</tr>

							<?php
						}
						echo "</table>";
					}
					else
					{
						echo "";
					}

				?>		
			</div>

			<div class="col-md-2"></div>
		</div>
	</div>
	<script type="text/javascript">
		
		$('.approve').click(function()
		{
			var id = $(this).attr("vid");
			var status = "Approved";
			var event_id = <?php echo $arr; ?>;
			location.href="eventsapproval.php?vol_id="+id+"&event_id="+event_id+"&status='"+status+"'";
		});
		$('.waitlist').click(function()
		{
			var id = $(this).attr("vid");
			var status = "Waitlisted";
			var event_id = <?php echo $arr; ?>;
			location.href="eventsapproval.php?vol_id="+id+"&event_id="+event_id+"&status='"+status+"'";
		});
		$('.reject').click(function()
		{
			var id = $(this).attr("vid");
			var status = "Rejected";
			var event_id = <?php echo $arr; ?>;
			location.href="eventsapproval.php?vol_id="+id+"&event_id="+event_id+"&status='"+status+"'";
		});

	</script>
</body>
</html>
	