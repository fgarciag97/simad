<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ViewMrrhhPenEspEmpleadosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ViewMrrhhPenEspEmpleadosTable Test Case
 */
class ViewMrrhhPenEspEmpleadosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ViewMrrhhPenEspEmpleadosTable
     */
    public $ViewMrrhhPenEspEmpleados;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ViewMrrhhPenEspEmpleados'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ViewMrrhhPenEspEmpleados') ? [] : ['className' => ViewMrrhhPenEspEmpleadosTable::class];
        $this->ViewMrrhhPenEspEmpleados = TableRegistry::getTableLocator()->get('ViewMrrhhPenEspEmpleados', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ViewMrrhhPenEspEmpleados);

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
