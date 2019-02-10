<?php
namespace App\Controller;

use App\Controller\AppController;
use App\Model\DetailModel;

class RequestDetailsController extends AppController {
    public function index() {
        $id = $this->request->query('id');
        $id = 1;

        $results = $this->RequestDetails->find('all',array(
            'conditions' => array('id' => $id)
        ));
        $this->set('results',$results);
        $this->render('requestDetails');
    }
}