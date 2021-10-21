<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ViewMrrhhCestaTicketEmpleadosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ViewMrrhhCestaTicketEmpleadosTable Test Case
 */
class ViewMrrhhCestaTicketEmpleadosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ViewMrrhhCestaTicketEmpleadosTable
     */
    public $ViewMrrhhCestaTicketEmpleados;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ViewMrrhhCestaTicketEmpleados'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ViewMrrhhCestaTicketEmpleados') ? [] : ['className' => ViewMrrhhCestaTicketEmpleadosTable::class];
        $this->ViewMrrhhCestaTicketEmpleados = TableRegistry::getTableLocator()->get('ViewMrrhhCestaTicketEmpleados', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ViewMrrhhCestaTicketEmpleados);

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
