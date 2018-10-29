<?php
namespace App\Controller;

use App\Controller\AppController;

class SampleController extends AppController {
    public function index() {
      $text = 'この文字列をViewに出力します。';
      $this->set('text', $text);
      //INSERT INTO `tp_detail`(`id`, `title`, `sex`, `age`, `time`, `content`, `remarks`) VALUES (1,'テスト','男',30,201810281200,'テスト1234abcd','テスト備考')
    }
}

