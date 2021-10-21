<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ViewMrrhhPenSobreEmpleadosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ViewMrrhhPenSobreEmpleadosTable Test Case
 */
class ViewMrrhhPenSobreEmpleadosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ViewMrrhhPenSobreEmpleadosTable
     */
    public $ViewMrrhhPenSobreEmpleados;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ViewMrrhhPenSobreEmpleados'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ViewMrrhhPenSobreEmpleados') ? [] : ['className' => ViewMrrhhPenSobreEmpleadosTable::class];
        $this->ViewMrrhhPenSobreEmpleados = TableRegistry::getTableLocator()->get('ViewMrrhhPenSobreEmpleados', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ViewMrrhhPenSobreEmpleados);

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
