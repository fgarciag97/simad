<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ViewMrrhhPenSobreEmpleadosAuxTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ViewMrrhhPenSobreEmpleadosAuxTable Test Case
 */
class ViewMrrhhPenSobreEmpleadosAuxTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ViewMrrhhPenSobreEmpleadosAuxTable
     */
    public $ViewMrrhhPenSobreEmpleadosAux;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ViewMrrhhPenSobreEmpleadosAux'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ViewMrrhhPenSobreEmpleadosAux') ? [] : ['className' => ViewMrrhhPenSobreEmpleadosAuxTable::class];
        $this->ViewMrrhhPenSobreEmpleadosAux = TableRegistry::getTableLocator()->get('ViewMrrhhPenSobreEmpleadosAux', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ViewMrrhhPenSobreEmpleadosAux);

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
