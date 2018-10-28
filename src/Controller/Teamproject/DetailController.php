<?php
namespace App\Controller\Teamproject;

use Cake\Controller\Controller;
use Cake\Event\Event;

class DetailController extends AppController {
    public function index() {
        $this->set("title_for_layout","はじめてのCakePHP");
        $this->set("message","なんらかの文字");
    }

}
?>