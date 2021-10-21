<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ViewMrrhhHorasExtrasEmpleadosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ViewMrrhhHorasExtrasEmpleadosTable Test Case
 */
class ViewMrrhhHorasExtrasEmpleadosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ViewMrrhhHorasExtrasEmpleadosTable
     */
    public $ViewMrrhhHorasExtrasEmpleados;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ViewMrrhhHorasExtrasEmpleados'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ViewMrrhhHorasExtrasEmpleados') ? [] : ['className' => ViewMrrhhHorasExtrasEmpleadosTable::class];
        $this->ViewMrrhhHorasExtrasEmpleados = TableRegistry::getTableLocator()->get('ViewMrrhhHorasExtrasEmpleados', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ViewMrrhhHorasExtrasEmpleados);

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
