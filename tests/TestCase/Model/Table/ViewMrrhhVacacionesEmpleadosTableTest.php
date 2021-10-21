<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ViewMrrhhVacacionesEmpleadosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ViewMrrhhVacacionesEmpleadosTable Test Case
 */
class ViewMrrhhVacacionesEmpleadosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ViewMrrhhVacacionesEmpleadosTable
     */
    public $ViewMrrhhVacacionesEmpleados;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ViewMrrhhVacacionesEmpleados'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ViewMrrhhVacacionesEmpleados') ? [] : ['className' => ViewMrrhhVacacionesEmpleadosTable::class];
        $this->ViewMrrhhVacacionesEmpleados = TableRegistry::getTableLocator()->get('ViewMrrhhVacacionesEmpleados', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ViewMrrhhVacacionesEmpleados);

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
