<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ViewMrrhhPenEspEmpleadosAuxTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ViewMrrhhPenEspEmpleadosAuxTable Test Case
 */
class ViewMrrhhPenEspEmpleadosAuxTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ViewMrrhhPenEspEmpleadosAuxTable
     */
    public $ViewMrrhhPenEspEmpleadosAux;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ViewMrrhhPenEspEmpleadosAux'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ViewMrrhhPenEspEmpleadosAux') ? [] : ['className' => ViewMrrhhPenEspEmpleadosAuxTable::class];
        $this->ViewMrrhhPenEspEmpleadosAux = TableRegistry::getTableLocator()->get('ViewMrrhhPenEspEmpleadosAux', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ViewMrrhhPenEspEmpleadosAux);

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
