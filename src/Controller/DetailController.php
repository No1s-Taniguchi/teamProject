<?php
namespace App\Controller;

use App\Controller\AppController;
use App\Model\DetailModel;

class DetailController extends AppController {
    public function index() {
        $model = $this->loadModel('Detail');
    }
    public function view() {
        $model = $this->loadModel('Detail');
         //       var_dump($model);
        //一覧ページからGETでIDを受け取る
        $id = $this->request->query('id');
        //受け取ったIDの情報をDBから取得する
        /*$detail = $this->Model->getDetailData($id);
        $name = $detail->name;
        $sex  = $detail->sex;
        $age  = $detail->age;
        $time = $detail->time;
        $content = $detail->content;
        $remarks = $detail->remarks;
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
