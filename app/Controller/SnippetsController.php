<?php
App::uses('AppController', 'Controller');
/**
 * Snippets Controller
 *
 * @property Snippet $Snippet
 * @property PaginatorComponent $Paginator
 */
class SnippetsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator','RequestHandler');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->set('title_for_layout', 'トップ画面');
		$categories = $this->Category->find('all');
		$this->set(compact('categories'));
	}
/**
 * add method
 *
 * @return void
 */
	public function add() {

		$this->set('title_for_layout', '新規スニペット追加');

		$categoryList = $this->Category->listAll();
		$this->set(compact('categoryList'));

		if ($this->request->is('post')) {
			$this->Snippet->create();
			if ($this->Snippet->save($this->request->data)) {
				$this->Session->setFlash(__('The snippet has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The snippet could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Snippet->id = $id;
		if (!$this->Snippet->exists($id)) {
			throw new NotFoundException(__('Invalid snippet'));
		}

		$options = array(
			'conditions' => array(
				'Snippet.id'=>$id
			)
		);
		$categoryList = $this->Category->listAll();
		$snippet = $this->Snippet->find('first',$options);
		$this->set('title_for_layout',$snippet['Snippet']['title']);
		$this->set(compact('snippet','categoryList'));

		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Snippet->save($this->request->data)) {
				$this->Session->setFlash(__('The snippet has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The snippet could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Snippet.' . $this->Snippet->primaryKey => $id));
			$this->request->data = $this->Snippet->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Snippet->id = $id;
		if (!$this->Snippet->exists()) {
			throw new NotFoundException(__('Invalid snippet'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Snippet->delete()) {
			$this->Session->setFlash(__('The snippet has been deleted.'));
		} else {
			$this->Session->setFlash(__('The snippet could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
