<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ViewMrrhhPensionadosEmpleadosAuxTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ViewMrrhhPensionadosEmpleadosAuxTable Test Case
 */
class ViewMrrhhPensionadosEmpleadosAuxTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ViewMrrhhPensionadosEmpleadosAuxTable
     */
    public $ViewMrrhhPensionadosEmpleadosAux;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ViewMrrhhPensionadosEmpleadosAux'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ViewMrrhhPensionadosEmpleadosAux') ? [] : ['className' => ViewMrrhhPensionadosEmpleadosAuxTable::class];
        $this->ViewMrrhhPensionadosEmpleadosAux = TableRegistry::getTableLocator()->get('ViewMrrhhPensionadosEmpleadosAux', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ViewMrrhhPensionadosEmpleadosAux);

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
