<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

    // added the debug toolkit
    // sessions support
    // authorization for login and logut redirect
    public $components = array(
        'Session',
        'Auth' => array(
            'loginRedirect' => array('controller' => 'users', 'action' => 'index'),
            'logoutRedirect' => array('controller' => 'users', 'action' => 'login'),
            'authError' => 'You must be logged in to view this page.',
            'loginError' => 'Invalid Username or Password entered, please try again.'
        )
    );

    // only allow the login controllers only
    public function beforeFilter()
    {
        parent::beforeFilter();
        $this->Auth->allow();
        $this->loadModel('Organization');
        $this->loadModel('User');
        $userid = $this->Auth->user('id');
        $user = $this->User->find('first', array("conditions" => array('User.id' => $userid)));
        if($user)
        {
            if($this->Session->check("User.organization"))
            {
                $selectedorg = $this->Session->read("User.organization");
                $selectedorgid = $selectedorg["Organization"]["id"];
                $user["User"]["organization"] = $selectedorgid;
                $Org = $this->Organization->find('first', array("conditions" => array('Organization.id' =>$selectedorgid)));
            }
            else
            {
                $Org=$this->Organization->find('first', array("conditions" => array('Organization.id' =>$user["User"]["organization"])));
            }
            $this->set("Org", $Org);
        }
        $this->Auth->allow('login','beforeFilter');
        $this->set("user_id", $userid);
        if($user)
            $this->set("user_type",$user);
    }

    public function orgExpiration($id){
        if($this->Session->check("User.organization"))
        {
            $selectedorg = $this->Session->read("User.organization");
            $id = $selectedorg["Organization"]["id"];
        }
        $OrgExp = $this->Organization->find('first', array("conditions" => array('Organization.id' => $id)));
        $Today = date("Y-m-d");
        if($Today > $OrgExp["Organization"]["valid"])
        {
            $this->Session->destroy();
            $this->Session->setFlash(__('Your account has been expired !'));
            $this->redirect(array('action' => 'login'));
        }
    }
}
