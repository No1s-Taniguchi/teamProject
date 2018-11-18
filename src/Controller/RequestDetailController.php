<?php
namespace App\Controller;

use App\Controller\AppController;

class SampleController extends AppController {
	function beforeFilter() {
	    parent::beforeFilter();
	}
    public function index() {

       //一覧ページからGETでIDを受け取る
       $id = $this->param['pass'][0];
       or
       $id = $this->request->query('id');
       //受け取ったIDの情報をDBから取得する
       $result = $this->DB名->findById($id);


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
    }
}
