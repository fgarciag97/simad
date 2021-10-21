<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ViewEjecucionRequisicionCompraTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ViewEjecucionRequisicionCompraTable Test Case
 */
class ViewEjecucionRequisicionCompraTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ViewEjecucionRequisicionCompraTable
     */
    public $ViewEjecucionRequisicionCompra;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ViewEjecucionRequisicionCompra'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ViewEjecucionRequisicionCompra') ? [] : ['className' => ViewEjecucionRequisicionCompraTable::class];
        $this->ViewEjecucionRequisicionCompra = TableRegistry::getTableLocator()->get('ViewEjecucionRequisicionCompra', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ViewEjecucionRequisicionCompra);

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
