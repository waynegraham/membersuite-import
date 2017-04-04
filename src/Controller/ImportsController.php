<?php

namespace App\Controller;

class ImportsController extends AppController
{

  public function initialize()
  {
    parent::initialize();
    $this->loadComponent('Flash');
  }

  public function index()
  {
    $imports = $this->Imports->find('all');
    $this->set(compact('imports'));
  }

  public function view($id = null)
  {
    $import = $this->Import->get($id);
    $this->set(compact('import'));
  }

  public function add()
  {
    $import = $this->Import->newEntity();
    if($this->request->is('post')) {
      $import = $this->Import->patchEntity($import, $this->request->getData());
      if($this->Imports->save($import)) {
        $this->Flash->success(__('Your Import has been saved'));
        return $this->redirect(['action' => 'index']);
      }
      $this->Flash->error(__('Unable to add your import.'));
    }
    $this->set('import', $import);
  }

  public function delete()
  {
    $this->request->allowMethod(['post', 'delete']);

    $import = $this->Imports->get($id);
    if ($this->Imports->delete($import)) {
        $this->Flash->success(__('The import with id: {0} has been deleted.', h($id)));
        return $this->redirect(['action' => 'index']);
    }
  }

  public function edit($id = null)
  {
    $import = $this->Import->get($id);
    if ($this->request->is(['post', 'put'])) {
       $this->Articles->patchEntity($import, $this->request->getData());
       if ($this->Articles->save($import)) {
           $this->Flash->success(__('Your article has been updated.'));
           return $this->redirect(['action' => 'index']);
       }
       $this->Flash->error(__('Unable to update your article.'));
   }

   $this->set('article', $import);
  }
}
