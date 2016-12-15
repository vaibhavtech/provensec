<?php

App::uses('AppController', 'Controller');
App::import('Controller', 'User');

class UsersController extends AppController{

	var $uses = array("User", "Employee");
    public $components = array(
        'Auth' => array(
            'authenticate' => array(
                'Form' => array(
                    'fields' => array('username' => 'username', 'password' => 'password' )
                )
            )
        ),'RequestHandler','Paginator', 'Session'
    );

    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow();
    }

    public function logincheck() {
        $user = $this->User->find('first', array("conditions" => array('User.id' => $id)));
        return $user;
        if(isset($_SESSION["User"]["id"]))
        {
            
        }
    }

	public function enter()
	{
		$this->set("title_for_layout","Sign Up");
		if($this->request->is('post'))
            {
                $this->User->create();
                $this->request->data["User"]["first_name"] = $this->request->data["fname"];
                $this->request->data["User"]["last_name"] = $this->request->data["lname"];
                $this->request->data["User"]["email"] = $this->request->data["username"];
                $this->request->data["User"]["password"] = $this->request->data["password"];
                $savedata = $this->User->save($this->request->data);
                if($savedata > 0)
                {
                    return $this->redirect(array('controller' => 'Home', 'action' => 'home'));
                }
            }
	}

    public function login()
    {
        $this->set("title_for_layout","Login");
        if($this->request->is('post'))
        {
            $mail = $this->request->data["username"];
            $pword = $this->request->data["password"];
            $signin = $this->User->find('all', array('fields' => 'User.*', 'conditions' => array('User.email' => $mail, 'User.password' => $pword)));
            if(is_array($signin) && count($signin) > 0)
            {
                return $this->redirect(array('controller' => 'Home', 'action' => 'home'));
            }
            else
            {
                $this->Session->setFlash(__('Incorrect credentials','default', array(), 'good'));
            }
        }
    }

    public function logout()
    {
        $this->Session->destroy("User.id");
        $this->Session->setFlash(__('Successfully LoggedOut !','default', array(), 'good'));
        $this->Auth->logout();       
        $this->redirect($this->Auth->logout());
    }
}