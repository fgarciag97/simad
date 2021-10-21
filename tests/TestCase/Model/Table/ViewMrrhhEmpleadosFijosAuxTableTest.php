<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ViewMrrhhEmpleadosFijosAuxTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ViewMrrhhEmpleadosFijosAuxTable Test Case
 */
class ViewMrrhhEmpleadosFijosAuxTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ViewMrrhhEmpleadosFijosAuxTable
     */
    public $ViewMrrhhEmpleadosFijosAux;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ViewMrrhhEmpleadosFijosAux'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ViewMrrhhEmpleadosFijosAux') ? [] : ['className' => ViewMrrhhEmpleadosFijosAuxTable::class];
        $this->ViewMrrhhEmpleadosFijosAux = TableRegistry::getTableLocator()->get('ViewMrrhhEmpleadosFijosAux', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ViewMrrhhEmpleadosFijosAux);

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
