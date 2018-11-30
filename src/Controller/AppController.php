<?php

namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;


class AppController extends Controller
{
    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');
        $this->loadComponent('Auth', [
			      'authorize' => ['Controller'],
            'loginRedirect' => [  //ログイン後のリダイレクト先設定
                'controller' => 'Users',
                'action' => 'index'
            ],
            'logoutRedirect' => [  //ログアウト後のリダイレクト先設定
                'controller' => 'Users',
                'action' => 'index'
            ]

        ]);
    }
	
    public function isAuthorized($user) /* add */
    {
        return false;
    }
  
    public function beforeRender(Event $event)
    {
    	$this->set("menu", "default");
        if (!array_key_exists('_serialize', $this->viewVars) &&
            in_array($this->response->type(), ['application/json', 'application/xml'])
        ) {
            $this->set('_serialize', true);
        }
    }
}
