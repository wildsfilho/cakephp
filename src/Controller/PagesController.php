<?php

namespace App\Controller;

class PagesController extends AppController{

    public function index(){

        $this->loadComponent('Paginator'); 

        $resultado = $this->Pages->find();
        $resultado = $this->paginate($resultado);
        $this->set('pages', $resultado );
        
    }

    public function view($id){

        debug('Visualização - ' . $id);
        exit;
    }

    public function add(){

        $newPage = $this->Pages->newEntity();
        if($this->request->is('post')){
            $newPage = $this->Pages->patchEntity($newPage, $this->request->getData());

            if($this->Pages->save()){
            $this->Flash->sucess('Salvo com sucesso');

            return $this->redirect(['action'=> 'index']);
        
         }
        }
        $this->Flash->warning('errou');
        
        $this->set('pagina', $newPage);

    }

} 