<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;
//use Cake\Core\Configure;
//use Cake\Core\Configure\Engine\PhpConfig;

class AppController extends Controller
{
	// Controller default to no admins users
	protected $noAdmins = 'Customers';
		
	public $helpers = [
		'Less.Less', // required for parsing less files
		'BootstrapUI.Form',
		'BootstrapUI.Html',
		'BootstrapUI.Flash',
		'BootstrapUI.Paginator'
	];	

    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');
		$this->viewBuilder()->theme('TwitterBootstrap');	
		$this->viewBuilder()->layout('adminlte');	
		$this->loadComponent('Control'); // Nosso componente
        $this->loadComponent('Auth', [
            'loginRedirect' => [
                'controller' => 'Pages',
                'action' => 'index',
				'base' => false
            ],
            'loginAction' => [
                'plugin' => false,
                'controller' => 'Users',
                'action' => 'login'
            ],                    
            'logoutRedirect' => [
                'controller' => 'Users',
                'action' => 'login'
            ],
		'unauthorizedRedirect' => [
		'controller' => 'Users',
		'action' => 'login',
		'prefix' => false
	   ],
	    'authError' => 'Your dont have access to this area',
              'flash' => [
                  'element' => 'error'
              ]
        ]);		

		$user = $this->request->session()->read('Auth.User');
		$loguser = $user['username'];
		$this->set('loguser',$loguser);
		
		$group=$user['group_id'];
		$this->set('group',$group);
		
		$controller = $this->request->controller;
		$this->set('controller',$controller);
		
		$action = $this->request->action;
		// Via url: users/login?temp=default
		// $layout=$this->request->query('temp');
	    	// $this->set('template',$layout);

		if($loguser == '' || $loguser == 'manager'){
			$this->viewBuilder()->layout('CakeControl.admin');
		}else{
			$this->viewBuilder()->layout('adminlte');
		}

		// Uncomment to full acccess to actions below
//		$this->Auth->allow(['index','add','edit']);
		
		if(isset($group)){
			// Populate permissions table.
			// Full permissions in all tables to users from Supers group
			//$this->Control->populate(1);
			// Full permissions only in groups, users and permissions tables to users from Admins group
			//$this->Control->populate(2);
			// All permissions in all tables that are not groups, users and permissions to all users from group Managers
			//$this->Control->populate(3);
			// After the first login the application can comment on the above three lines

			// Send current controller to topmenu.ctp element
			$this->set('supers',$this->Control->tables($controller,$action,1));
			$this->set('admins',$this->Control->tables($controller,$action,2));
			$this->set('managers',$this->Control->tables($controller,$action,3));
			$this->set('users',$this->Control->tables($controller,$action,4));
		}

		if($action != 'login' && $action != 'logout'){
			if(isset($group) && $this->Control->access($controller,$action,$group)==false){	
				$this->Flash->error(__('As user "'.$user['username'].'", you do not have permission to access '.$controller.'/'.$action));
				return $this->redirect($this->referer());
			}
		}
    }

	public function isAuthorized($user)
	{
		$requestedUserId=$this->request->pass[0];

		if ($user['group_id']==1){
		    return true;
		} else if ($user['group_id']!=1 || $user['group_id']!=2) {
			if (!($this->request->action == 'index')) {
				if($userid==$user['id']) {
				    return true;
				}
			}
	    	return false;
		}
		return parent::isAuthorized($user);
	}

    public function beforeRender(Event $event)
    {	    
        if (!array_key_exists('_serialize', $this->viewVars) && in_array($this->response->type(), ['application/json', 'application/xml'])) {
            $this->set('_serialize', true);
        }
    }
}
