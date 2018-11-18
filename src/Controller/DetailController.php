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


      $name = 'データベース：名前';
      $sex = 'データベース：性別';
      $age = 'データベース：年齢';
      $time = 'データベース：時間';
      $content = 'データベース：内容';
      $remarks = 'データベース：備考';
      $this->set('name', $name);
      $this->set('sex', $sex);
      $this->set('age', $age);
      $this->set('time', $time);
      $this->set('content', $content);
      $this->set('remarks', $remarks);
    }
}
