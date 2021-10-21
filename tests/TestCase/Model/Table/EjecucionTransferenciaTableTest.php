<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EjecucionTransferenciaTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EjecucionTransferenciaTable Test Case
 */
class EjecucionTransferenciaTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EjecucionTransferenciaTable
     */
    public $EjecucionTransferencia;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.EjecucionTransferencia'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('EjecucionTransferencia') ? [] : ['className' => EjecucionTransferenciaTable::class];
        $this->EjecucionTransferencia = TableRegistry::getTableLocator()->get('EjecucionTransferencia', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->EjecucionTransferencia);

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
