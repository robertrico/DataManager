<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Core\Configure;
use MongoDB\Client;
use MongoDB\BSON\ObjectID;
use MongoDB\BSON\UTCDateTime;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;

/**
 * Instances Controller
 *
 * @property \App\Model\Table\InstancesTable $Instances
 */
class InstancesController extends AppController
{

	private $inputtypes;
	private $mongo_client;

    public function initialize()
    {
		parent::initialize();
		$details = Configure::read('mdb');
		$cs = $details['ns'].$details['host'].':'.$details['port'];
		$this->mongo_client = new Client($cs);
        $this->loadComponent('DynamicParser');
		$this->inputtypes = TableRegistry::get('Inputtypes')->find('list',['keyField'=>'id','valueField'=>'htmlType'])->toArray();
    }

    public function beforeFilter(Event $event)
    {
		parent::beforeFilter($event);
	}

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $instances = $this->paginate($this->Instances);

        $this->set(compact('instances'));
        $this->set('_serialize', ['instances']);
    }

    /**
     * View method
     *
     * @param string|null $id Instance id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $instance = $this->Instances->get($id, [
            'contain' => []
        ]);

        $this->set('instance', $instance);
        $this->set('_serialize', ['instance']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $instance = $this->Instances->newEntity();
        if ($this->request->is('post')) {
			$sid = $this->Instances->saveSchema($this->request->data['schema'])->__toString();
            $instance = $this->Instances->patchEntity($instance, $this->request->data);
			$instance->schema = (string)$sid;
            if ($this->Instances->save($instance)) {
				$this->Flash->success(__('The instance has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The instance could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('instance'));
        $this->set('_serialize', ['instance']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Instance id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $instance = $this->Instances->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $instance = $this->Instances->patchEntity($instance, $this->request->data);
            if ($this->Instances->save($instance)) {
                $this->Flash->success(__('The instance has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The instance could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('instance'));
        $this->set('_serialize', ['instance']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Instance id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $instance = $this->Instances->get($id);
        if ($this->Instances->delete($instance)) {
            $this->Flash->success(__('The instance has been deleted.'));
        } else {
            $this->Flash->error(__('The instance could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }


	public function addDataRecord($id){
		if(empty($this->user_instances->$id)){
            $this->Flash->error(__('You cannot add a datarecord to this instance.'));
			return $this->redirect(['action' => 'index']);
		}

		$current_instance = $this->user_instances->{$id};

		$schema = $this->Instances->getSchemaFields($current_instance->schema);

        $instance = $this->Instances->newEntity();
		$sid = $this->user_instances->{$id}->schema;
		$schema = $this->Instances->getSchema($sid);
		$view_schema = $schema->schema;
		$input_blocks = $this->input_types;
		$input_obj = new \StdClass();
		foreach($input_blocks as $input){
			$input_obj->{$input->id} = $input;
		}
		$input_blocks = $input_obj;
		if($this->request->is('post')){
			foreach($this->request->data as $key => $value){
				$this->request->data[$key] = $this->DynamicParser->parseDate($value,'Y-m-d\TH:i','MongoDB\BSON\UTCDateTime');
			}
			$db = $this->mongo_client->data_manager->{$sid};
			$db->insertOne($this->request->data);
		}
		$this->set(compact('instance','view_schema','input_blocks'));
        $this->set('_serialize', ['instance']);
	}
}
