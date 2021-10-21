<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MrrhhVacacionesEmpleadosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MrrhhVacacionesEmpleadosTable Test Case
 */
class MrrhhVacacionesEmpleadosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MrrhhVacacionesEmpleadosTable
     */
    public $MrrhhVacacionesEmpleados;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.MrrhhVacacionesEmpleados'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MrrhhVacacionesEmpleados') ? [] : ['className' => MrrhhVacacionesEmpleadosTable::class];
        $this->MrrhhVacacionesEmpleados = TableRegistry::getTableLocator()->get('MrrhhVacacionesEmpleados', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MrrhhVacacionesEmpleados);

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
