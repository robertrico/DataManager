<?php
namespace App\Model\Table;


use Cake\Datasource\ConnectionManager;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\ORM\TableRegistry;
use Cake\Validation\Validator;
use Cake\Core\Configure;
use MongoDB\Client;
use MongoDB\BSON\ObjectID;
use MongoDB\BSON\UTCDateTime;

/**
 * Instances Model
 *
 * @method \App\Model\Entity\Instance get($primaryKey, $options = [])
 * @method \App\Model\Entity\Instance newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Instance[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Instance|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Instance patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Instance[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Instance findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class InstancesTable extends Table
{

	private $details;
	private $cs;
	private $mc;
	private $db;
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

		$this->belongsToMany('Users');

        $this->table('instances');
        $this->displayField('name');
        $this->primaryKey('id');
		$this->Inputtypes = TableRegistry::get('Inputtypes');

        $this->addBehavior('Timestamp');

		$this->details = Configure::read('mdb');
		$this->cs = $this->details['ns'].$this->details['host'].':'.$this->details['port'];
		$this->mc = new Client($this->cs);
		$this->db = $this->mc->data_manager->schemas;
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->allowEmpty('name');

        $validator
            ->allowEmpty('schema');

        return $validator;
    }

	public function saveSchema($schema){
		$fixed = array_combine($schema['fields'],$schema['types']);
		$schema_struct = [
			'_id' => new ObjectID(),
			'schema'=>$fixed,
			'created' => new UTCDateTime(),
			'modified' => new UTCDateTime(),
		];
		$result = $this->db->insertOne($schema_struct);
		return $schema_struct['_id'];
	}

	public function getSchemaFields($schema_id){
		$result = $this->db->findOne(['_id'=>new ObjectID($schema_id)]);
		if(!empty($result)){
			return $result->schema;
		}else{
			throw new NotFoundException('Improper Instance Schema');
		}
	}

	public function insertDataRecord($data){
		$fixed = array_combine($schema['fields'],$schema['types']);
		$schema_struct = [
			'_id' => new ObjectID(),
			'schema'=>$fixed,
			'created' => new UTCDateTime(),
			'modified' => new UTCDateTime(),
		];
		$result = $db->insertOne($schema_struct);
		return $schema_struct['_id'];
	}

	public function getSchema($schema_id){
		$details = Configure::read('mdb');
		$cs = $details['ns'].$details['host'].':'.$details['port'];
		$mc = new Client($cs);
		$db = $mc->data_manager->schemas;

		$result = $db->findOne(['_id'=>new ObjectId($schema_id)]);
		return $result;
	}

	public function beforeSave(){
		$conn = ConnectionManager::get('default');
		$conn->driver()->autoQuoting(true);
	}
}
