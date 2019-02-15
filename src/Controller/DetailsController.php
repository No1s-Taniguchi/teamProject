<?php
namespace App\Controller;

use App\Controller\AppController;
use App\Model\DetailModel;

class DetailsController extends AppController {
    public function index() {
        $id = $this->request->query('id');
        $id = 1;

        $results = $this->Details->find('all',array(
            'conditions' => array('id' => $id)
        ));
        $this->set('results',$results);
        $this->render('details');
    }
}
