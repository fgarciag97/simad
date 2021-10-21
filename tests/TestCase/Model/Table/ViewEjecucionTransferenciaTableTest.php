<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ViewEjecucionTransferenciaTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ViewEjecucionTransferenciaTable Test Case
 */
class ViewEjecucionTransferenciaTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ViewEjecucionTransferenciaTable
     */
    public $ViewEjecucionTransferencia;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ViewEjecucionTransferencia'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ViewEjecucionTransferencia') ? [] : ['className' => ViewEjecucionTransferenciaTable::class];
        $this->ViewEjecucionTransferencia = TableRegistry::getTableLocator()->get('ViewEjecucionTransferencia', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ViewEjecucionTransferencia);

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
