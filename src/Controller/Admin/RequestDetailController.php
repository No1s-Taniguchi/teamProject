<?php

namespace App\Controller\Admin;

use App\Controller\Admin\AppController;
use App\Model\DetailModel;

<<<<<<< Updated upstream
class RequestDetailsController extends AppController {
    public function index() {
        $id = $this->request->query('id');
        $id = 1;

        $results = $this->RequestDetails->find('all',array(
            'conditions' => array('id' => $id)
        ));
        $this->set('results',$results);
        $this->render('requestDetails');
=======
class RequestDetailController extends AppController {
    public function index() {
        $model = $this->loadModel('Detail');
    }
    public function view() {
      $client = 'データベース：依頼主';
      $content = 'データベース：内容';
      $time = 'データベース：時間';
      $compensation = 'データベース：報酬';
      $remarks = 'データベース：備考';
      $this->set('client', $client);
      $this->set('content', $content);
      $this->set('time', $time);
      $this->set('compensation', $compensation);
      $this->set('remarks', $remarks);
      
      $this->render('requestDetail');
>>>>>>> Stashed changes
    }
}