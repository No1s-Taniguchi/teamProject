<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

class DetailsController extends AppController {
    public function index() {
        $id = $this->request->query('id');
        $id = 2;
        $postId = 2;
//        $this->loadModel('Favorites');

        /*$favoritesTable = TableRegistry::get('favorites');
        $newfav = $favoritesTable->get(1);
        $detailsTable = TableRegistry::get('details');
        $newfav = $detailsTable->get(1);

        $newfavorites = $favoritesTable->find()->where(["user_id = " => $id]);

        $newfavorites->active_flag = 0;
        $favoritesTable->save($newfavorites);
        $this->set('fav',$newfavorites);


        $favorites = $this->Favorites->find('all',array(
            'conditions' => array('user_id' => $id)
        ));
        foreach($favorites as $fav) {
            $fav = $fav->active_flag;
        }
        $this->set('fav',$fav);
        $this->set('favorites',$favorites);
        $this->render('details');
*/
        if (!empty($_POST['fav_off'])) {
            $fav = 0;
            $this->set('fav',$fav);
            $this->render('details');
        }
        if (!empty($_POST['fav_on'])) {
            $fav = 1;
            $this->set('fav',$fav);
            $this->render('details');
        }
        if (!empty($_POST['ask'])) {
            $fav = 1;
            $this->set('fav',$fav);
            $this->render('details');
        }

        $results = $this->Details->find('all',array(
            'conditions' => array('id' => $id)
        ));

        $this->set('results',$results);
        $this->render('details');

    }
}
