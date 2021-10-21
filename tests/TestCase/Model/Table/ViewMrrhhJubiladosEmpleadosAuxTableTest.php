<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ViewMrrhhJubiladosEmpleadosAuxTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ViewMrrhhJubiladosEmpleadosAuxTable Test Case
 */
class ViewMrrhhJubiladosEmpleadosAuxTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ViewMrrhhJubiladosEmpleadosAuxTable
     */
    public $ViewMrrhhJubiladosEmpleadosAux;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ViewMrrhhJubiladosEmpleadosAux'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ViewMrrhhJubiladosEmpleadosAux') ? [] : ['className' => ViewMrrhhJubiladosEmpleadosAuxTable::class];
        $this->ViewMrrhhJubiladosEmpleadosAux = TableRegistry::getTableLocator()->get('ViewMrrhhJubiladosEmpleadosAux', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ViewMrrhhJubiladosEmpleadosAux);

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
