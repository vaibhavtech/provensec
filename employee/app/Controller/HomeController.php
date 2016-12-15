<?php
App::import('Controller', 'Users'); // mention at top
class HomeController extends AppController
{
  var $uses = array('User', 'Employee','Leave','Salary');
  public $components = array('RequestHandler','Paginator');

  public function home()
  {
    // $userid = $this->Auth->user('id');
    // if(empty($userid))
    // {
    //     $this->redirect(array('controller' => 'Users', 'action' => 'login'));
    // }
    // else
    // {
	  	$this->set("title_for_layout", "Home");
	  	$emp = $this->Employee->find('all', array("fields" => array("Employee.*","(select SUM(leave_taken) from leave_details where empid = Employee.id) as leave_taken","(select 7-SUM(leave_taken) from leave_details where empid = Employee.id) as leave_remaining")));
	  	$this->set("emp",$emp);
	  	// debugger::dump($emp);
  	// }
  }

  public function add_new()
  {
  	// $User = new UsersController;
   //  $userid = $this->Auth->user('id');
   //  if(empty($userid))
   //  {
   //      $this->redirect(array('controller' => 'Users', 'action' => 'login'));
   //  }
   //  else
   //  {
	  	$this->set("title_for_layout", "Add Details");
	  	$ids = $this->Employee->find('all', array("fields" => array("Employee.*")));
	  	$this->set("ids",$ids);
	  	if($this->request->is('post'))
	  	{
	  		$thisid = $this->Employee->find('first', array("fields" => array("id"), "order" => array("Employee.id desc")));
	  		// debugger::dump($thisid);
	  		$id = "001";
	  		if(is_array($thisid) && count($thisid) > 0)
	  		{
	  			$id = $thisid["Employee"]["id"];
	  			$id++;
	  			$id = sprintf("%03d", $id);

	  		} 
	  		$eid = "PSE" . $id;
	  		$this->Employee->create();
	  		$this->request->data["Employee"]["emp_code"] = $eid;
	  		$this->request->data["Employee"]["name"] = $this->request->data["emp_name"];
	  		$this->request->data["Employee"]["email"] = $this->request->data["emp_email"];
	  		$this->request->data["Employee"]["start_date"] = $this->request->data["start_date"];
	  		$this->request->data["Employee"]["end_date"] = $this->request->data["end_date"];
	  		$this->request->data["Employee"]["address"] = $this->request->data["emp_address"];
	  		$this->request->data["Employee"]["designation"] = $this->request->data["emp_desig"];
	  		// debugger::dump($this->request->data["Employee"]);
	  		$savedata = $this->Employee->save($this->request->data["Employee"]);
	  		if (count($savedata) > 0)
		  		{
		            return $this->redirect(array('action' => 'home'));
		        }
	  	}
  	// }
  }

  public function edit($id = null)
   {
   	// $User = new UsersController;
    // $userid = $this->Auth->user('id');
    // if(empty($userid))
    // {
    //     $this->redirect(array('controller' => 'Users', 'action' => 'login'));
    // }
    // else
    // {
   	    if(is_numeric($id))
	  	{
		  	$this->set("title_for_layout", "Edit Details");
		  	$query = $this->Employee->find('first', array("conditions" => array("Employee.id" => $id)));
		  	// $emp = $this->Employee->find('all', array("fields" => array("Employee.*", "conditions" => array("Employee.id" => $id))));
		  	// $this->set("emp",$emp);
		  	$id = $query["Employee"]["id"];
		  	$name = $query["Employee"]["name"];
		  	$email = $query["Employee"]["email"];
		  	$start_date = $query["Employee"]["start_date"];
		  	$end_date = $query["Employee"]["end_date"];
		  	$designation = $query["Employee"]["designation"];
		  	$address = $query["Employee"]["address"];
		  	$this->set("id",$id);
		  	$this->set("name",$name);
		  	$this->set("email",$email);
		  	$this->set("start_date",$start_date);
		  	$this->set("end_date",$end_date);
		  	$this->set("designation",$designation);
		  	$this->set("address",$address);
		  	// $this->set("query",$query);
		  	//debugger::dump($query);
		}
	  	if($this->request->is('post'))
	  	{
	  		$this->Employee->id = $this->request->data["id"];
	  		//$this->request->data["Employee"]["id"] = $this->request->data["id"];
	  		$this->request->data["Employee"]["name"] = $this->request->data["emp_name"];
	  		$this->request->data["Employee"]["email"] = $this->request->data["emp_email"];
	  		$this->request->data["Employee"]["start_date"] = $this->request->data["start_date"];
	  		$this->request->data["Employee"]["end_date"] = $this->request->data["end_date"];
	  		$this->request->data["Employee"]["address"] = $this->request->data["emp_address"];
	  		$this->request->data["Employee"]["designation"] = $this->request->data["emp_desig"];
	  		//debugger::dump($this->request->data);
	  		$savedata = $this->Employee->save($this->request->data);
	  		//print_r($savedata) ;
	  		if (count($savedata) > 0)
	  		{
	            return $this->redirect(array('action' => 'home'));
	        }
	    }
	// }
    }

    public function delete($id)
    {
    	$this->Leave->deleteAll(array('Leave.empid' => $id));
    	$this->Salary->deleteAll(array('Salary.salid' => $id));
    	$this->Employee->deleteAll(array('Employee.id' => $id));
    	return $this->redirect(array('action' => 'home'));
    }

}