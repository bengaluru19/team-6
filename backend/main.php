<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php include 'head_content.php'; 
			include 'connection.php';
	?>
</head>
<body>
	<?php include 'main_content.php'; ?>
	<div class="show">
		
	</div>
</body>
<script type="text/javascript">
	
	$('.register').click(function()
	{
		var event_id = $(this).attr("event_id");
		location.href='show_applied.php?eventid='+event_id;
	});

</script>
</html>