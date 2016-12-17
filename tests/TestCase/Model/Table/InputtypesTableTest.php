<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\InputtypesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\InputtypesTable Test Case
 */
class InputtypesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\InputtypesTable
     */
    public $Inputtypes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.inputtypes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Inputtypes') ? [] : ['className' => 'App\Model\Table\InputtypesTable'];
        $this->Inputtypes = TableRegistry::get('Inputtypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Inputtypes);

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
}
