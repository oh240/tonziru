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
  
  	$this->Paginator->settings = array(
  	/*
			'conditions' => array(
					'Skill.user_id' => $user_id
			),
		*/
			'order' => array(
				'Snippet.modified'=>'DESC'
			),
			'limit'=>10
		);
		$this->viewClass = 'Json';

   $snippets = $this->paginate('Snippet');
   $snippet_cnt = $this->Snippet->find('count');
   $this->set(compact('snippets','snippet_cnt'));
   $this->set('_serialize', array('snippets','snippet_cnt'));
	}

	public function search() {
		 $this->set('snippets', $this->Snippet->find('all'));
     $this->set('_serialize', array('snippets'));
	}
	
	public function category() {
		
	}

}
