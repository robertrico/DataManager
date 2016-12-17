<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Inputtypes Controller
 *
 * @property \App\Model\Table\InputtypesTable $Inputtypes
 */
class InputtypesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $inputtypes = $this->paginate($this->Inputtypes);

        $this->set(compact('inputtypes'));
        $this->set('_serialize', ['inputtypes']);
    }

    /**
     * View method
     *
     * @param string|null $id Inputtype id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $inputtype = $this->Inputtypes->get($id, [
            'contain' => []
        ]);

        $this->set('inputtype', $inputtype);
        $this->set('_serialize', ['inputtype']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $inputtype = $this->Inputtypes->newEntity();
        if ($this->request->is('post')) {
            $inputtype = $this->Inputtypes->patchEntity($inputtype, $this->request->data);
            if ($this->Inputtypes->save($inputtype)) {
                $this->Flash->success(__('The inputtype has been saved.'));

                return $this->redirect(['action' => 'add']);
            } else {
                $this->Flash->error(__('The inputtype could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('inputtype'));
        $this->set('_serialize', ['inputtype']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Inputtype id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $inputtype = $this->Inputtypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $inputtype = $this->Inputtypes->patchEntity($inputtype, $this->request->data);
            if ($this->Inputtypes->save($inputtype)) {
                $this->Flash->success(__('The inputtype has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The inputtype could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('inputtype'));
        $this->set('_serialize', ['inputtype']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Inputtype id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $inputtype = $this->Inputtypes->get($id);
        if ($this->Inputtypes->delete($inputtype)) {
            $this->Flash->success(__('The inputtype has been deleted.'));
        } else {
            $this->Flash->error(__('The inputtype could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
