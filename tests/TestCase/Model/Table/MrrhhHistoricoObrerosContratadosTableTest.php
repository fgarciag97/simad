<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MrrhhHistoricoObrerosContratadosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MrrhhHistoricoObrerosContratadosTable Test Case
 */
class MrrhhHistoricoObrerosContratadosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MrrhhHistoricoObrerosContratadosTable
     */
    public $MrrhhHistoricoObrerosContratados;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.MrrhhHistoricoObrerosContratados'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MrrhhHistoricoObrerosContratados') ? [] : ['className' => MrrhhHistoricoObrerosContratadosTable::class];
        $this->MrrhhHistoricoObrerosContratados = TableRegistry::getTableLocator()->get('MrrhhHistoricoObrerosContratados', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MrrhhHistoricoObrerosContratados);

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
