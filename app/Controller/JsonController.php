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

	public function search($keyword) {
		
  	$options = array(
			'conditions' => array(
					'Snippet.title LIKE'=> '%'.$keyword.'%'
			),
			'order' => array(
				'Snippet.modified'=>'DESC'
			),
			'limit'=>10
		);
		
		$this->Paginator->settings = $options;
		$this->viewClass = 'Json';
    
		$snippets = $this->paginate('Snippet');
    $snippet_cnt = $this->Snippet->find('count',$options);
		
    $this->set(compact('snippets','snippet_cnt'));
    $this->set('_serialize', array('snippets','snippet_cnt'));
	}
	
	
	public function category($category_id = null) {
		
  	$options = array(
			'conditions' => array(
					'Snippet.category_id'=>$category_id
			),
			'order' => array(
				'Snippet.modified'=>'DESC'
			),
			'limit'=>10
		);
		
		$this->Paginator->settings = $options;
		$this->viewClass = 'Json';
    
		$snippets = $this->paginate('Snippet');
    $snippet_cnt = $this->Snippet->find('count',$options);
		
    $this->set(compact('snippets','snippet_cnt'));
    $this->set('_serialize', array('snippets','snippet_cnt'));
	}
	
}
