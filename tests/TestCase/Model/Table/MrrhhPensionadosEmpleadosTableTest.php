<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MrrhhPensionadosEmpleadosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MrrhhPensionadosEmpleadosTable Test Case
 */
class MrrhhPensionadosEmpleadosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MrrhhPensionadosEmpleadosTable
     */
    public $MrrhhPensionadosEmpleados;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.MrrhhPensionadosEmpleados'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MrrhhPensionadosEmpleados') ? [] : ['className' => MrrhhPensionadosEmpleadosTable::class];
        $this->MrrhhPensionadosEmpleados = TableRegistry::getTableLocator()->get('MrrhhPensionadosEmpleados', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MrrhhPensionadosEmpleados);

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
