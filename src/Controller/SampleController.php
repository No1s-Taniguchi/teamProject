<?php
namespace App\Controller;

use App\Controller\AppController;

class SampleController extends AppController {
    public function index() {
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
      //INSERT INTO `tp_detail`(`id`, `title`, `sex`, `age`, `time`, `content`, `remarks`) VALUES (1,'テスト','男',30,201810281200,'テスト1234abcd','テスト備考')
    }
}

