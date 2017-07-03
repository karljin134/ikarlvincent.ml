<?php
/**
 * Static content controller.
 *
 * This file will render views from views/pages/
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
class BlogsController extends AppController {

    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow();
    }
/**
 * This controller does not use a model
 *
 * @var array
 */
	public $uses = array(
		'Posts',
		'Users'
	);

/**
 * Displays a view
 *
 * @return void
 * @throws ForbiddenException When a directory traversal attempt.
 * @throws NotFoundException When the view file could not be found
 *   or MissingViewException in debug mode.
 */
	public function index() {
		$this->layout = 'portfolio';
		$authors = $this->Users->find('all', array(
				'fields' => array(
					'Users.id',
					'Users.name',
					'Users.email'
				)
			)
		);
		foreach ($authors as $value) {
			$value = $value['Users'];
			$id = $value['id'];
			$authors_list[$id] = $value;
		}
		$posts = $this->Posts->find('all', array(
                'conditions' => array(
                    'Posts.status' => 1
                ),
                'order' => array('created' => 'desc')
            )
        );
        $this->set('posts', $posts);
        $this->set('authors', $authors_list);
	}
	public function view($id) {
		$this->layout = 'portfolio';
		$post = $this->Posts->find('first', array(
                'conditions' => array(
                    'Posts.id' => $id
                )
            )
        );
        $this->set('post', $post);

	}

}
