<?php
/**
 * Static content controller.
 *
 * This file will render views from views/pages/
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
App::uses('AppController', 'Controller');

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class UsersController extends AppController {
	
	public function index(){
		# code
		if ($this->request->is('post')) {
			$data = $this->request->data['User']['name'];
			$this->Session->write('Adddate',$data);
			return $this->redirect('/users/url/');
		}
			
	}
	
	public function add(){
		# code...
	}
	
	public function url(){
		if ($this->request->is('post')) {
			$data = $this->Session->read('Adddata');
			$data['User']['url'] = $this->request->data['User']['url'];
			//$this->Session->write('Adddate',$data);
			return $this->redirect('/users/chose_design/');
		}
	}
	
	public function delete(){
		# code...
	}
	
	/*
	public function chose_design(){
		$data = $this->Session->read('Adddata');
	}
	*/
	
	public function view($value=''){
	}
}

