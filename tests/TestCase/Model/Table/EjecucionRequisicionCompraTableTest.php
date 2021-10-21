<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EjecucionRequisicionCompraTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EjecucionRequisicionCompraTable Test Case
 */
class EjecucionRequisicionCompraTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EjecucionRequisicionCompraTable
     */
    public $EjecucionRequisicionCompra;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.EjecucionRequisicionCompra'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('EjecucionRequisicionCompra') ? [] : ['className' => EjecucionRequisicionCompraTable::class];
        $this->EjecucionRequisicionCompra = TableRegistry::getTableLocator()->get('EjecucionRequisicionCompra', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->EjecucionRequisicionCompra);

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
