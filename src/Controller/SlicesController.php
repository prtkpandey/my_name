<?php
namespace App\Controller;

use App\Controller\AppController;
class SlicesController extends AppController
{
    public function index(){
        $slice = $this->Slices->newEmptyEntity();
        if ($this->request->is('post')){
            $slice = $this->Slices->patchEntity($slice, $this->request->getData());

            if ($this->Slices->save($slice)) {
        $this->Flash->success(('User successfully saved.'));
        return $this->redirect(['action' => 'index']);
        }
        $this->Flash->error( ('Unable to save user.'));
    }
        $this->set(compact('slice'));
        
    }
    
    public function contact(){

        $slice = $this->Slices->newEmptyEntity();
        if ($this->request->is('post')){
            $slice = $this->Slices->patchEntity($slice, $this->request->getData());

            if ($this->Slices->save($slice)) {
        $this->Flash->success(('User successfully saved.'));
        return $this->redirect(['action' => 'contact']);
        }
        $this->Flash->error( ('Unable to save user.'));
    }
        $this->set(compact('slice'));
        
    }
    
    public function trainer(){
        
    }
    
    public function why(){

    
    }
    public function add(){
        $slice = $this->Slices->newEmptyEntity();
        if ($this->request->is('post')){
            $slice = $this->Slices->patchEntity($slice, $this->request->getData());

            if ($this->Slices->save($slice)) {
        $this->Flash->success(('User successfully saved.'));
        return $this->redirect(['action' => 'add']);
        }
        $this->Flash->error( ('Unable to save user.'));
    }
        $this->set(compact('slice'));
    }
}
        ?>