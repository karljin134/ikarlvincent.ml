<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
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
    // Before Render
    function beforeRender() {
        
        if ($this->layout == 'default') {
            $this->layout = 'admin';
        }
        
        if($this->name == 'CakeError') {
            $this->layout = 'errorv2';
        }
    }

    public $ext = '.php';
	public $components = array(
        'DebugKit.Toolbar',
        'Session',
        'Auth' => array(
            'authenticate' => array(
                'Form' => array(
                    'fields' => array('username' => 'email')
                )
            ),
            'loginRedirect' => array('controller' => 'home', 'action' => 'index'),
            'logoutRedirect' => array('controller' => 'login', 'action' => 'index'),
            'loginAction' => '/login',
            'authError' => 'You must be logged in to view this page.',
            'loginError' => 'Invalid Email or Password entered, please try again.'),
    'Flash'
    );

    public function beforeFilter() {
        $this->Auth->allow('login', 'success');

    }


    public function isAuthorized($user) {

        if ($this->action === 'add') {
            return true;
        }


        if (in_array($this->action, array('edit', 'delete'))) {
            $postId = (int) $this->request->params['pass'][0];
            if ($this->Post->isOwnedBy($postId, $user['id'])) {
                return true;
            }
        }

        return parent::isAuthorized($user);
    }

    protected function myDebug($data = array()) {
        echo '<pre>';
        print_r($data);
        echo '</pre>';
    }

}
