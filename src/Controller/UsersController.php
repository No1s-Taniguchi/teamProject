<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

class UsersController extends AppController
{

    public function initialize()
    {
        parent::initialize();
        //ユーザ登録とログインのためにMyAuthを利用する
        $this->loadComponent("MyAuth");
        //以下のアクションのみはアクセス可能にする
        $this->MyAuth->allow(["login","add"]);
        
    }

    public function login()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->MyAuth->identify();
            if ($user) {
                $this->MyAuth->setUser($user);
                return $this->redirect($this->MyAuth->redirectUrl());
            } else {
                $this->Flash->error(__('ID、またはパスワードが間違っています'));
            }
        }
        $this->set(compact('user'));
    }
    
    public function logout()
    {
        return $this->redirect($this->MyAuth->logout());
    }

//    public function isAuthorized($user)
//    {
//        return true;
//    }

    public function index()
    {
        $this->set('users', $this->Users->find('all'));
    }

    public function view($id)
    {
        $user = $this->Users->get($id);
        $this->set(compact('user'));
    }

    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('ユーザ登録が完了しました'));
                return $this->redirect(['action' => 'add']);
            }
            $this->Flash->error(__('ユーザ登録に失敗しました'));
        }
        $this->set('user', $user);
    }

}
