<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MrrhhHistBeEmpleadosContratadosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MrrhhHistBeEmpleadosContratadosTable Test Case
 */
class MrrhhHistBeEmpleadosContratadosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MrrhhHistBeEmpleadosContratadosTable
     */
    public $MrrhhHistBeEmpleadosContratados;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.MrrhhHistBeEmpleadosContratados'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MrrhhHistBeEmpleadosContratados') ? [] : ['className' => MrrhhHistBeEmpleadosContratadosTable::class];
        $this->MrrhhHistBeEmpleadosContratados = TableRegistry::getTableLocator()->get('MrrhhHistBeEmpleadosContratados', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MrrhhHistBeEmpleadosContratados);

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
