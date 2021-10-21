<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ViewMrrhhEmpleadosContratadosAuxTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ViewMrrhhEmpleadosContratadosAuxTable Test Case
 */
class ViewMrrhhEmpleadosContratadosAuxTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ViewMrrhhEmpleadosContratadosAuxTable
     */
    public $ViewMrrhhEmpleadosContratadosAux;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ViewMrrhhEmpleadosContratadosAux'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ViewMrrhhEmpleadosContratadosAux') ? [] : ['className' => ViewMrrhhEmpleadosContratadosAuxTable::class];
        $this->ViewMrrhhEmpleadosContratadosAux = TableRegistry::getTableLocator()->get('ViewMrrhhEmpleadosContratadosAux', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ViewMrrhhEmpleadosContratadosAux);

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
