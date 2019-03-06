<?php
namespace App\Controller\Admin;

use App\Controller\Admin\AppController;

class FavoritesController extends AppController
{
        public function index()
	{
                $this->paginate = [
				'limit' => 5,
				'order' => ['id' => 'ASC'],
                                'contain' => ['Users','Posts'],
		];
                $user_id = $this->MyAuth->user('id');
		$favorites = $this->paginate($this->Favorites->find()->where(['Favorites.user_id' => $user_id]));
		$this->set(compact('favorites'));
	}
    
        public function add($id = null)
	{
		$user_id = $this->MyAuth->user("id");
		$count = $this->Favorites->find()->where(['post_id' => $id,'user_id' => $user_id])->count();		
				
		if($count >= 1) {
			$this->Flash->error(__('お気に入りに追加済みです'));
			return $this->redirect(['controller'=>'Favorites' ,'action' => 'index',$id]);
		}
		
		
//		$events = $this->EventUsers->Events->get($id,[
//				'contain' => []
//		]);
                
		$favorite = $this->Favorites->newEntity();
		$favorite['post_id'] = $id;
		$favorite['user_id'] = $user_id;
		if($this->Favorites->save($favorite)){
			$this->Flash->success(__('お気に入りに追加しました'));
			return $this->redirect(['controller'=>'Homes' ,'action' => 'index',$id]);
		}
		$this->Flash->error(__('お気に入りに追加できません'));
		return $this->redirect(['controller'=>'Homes' ,'action' => 'index',$id]);
	}
	
	public function delete($id = null){
		
		$user_id = $this->MyAuth->user("id");
		$favorite = $this->Favorites->find()->where(['post_id' => $id, 'user_id' => $user_id])->first();
		if($this->Favorites->delete($favorite)){
			$this->Flash->success(__('お気に入りから削除しました'));
			return $this->redirect(['controller'=>'Homes' ,'action' => 'index',$id]);
		}
		
	}
	
}