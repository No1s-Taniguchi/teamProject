<?php
namespace App\Controller\Admin;

use App\Controller\Admin\AppController;

class PostsController extends AppController
{
	public function index()
	{
		$this->paginate = [
				"limit" => 5,
				"order" => ["id" => "ASC"],
                                "contain" => ["Users"],
		];
		$posts = $this->paginate($this->Posts);
		$this->set(compact('posts'));
	}
	
	public function add()
	{
                $user_id = $this->MyAuth->user("id");
		$post = $this->Posts->newEntity();
		if($this->request->is('post')){
			$post = $this->Posts->patchEntity($post, $this->request->data);
			
                        if ($this->Posts->save($post)){
				$this->Flash->success(__('新しい依頼を登録しました'));
				return $this->redirect(['controller' => 'Homes','action' => 'index']);
			}
			$this->Flash->error(__('新しい依頼登録に失敗しました'));
		}
                
		$this->set(compact('post','user_id'));
             
           
	}
	
	public function view($id = null)
	{
		$post = $this->Posts->get($id);
		$this->set('post', $post);
	}
	
	public function edit($id = null)
	{
		$post = $this->Posts->get($id,[
				'contain' => []
		]);
		if($this->request->is(['patch', 'post', 'put'])){
			$post = $this->Posts->patchEntity($post, $this->request->data);
			if($this->Posts->save($post)){
				$this->Flash->success(__('依頼を更新しました'));
				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error(__('依頼の更新に失敗しました'));
		}
		$this->set(compact('post'));
	}
	
}