<?php
App::uses('AppModel', 'Model');
/**
 * Category Model
 *
 */
class Category extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';

	public $hasmany = array(
		'Snippet'
	);

	function listAll() {

		$categories = $this->find('all');

		foreach ($categories as $category){
			$categoryList[] = array(
				'name'=> $category['Category']['name'],
				'value'=> $category['Category']['id']
			);
		}
		return $categoryList;
	}


}
