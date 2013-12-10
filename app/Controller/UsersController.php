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
App::uses('Sanitize', 'Utility');
/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class UsersController extends AppController {
	
	public function login() {
		
	}
	
	public function logout(){
		$this->Auth->logout();
		return $this->redirect('/users/login');
	}
	
	public function index(){

	}
	
	public function add(){
		# code...
	}
	
	public function delete(){
		# code...
	}
	
	public function view(){
		
	}
  
	public function opauth_complete() {
		
		if ($this->data) {
		 	$data = Sanitize::clean($this->data);
			$options = array(
									'conditions' => array(
										'User.facebook_id' => $this->data['auth']['raw']['id']
								)
			);
			
			$user = $this->User->find('first',$options);
			
			if(!empty($user)) {
				$this->logincheck($user['User']); 
			} else {
				//facebook_idがなければアカウントを新規登録
				$this->User->create();
				$savedata = array(
					'name'=>$data['auth']['raw']['name'],
					'facebook_id'=>$data['auth']['raw']['id'],
				);
				$this->User->save($savedata,false);
				$user = $this->User->find('first',$options);
			}
			
			$this->redirect('/snippets/');
  	}	
	}

	private function logincheck($user = null) {
    
		if ($this->Auth->login($user)) {
      $session_data = $this->Session->read('Auth');
			$this->redirect('/snippets');
    } else {
      $this->Session->setFlash('ユーザー名かパスワードを間違えています!!');
      $this->redirect('add');
    }
	}
	
}

