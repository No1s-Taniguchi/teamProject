<?php
namespace App\Model

use App\DetailController

class DetailModel {
    public function intialize(array $config) {
        $this->table('detail');
    }

    public function getDetailData($id) {
        $detil = $this->Detail->find()->select(['id'])->where(['id' => $id])->first();
    }
}

?>