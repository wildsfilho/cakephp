<?php

namespace App\Controller;

class PagesController extends AppController{

    public function index(){

        $pages = $this->Pages->find()->all();
        debug($pages);
        exit;
    }

    public function view($id){

        debug('Visualização - ' . $id);
        exit;
    }

}