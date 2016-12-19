<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UsersInstancesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UsersInstancesTable Test Case
 */
class UsersInstancesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\UsersInstancesTable
     */
    public $UsersInstances;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.users_instances',
        'app.users',
        'app.instances',
        'app.instances_users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('UsersInstances') ? [] : ['className' => 'App\Model\Table\UsersInstancesTable'];
        $this->UsersInstances = TableRegistry::get('UsersInstances', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->UsersInstances);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
