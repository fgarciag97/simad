<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ViewEjecucionRequisicionTransferenciaTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ViewEjecucionRequisicionTransferenciaTable Test Case
 */
class ViewEjecucionRequisicionTransferenciaTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ViewEjecucionRequisicionTransferenciaTable
     */
    public $ViewEjecucionRequisicionTransferencia;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ViewEjecucionRequisicionTransferencia'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ViewEjecucionRequisicionTransferencia') ? [] : ['className' => ViewEjecucionRequisicionTransferenciaTable::class];
        $this->ViewEjecucionRequisicionTransferencia = TableRegistry::getTableLocator()->get('ViewEjecucionRequisicionTransferencia', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ViewEjecucionRequisicionTransferencia);

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
