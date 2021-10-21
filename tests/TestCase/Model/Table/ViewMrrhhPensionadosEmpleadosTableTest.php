<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ViewMrrhhPensionadosEmpleadosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ViewMrrhhPensionadosEmpleadosTable Test Case
 */
class ViewMrrhhPensionadosEmpleadosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ViewMrrhhPensionadosEmpleadosTable
     */
    public $ViewMrrhhPensionadosEmpleados;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ViewMrrhhPensionadosEmpleados'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ViewMrrhhPensionadosEmpleados') ? [] : ['className' => ViewMrrhhPensionadosEmpleadosTable::class];
        $this->ViewMrrhhPensionadosEmpleados = TableRegistry::getTableLocator()->get('ViewMrrhhPensionadosEmpleados', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ViewMrrhhPensionadosEmpleados);

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
