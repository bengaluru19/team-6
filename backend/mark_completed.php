<?php
	require 'connection.php';
	$json_obj = file_get_contents('php://input');
	$arr = json_decode($json_obj);
	$query = "select A.id,IF(DATEDIFF(A.date_to,A.date_from)+1 IS NOT NULL,DATEDIFF(A.date_to,A.date_from)+1,1)*ROUND(TIMEDIFF(A.time_to,A.time_from)/10000,2) as total_hrs,B.vol_id,C.id,C.num_events from events as A inner join event_volunteers as B on A.id=B.event_id inner join volunteer as C on B.vol_id=C.id where A.status='Completed' and B.status='Applied'";
	$result  = mysqli_query($conn,$query);
	if($result)
	{
		while ($row = mysqli_fetch_array($result)) {
			echo $row[0]." ".$row[1]." ".$row[2]." ".$row[3]." ".$row[4];
			$quer = "select totalhrs,num_events from volunteer where id=$row[2];";
			$quer3 = "select count(DISTINCT event_id) from event_volunteers where status='Approved' and vol_id=$row[2]";
			$res = mysqli_query($conn,$quer);
			$res3 = mysqli_query($conn,$quer3);
			if($res)
			{
				if($res3)
				{
					$tt1 = mysqli_fetch_array($res3);
					$events_done = $tt1[0];
					$tt = mysqli_fetch_array($res);
					$hrsdone = floatval($tt[0]);
					$total = $hrsdone+floatval($row[1]);
					$total_events = intval($tt[1]);
					$total_ev = $total_events+$events_done;
					$quer2 = "UPDATE `volunteer` SET `totalhrs`=$total,`num_events`=$total_ev WHERE `id`=$row[3]";
					$res2 = mysqli_query($conn,$quer2);
					if($res2)
					{
						echo "Updated";
					}
					else
					{
						echo mysqli_error($conn);
					}
				}
				else
				{
					echo mysqli_error($conn);
				}
			}
			else
			{
				echo mysqli_error($conn);
			}
		}
	}
	else
	{
		echo mysqli_error($conn);
	}

?>