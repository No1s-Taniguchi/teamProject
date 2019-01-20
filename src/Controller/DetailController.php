<?php
namespace App\Controller;

use App\Controller\AppController;
use App\Model\DetailModel;

class DetailsController extends AppController {

    public function index() {
        // 仮のテーブル
        /*
        $model = $this->loadModel('Users');
        $users = $this->Users->find('all');

        $this->set('users',$users);
*/
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

        $this->render('detail');
    }
}
