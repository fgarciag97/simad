<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ViewEjecucionRequisicionNominaTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ViewEjecucionRequisicionNominaTable Test Case
 */
class ViewEjecucionRequisicionNominaTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ViewEjecucionRequisicionNominaTable
     */
    public $ViewEjecucionRequisicionNomina;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ViewEjecucionRequisicionNomina'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ViewEjecucionRequisicionNomina') ? [] : ['className' => ViewEjecucionRequisicionNominaTable::class];
        $this->ViewEjecucionRequisicionNomina = TableRegistry::getTableLocator()->get('ViewEjecucionRequisicionNomina', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ViewEjecucionRequisicionNomina);

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
