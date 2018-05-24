<?php

namespace App\Controller;

use Cake\I18n\Time;

class PagesController extends AppController{

    public function index(){

        $this->loadComponent('Paginator'); 

        $resultado = $this->Pages->find();
        $resultado = $this->paginate($resultado);
        $this->set('pages', $resultado );
        
    }

    public function view($id){

        $page = $this->Pages->get($id);
        $this->set('pagina',$page);

        
    }

    public function add(){

        $page = $this->Pages->newEntity();
        if($this->request->is('post')){
            $page = $this->Pages->patchEntity($page, array_merge($this->request->getData(), ['datacadastro'=> Time::now() ]));

            if($this->Pages->saveOrFail($page)){
            $this->Flash->success('Salvo com sucesso');

            return $this->redirect(['controller'=> 'pages',  'action'=> 'index']);
        
                }   
                $this->Flash->warning('Falhou Salvar');   
        }
        
        $this->set('pagina', $page);

    }

    public function edit($id){
        
        $page = $this->Pages->get($id);
        if($this->request->is('post')){
            $page = $this->Pages->patchEntity($page, array_merge($this->request->getData(), ['datacadastro'=> Time::now() ]));

            if($this->Pages->saveOrFail($page)){
            $this->Flash->success('Salvo com sucesso');

            return $this->redirect(['controller'=> 'pages',  'action'=> 'index']);
        
                }   
                $this->Flash->warning('Falhou Salvar');   
        }
        
        $this->set('pagina', $page);

    }

} 