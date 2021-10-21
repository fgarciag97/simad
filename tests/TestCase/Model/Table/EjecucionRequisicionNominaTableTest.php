<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EjecucionRequisicionNominaTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EjecucionRequisicionNominaTable Test Case
 */
class EjecucionRequisicionNominaTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EjecucionRequisicionNominaTable
     */
    public $EjecucionRequisicionNomina;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.EjecucionRequisicionNomina'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('EjecucionRequisicionNomina') ? [] : ['className' => EjecucionRequisicionNominaTable::class];
        $this->EjecucionRequisicionNomina = TableRegistry::getTableLocator()->get('EjecucionRequisicionNomina', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->EjecucionRequisicionNomina);

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
