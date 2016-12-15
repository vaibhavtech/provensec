<?php
App::import('Controller', 'Users'); // mention at top
class ManageLeaveController extends AppController
{
  var $uses = array('User', 'Employee','Leave','Salary','Type');
  public $components = array('RequestHandler','Paginator','Session');

	public function manage_leave()
	{
		$this->set("title_for_layout", "manage leave");
		$emp = $this->Leave->find('all', array("fields" => array("id","leave_start", "leave_end","leave_taken","leave_rem","(select type from leave_type where id = Leave.leave_type) as leave_type","(select name from employee where id = Leave.empid) as name")));
  		$this->set("emp",$emp);
  		// debugger::dump($emp);
	}

	public function add_leave()
	{
		$this->set("title_for_layout", "Add Leave Details");
		$data = $this->Employee->find('all', array("fields" => array("Employee.*")));
		$userdata = "";
		foreach ($data as $key => $value) {
		$userdata[$value['Employee']['id']] = $value['Employee']['name'];
		}
		$data1 = $this->Type->find('all', array("fields" => array("Type.*")));
		$userdata1 = "";
		foreach ($data1 as $key1 => $value1) {
		$userdata1[$value1['Type']['id']] = $value1['Type']['type'];
		}
		$data = $this->Leave->find('all', array("fields" => array("Leave.*")));
		$this->set("userdata", $userdata);
		$this->set("userdata1", $userdata1);
		$this->set("data", $data);
		// debugger::dump($userdata1);
		if($this->request->is('post'))
		{
			$date1 = $this->request->data["start_date"];
			$date2 = $this->request->data["end_date"];
			$datediff = "";
			if(!empty($date1) && !empty($date2))
			{
				$datediff = round(abs(strtotime($date1) - strtotime($date2))/86400);
			}
			if(!empty($datediff))
			{
				$this->Leave->create();
				$this->request->data["Leave"]["empid"] = $this->request->data["username"];
				$this->request->data["Leave"]["leave_type"] = $this->request->data["type"];
				$this->request->data["Leave"]["leave_start"] = $this->request->data["start_date"];
				$this->request->data["Leave"]["leave_end"] = $this->request->data["end_date"];
				$this->request->data["Leave"]["leave_taken"] = $datediff;
				$rem = (7 - $this->request->data["Leave"]["leave_taken"]);
				$this->request->data["Leave"]["leave_rem"] = $rem;
				$savedata = $this->Leave->save($this->request->data);
		  		if (count($savedata) > 0)
		  		{
		            return $this->redirect(array('action' => 'manage_leave'));
		        }
		    }
		}
	}

	public function edit($id = null)
   {
	  	$this->set("title_for_layout", "Edit Leave details");
	  	$data1 = $this->Type->find('all', array("fields" => array("Type.*")));
	  	$userdata1 = "";
		foreach ($data1 as $key1 => $value1) {
		$userdata1[$value1['Type']['id']] = $value1['Type']['type'];
		}
		$this->set("userdata1",$userdata1);
		// debugger::dump($userdata1);
	  	if(is_numeric($id))
	  	{
		  	$query = $this->Leave->find('first', array("conditions" => array("Leave.id" => $id)));
		  	// $emp = $this->Employee->find('all', array("fields" => array("Employee.*", "conditions" => array("Employee.id" => $id))));
		  	// $this->set("emp",$emp);
		  	if(is_array($query) && count($query) > 0)
		  	{
			  	$levid = $query["Leave"]["id"];
			  	$id = $query["Leave"]["empid"];
			  	$start_date = $query["Leave"]["leave_start"];
			  	$end_date = $query["Leave"]["leave_end"];
			  	$type = $query["Leave"]["leave_type"];
			  	$taken = $query["Leave"]["leave_taken"];
			  	$this->set("id",$levid);
			  	$this->set("start_date",$start_date);
			  	$this->set("end_date",$end_date);
			  	$this->set("type",$type);
			  	$this->set("taken",$taken);
			}
	  	}
	  	if($this->request->is('post'))
	  	{
	  		$date1 = $this->request->data["start_date"];
			$date2 = $this->request->data["end_date"];
			$datediff = "";
			if(!empty($date1) && !empty($date2))
			{
				$datediff = round(abs(strtotime($date1) - strtotime($date2))/86400);
			}
			if(!empty($datediff))
			{
		  		//$rem = ($this->request->data["leave_entitled"] - $this->request->data["leave_taken"]);
		  		$this->Leave->id = $this->request->data["id"];
		  		$this->request->data["Leave"]["leave_start"] = $this->request->data["start_date"];
		  		$this->request->data["Leave"]["leave_end"] = $this->request->data["end_date"];
		  		$this->request->data["Leave"]["leave_taken"] = $datediff;
		  		$this->request->data["Leave"]["leave_type"] = $this->request->data["type"];
		  		// debugger::dump($this->request->data);
		  		if($this->Leave->save($this->request->data['Leave']))
		  		{
		            return $this->redirect(array('action' => 'manage_leave'));
		        }
		    }
	    }
    }

    public function leave_type()
    {
    	$this->set("title_for_layout", "Manage Leave Types");
    	$types = $this->Type->find('all', array("fields" => array("Type.*")));
    	$this->set("types",$types);
    	// debugger::dump($types);
    }

    public function add_type()
    {
    	$this->set("title_for_layout", "Add Leave Types");
    	$data = $this->Type->find('all', array("fields" => array("Type.*")));
		$this->set("data",$data);
		// debugger::dump($data);
    	if($this->request->is('post'))
    	{
    		$this->Type->create();
    		$this->request->data["Type"]["type"] = $this->request->data["type"];
			$this->request->data["Type"]["description"] = $this->request->data["description"];
			$savedata = $this->Type->save($this->request->data);
		  		if (count($savedata) > 0)
		  		{
		            return $this->redirect(array('action' => 'leave_type'));
		        }
    	}
    }

    public function edit_type($id = null)
    {
    	$this->set("title_for_layout", "Edit Type Details");
    	if(is_numeric($id))
	  	{
	    	$fetch = $this->Type->find('first', array("conditions" => array("Type.id" => $id)));
	    	$typeid = $fetch["Type"]["id"];
	    	$typename = $fetch["Type"]["type"];
	    	$typedesc = $fetch["Type"]["description"];
		  	$this->set("id",$id);
		  	$this->set("type",$typename);
		  	$this->set("description",$typedesc);
		}
	  	if($this->request->is('post'))
	  	{
	  		$this->Type->id = $this->request->data["id"];
	  		$this->request->data["Type"]["type"] = $this->request->data["type"];
	  		$this->request->data["Type"]["description"] = $this->request->data["description"];
	  		if($this->Type->save($this->request->data['Type']))
	  		{
	            return $this->redirect(array('action' => 'leave_type'));
	        }
	  	}
    }

    public function delete($id)
    {
    	$this->Leave->deleteAll(array('Leave.leave_type' => $id));
    	$this->Type->deleteAll(array('Type.id' => $id));
    	return $this->redirect(array('action' => 'leave_type'));
    }

    function ajax_data()
	{
		$rtrdata = "";
		if(isset($_GET['what']))
		{
			$empid = $_GET['what'];
			$data = $this->Leave->find('all', array("fields" => array("Leave.*"), "conditions" => array("empid" => $empid)));
			// debugger::dump($data);
			// $this->set("data",$data);
			$rtrdata .= "<table class='table table-striped table-hover'><thead><tr><th>Leave Entitled</th><th>Leave Taken</th><th>Remaining Leave</th></tr></thead><tbody>";
			foreach ($data as $key => $value) {
				$rtrdata .= "<tr>";
				$rtrdata .= "<td>" . 7 . "</td>";
				$rtrdata .= "<td>" . $value["Leave"]["leave_taken"] . "</td>";
				$rtrdata .= "<td>" . $value["Leave"]["leave_rem"] . "</td>";
				$rtrdata .= "</tr>";
			}
			$rtrdata .= "</tbody></table>";
			echo $rtrdata;
		}
		exit;
	}
}