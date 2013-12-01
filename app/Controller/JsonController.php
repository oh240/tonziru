<?php
App::uses('AppController', 'Controller');
/**
 * Snippets Controller
 *
 * @property Snippet $Snippet
 * @property PaginatorComponent $Paginator
 */
class JsonController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('RequestHandler','Paginator');


	public function all() {
	/*
		$options = array(
			'limit'=>10
		);

		$this->set('snippets', $this->Snippet->find('all',$options));
    $this->set('_serialize', array('snippets'));
   */
  
  	$this->Paginator->settings = array(
  	/*
			'conditions' => array(
					'Skill.user_id' => $user_id
			),
			'order' => array(
				'Skill.created'=>'DESC'
			),
		*/
			'limit'=>10
		);
		$this->viewClass = 'Json';

   $snippets = $this->paginate('Snippet');
   $this->set(compact('snippets'));
   $this->set('_serialize', array('snippets'));
	}

	public function search() {
		 $this->set('snippets', $this->Snippet->find('all'));
     $this->set('_serialize', array('snippets'));
	}

}