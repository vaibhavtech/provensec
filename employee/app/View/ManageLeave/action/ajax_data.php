<?php
	if(isset($_GET['what']))
	{
		$what = $_GET['what'];
		$pieces = explode("@", $what);
		$fromwhat = $pieces[0];
		$frombey = $pieces[1];
		if($fromwhat == "city")
		{
			require_once('DataConnection.php');
			$query = "select * from cityinfo where stateid  = $frombey;";
			$result = mysqli_query(DataConnection::GetConnection(), $query);
			if($result && mysqli_num_rows($result) > 0)
			{
				$temp = array();
				while($row = mysqli_fetch_assoc($result))
				{
					$option = array("id" => $row['cityid'], "value" => htmlentities($row['cityname']));
					$temp[] = $option;
				}
				echo (json_encode($temp));
				//echo (json_encode($query));
			}
		}
	}
?>