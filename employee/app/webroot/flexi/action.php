<?php
$data = array(
			 '0' => array('name'=> 'Parvez', 'status' =>'complete', 'priority'=>'Low', 'ddate'=>'12/2/2014'),
			 '1' => array('name'=> 'Alam', 'status' =>'inprogress', 'priority'=>'Low', 'ddate'=>'12/2/2014'),
			 '2' => array('name'=> 'Sunnay', 'status' =>'hold', 'priority'=>'Low', 'ddate'=>'12/2/2014'),
			 '3' => array('name'=> 'Amir', 'status' =>'pending', 'priority'=>'Low', 'ddate'=>'12/2/2014'),
			 '4' => array('name'=> 'Amir1', 'status' =>'pending', 'priority'=>'Low', 'ddate'=>'12/2/2014'),
			 '5' => array('name'=> 'Amir2', 'status' =>'pending', 'priority'=>'Low', 'ddate'=>'12/2/2014')
			);

				$offset = isset($_POST['rp']) ? intval($_POST['rp']) : 5;
                 $page=isset($_POST['page']) ? intval($_POST['page']) : 1;
				 $limit = ($page-1)*$offset;
                 $userdata = array_slice($data,$limit, $offset);
				 
		$response = array(
	        'page' => $page,
			'total' => count($data),
	        'rows' => $userdata
    	);

		echo json_encode($response);
				//exit(0);
?>