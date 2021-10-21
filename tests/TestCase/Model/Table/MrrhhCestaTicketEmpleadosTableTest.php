<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MrrhhCestaTicketEmpleadosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MrrhhCestaTicketEmpleadosTable Test Case
 */
class MrrhhCestaTicketEmpleadosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MrrhhCestaTicketEmpleadosTable
     */
    public $MrrhhCestaTicketEmpleados;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.MrrhhCestaTicketEmpleados'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MrrhhCestaTicketEmpleados') ? [] : ['className' => MrrhhCestaTicketEmpleadosTable::class];
        $this->MrrhhCestaTicketEmpleados = TableRegistry::getTableLocator()->get('MrrhhCestaTicketEmpleados', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MrrhhCestaTicketEmpleados);

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
