<?php
namespace App\Controller\Admin;

use App\Controller\Admin\AppController;


class HomesController extends AppController
{
	public function index()
	{
		$this->loadModel('Posts');
		
                $this->paginate = [
				'limit' => 5,
				'order' => ['id' => 'ASC'],
                                'contain' => ['Users'],
		];
		$posts = $this->paginate($this->Posts);
		$this->set(compact('posts'));
	}
}
