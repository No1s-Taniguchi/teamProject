<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

class DetailsController extends AppController {
    public function index() {
        $id = $this->request->params['pass'][0];
        $fav = '';
        if (!empty($_POST['fav_off'])) {
            $fav = 0;
            $this->set('fav',$fav);
            $results = $this->Details->find('all',array(
                'conditions' => array('id' => $id)
            ));
            $this->set('results',$results);
            $this->render('details');
        }
        if (!empty($_POST['fav_on'])) {
            $fav = 1;
            $this->set('fav',$fav);
            $results = $this->Details->find('all',array(
                'conditions' => array('id' => $id)
            ));
            $this->set('results',$results);
            $this->render('details');
        }
        if (!empty($_POST['ask'])) {
            $fav = 1;
            $this->set('fav',$fav);
            $results = $this->Details->find('all',array(
                'conditions' => array('id' => $id)
            ));
            $this->set('results',$results);
            $this->render('details');
        }

        $this->set('fav',$fav);
        $results = $this->Details->find('all',array(
            'conditions' => array('id' => $id)
        ));
        $this->set('results',$results);
        $this->render('details');

    }
}