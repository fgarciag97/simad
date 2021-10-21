<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MrrhhHorasExtrasEmpleadosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MrrhhHorasExtrasEmpleadosTable Test Case
 */
class MrrhhHorasExtrasEmpleadosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MrrhhHorasExtrasEmpleadosTable
     */
    public $MrrhhHorasExtrasEmpleados;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.MrrhhHorasExtrasEmpleados'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MrrhhHorasExtrasEmpleados') ? [] : ['className' => MrrhhHorasExtrasEmpleadosTable::class];
        $this->MrrhhHorasExtrasEmpleados = TableRegistry::getTableLocator()->get('MrrhhHorasExtrasEmpleados', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MrrhhHorasExtrasEmpleados);

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
