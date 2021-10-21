<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ViewMrrhhJubiladosEmpleadosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ViewMrrhhJubiladosEmpleadosTable Test Case
 */
class ViewMrrhhJubiladosEmpleadosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ViewMrrhhJubiladosEmpleadosTable
     */
    public $ViewMrrhhJubiladosEmpleados;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ViewMrrhhJubiladosEmpleados'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ViewMrrhhJubiladosEmpleados') ? [] : ['className' => ViewMrrhhJubiladosEmpleadosTable::class];
        $this->ViewMrrhhJubiladosEmpleados = TableRegistry::getTableLocator()->get('ViewMrrhhJubiladosEmpleados', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ViewMrrhhJubiladosEmpleados);

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
