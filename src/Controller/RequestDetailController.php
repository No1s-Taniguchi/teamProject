<?php
namespace App\Controller;

use App\Controller\AppController;
use App\Model\DetailModel;

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
    }
}