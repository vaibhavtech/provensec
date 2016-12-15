<?php
App::import('Controller', 'Users'); // mention at top
App::import('Vendor', 'fpdf', array('file' => 'fpdf/image_alpha.php'));
class ManageSalaryController extends AppController
{
  var $uses = array('User', 'Employee', 'Salary','Leave');
  public $components = array('RequestHandler','Paginator','Session');

	public function manage_salary()
	{
		$this->set("title_for_layout", "manage salary");
		$sal = $this->Salary->find('all', array("fields" => array("Salary.*","(select emp_code from employee where id = Salary.salid) as code","(select name from employee where id = Salary.salid) as name")));
		$this->set("sal",$sal);
		// debugger::dump($sal);
	}

	public function add_salary()
	{
		$this->set("title_for_layout", "add salary");
		$data = $this->Employee->find('all', array("fields" => array("Employee.*")));
		$userdata = "";
		foreach ($data as $key => $value) {
		$userdata[$value['Employee']['id']] = $value['Employee']['name'];
		}
		$this->set("userdata", $userdata);
		//$this->set("data", $data);
		if($this->request->is('post'))
		{
	  		$this->request->data["Salary"]["salid"] = $this->request->data["username"];
	  		$this->request->data["Salary"]["advance"] = $this->request->data["sa"];
	  		$this->request->data["Salary"]["basic_salary"] = $this->request->data["base"];
	  		$this->request->data["Salary"]["hra"] = $this->request->data["hra"];
	  		$this->request->data["Salary"]["da"] = $this->request->data["da"];
	  		$this->request->data["Salary"]["expense"] = $this->request->data["exp"];
	  		$this->request->data["Salary"]["advance"] = $this->request->data["sa"];
	  		$this->request->data["Salary"]["total"] = $this->request->data["ts"];
	  		$savedata = $this->Salary->save($this->request->data);
	  		//print_r($savedata) ;
	  		if (count($savedata) > 0)
	  		{
	            return $this->redirect(array('action' => 'manage_salary'));
	        }
		}
	}

	public function edit_salary($id =null)
	{
		$this->set("title_for_layout", "edit salary details");
		if(is_numeric($id))
	  	{
			$saldetails = $this->Salary->find('first', array("conditions" => array("Salary.id" => $id)));
			$id = $saldetails["Salary"]["id"];
			$sa = $saldetails["Salary"]["advance"];
			$da = $saldetails["Salary"]["da"];
			$expense = $saldetails["Salary"]["expense"];
			$base = $saldetails["Salary"]["basic_salary"];
			$hra = $saldetails["Salary"]["hra"];
			$ts = $saldetails["Salary"]["total"];
			$this->set("id",$id);
			$this->set("sa",$sa);
			$this->set("da",$da);
			$this->set("expense",$expense);
			$this->set("base",$base);
			$this->set("hra",$hra);
			$this->set("ts",$ts);
			// $this->set("saldetails",$saldetails);
			//$this->set("data", $data);
		}
		if($this->request->is('post'))
		{
			$this->Salary->id = $this->request->data["id"];
	  		$this->request->data["Salary"]["advance"] = $this->request->data["sa"];
	  		$this->request->data["Salary"]["basic_salary"] = $this->request->data["base"];
	  		$this->request->data["Salary"]["hra"] = $this->request->data["hra"];
	  		$this->request->data["Salary"]["da"] = $this->request->data["da"];
	  		$this->request->data["Salary"]["expense"] = $this->request->data["expense"];
	  		$this->request->data["Salary"]["advance"] = $this->request->data["sa"];
	  		$this->request->data["Salary"]["total"] = $this->request->data["ts"];
	  		$savedata = $this->Salary->save($this->request->data);
	  		//print_r($savedata) ;
	  		if (count($savedata) > 0)
	  		{
	            return $this->redirect(array('action' => 'manage_salary'));
	        }
		}
	}

	public function salary_slip()
	{
		$this->set("title_for_layout", "manage salary slip");
		$data = $this->Employee->find('all', array("fields" => array("Employee.*")));
		$userdata = "";
		foreach ($data as $key => $value) {
		$userdata[$value['Employee']['id']] = $value['Employee']['name'];
		}
		$this->set("userdata", $userdata);
		$sal = $this->Salary->find('first', array("conditions" => array("Salary.id")));
		$id = "";
		if(is_array($sal) && count($sal) > 0)
        {
			$id = $sal["Salary"]["id"];
        }
		$this->set("id", $id);
		if($this->request->is('post'))
		{
			return $this->redirect(array('action' => 'getdata/' . $this->request->data["month"]));
		}
	}

	public function getdata($mon)
	{
		$data = $this->Employee->find('all', array("fields" => array("Employee.*", "(SELECT id FROM salary WHERE salid = Employee.id) AS salaryid")));
		foreach ($data as $key => $value)
		{
			$this->Salary->id = $value['0']['salaryid'];
			$this->request->data["Salary"]["salary_month"] = $mon;
			$savedata = $this->Salary->save($this->request->data);
		}
		$content = $this->Salary->find('all', array("fields" => array("Salary.*","(select name from employee where id = Salary.salid) as name", "(select designation from employee where id = Salary.salid) as designation", "(select emp_code from employee where id = Salary.salid) as code", "(select sum(leave_taken) from leave_details where empid = Salary.salid) as taken", "(select 7 - sum(leave_taken) from leave_details where empid = Salary.salid) as remaining", "(select email from employee where id = Salary.salid) as email")));
		$contentdata = $content;
		// echo "<pre>";
		// print_r($contentdata);
		// echo "</pre>";
		if(is_array($contentdata) && count($contentdata) > 0)
		{
			App::uses('CakeEmail', 'Network/Email');
			$Email = new CakeEmail();
			foreach ($contentdata as $key => $value) {
				// print_r($value);
				$path = WWW_ROOT . "pdfs/";
				$file_name = $path . $value["0"]["name"] . '.pdf';
				// $Email->filePaths  = array('');
				if(file_exists($file_name))
				{
					$Email->attachments($file_name);
					$Email->from("aditya.manhas2013@gmail.com");
					$Email->to($value["0"]["email"]);
					$Email->subject("Salary slip for the month " . $value["Salary"]["salary_month"] );
					$message = "Dear ". $value["0"]["name"] . " Please find the attached salary slip for the month of ". $value["Salary"]["salary_month"];
					$Email->send($message);
				}
			}
			$this->set(compact("contentdata"));
		}
			// return $this->redirect(array('action' => 'salary_slip'));
	}

	function ajax_data()
	{
		$rtrdata = "";
		if(isset($_GET['what']))
		{
			$sid = $_GET['what'];
			$data = $this->Salary->find('count', array("conditions" => array("Salary.salid" => $sid)));
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
			if($data > 0)
			{
				echo "This user already exists";
			}
		}
		exit;
	}
}