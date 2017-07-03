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
class PostManageController extends AppController {

    public function beforeFilter() {
        parent::beforeFilter();
    }
/**
 * This controller does not use a model
 *
 * @var array
 */
	public $uses = array(
        'Posts'
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
		$posts = $this->Posts->find('all');
        $this->set('posts', $posts);
	}
    public function details($id) {       
        $post = $this->Posts->find('first', array(
                'conditions' => array(
                    'Posts.id' => $id
                )
            )
        );
        $this->set('post', $post);
    }
    public function create() {   
        $user = $this->Auth->user('id');
        if ($this->request->is('post')) {
            if ($this->request->data['savepost'] == 'publish') {
                $this->request->data['Posts']['status'] = 1;
            }
            if ($this->request->data['savepost'] == 'draft') {
                $this->request->data['Posts']['status'] = 0;
            }
            $this->request->data['Posts']['created_ip'] = $this->request->clientIp();
            $this->request->data['Posts']['author_id'] = $user;
            $this->Posts->create();
            if ($this->Posts->save($this->request->data)) {
                $this->Session->setFlash(__('The post saved. Thank you.'), 'alert', array('class' => 'alert alert-success alert-dismissable'));
                $post_id = $this->Posts->getLastInsertId();
                return $this->redirect(array('controller' => 'post-manage', 'action' => 'details', $post_id));
            } else {
                $this->Session->setFlash(__('The post could not be saved. Please, try again.'), 'alert', array('class' => 'alert alert-danger alert-dismissable'));
            }
        }     
    }
}
