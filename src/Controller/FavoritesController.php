<?php

namespace App\Controller;

use App\Controller\AppController;

class FavoritesController extends AppController
{

    public function index()
    {
        $this->paginate = [
            'contain' => ['Posts']
        ];
        $favorites = $this->paginate($this->Favorites);

        $this->set(compact('favorites'));
    }

    public function view($id = null)
    {
        $favorite = $this->Favorites->get($id, [
            'contain' => ['Posts']
        ]);

        $this->set('favorite', $favorite);
    }

    public function add()
    {
        $favorite = $this->Favorites->newEntity();
        if ($this->request->is('post')) {
            $favorite = $this->Favorites->patchEntity($favorite, $this->request->getData());
            if ($this->Favorites->save($favorite)) {
                $this->Flash->success(__('The favorite has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The favorite could not be saved. Please, try again.'));
        }
        $posts = $this->Favorites->Posts->find('list', ['limit' => 200]);
        $this->set(compact('favorite', 'posts'));
    }

    public function edit($id = null)
    {
        $favorite = $this->Favorites->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $favorite = $this->Favorites->patchEntity($favorite, $this->request->getData());
            if ($this->Favorites->save($favorite)) {
                $this->Flash->success(__('The favorite has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The favorite could not be saved. Please, try again.'));
        }
        $posts = $this->Favorites->Posts->find('list', ['limit' => 200]);
        $this->set(compact('favorite', 'posts'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $favorite = $this->Favorites->get($id);
        if ($this->Favorites->delete($favorite)) {
            $this->Flash->success(__('The favorite has been deleted.'));
        } else {
            $this->Flash->error(__('The favorite could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
