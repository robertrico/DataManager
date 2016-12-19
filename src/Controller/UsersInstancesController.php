<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * UsersInstances Controller
 *
 * @property \App\Model\Table\UsersInstancesTable $UsersInstances
 */
class UsersInstancesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Instances']
        ];
        $usersInstances = $this->paginate($this->UsersInstances);

        $this->set(compact('usersInstances'));
        $this->set('_serialize', ['usersInstances']);
    }

    /**
     * View method
     *
     * @param string|null $id Users Instance id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $usersInstance = $this->UsersInstances->get($id, [
            'contain' => ['Users', 'Instances']
        ]);

        $this->set('usersInstance', $usersInstance);
        $this->set('_serialize', ['usersInstance']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $usersInstance = $this->UsersInstances->newEntity();
        if ($this->request->is('post')) {
            $usersInstance = $this->UsersInstances->patchEntity($usersInstance, $this->request->data);
            if ($this->UsersInstances->save($usersInstance)) {
                $this->Flash->success(__('The users instance has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The users instance could not be saved. Please, try again.'));
            }
        }
        $users = $this->UsersInstances->Users->find('list', ['valueField' => 'fullname', 'keyField' => 'id','limit' => 200]);
        $instances = $this->UsersInstances->Instances->find('list', ['limit' => 200]);
        $this->set(compact('usersInstance', 'users', 'instances'));
        $this->set('_serialize', ['usersInstance']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Users Instance id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $usersInstance = $this->UsersInstances->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $usersInstance = $this->UsersInstances->patchEntity($usersInstance, $this->request->data);
            if ($this->UsersInstances->save($usersInstance)) {
                $this->Flash->success(__('The users instance has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The users instance could not be saved. Please, try again.'));
            }
        }
        $users = $this->UsersInstances->Users->find('list', ['limit' => 200]);
        $instances = $this->UsersInstances->Instances->find('list', ['limit' => 200]);
        $this->set(compact('usersInstance', 'users', 'instances'));
        $this->set('_serialize', ['usersInstance']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Users Instance id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $usersInstance = $this->UsersInstances->get($id);
        if ($this->UsersInstances->delete($usersInstance)) {
            $this->Flash->success(__('The users instance has been deleted.'));
        } else {
            $this->Flash->error(__('The users instance could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
