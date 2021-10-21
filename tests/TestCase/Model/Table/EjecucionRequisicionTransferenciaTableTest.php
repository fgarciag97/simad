<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EjecucionRequisicionTransferenciaTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EjecucionRequisicionTransferenciaTable Test Case
 */
class EjecucionRequisicionTransferenciaTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EjecucionRequisicionTransferenciaTable
     */
    public $EjecucionRequisicionTransferencia;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.EjecucionRequisicionTransferencia'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('EjecucionRequisicionTransferencia') ? [] : ['className' => EjecucionRequisicionTransferenciaTable::class];
        $this->EjecucionRequisicionTransferencia = TableRegistry::getTableLocator()->get('EjecucionRequisicionTransferencia', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->EjecucionRequisicionTransferencia);

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
