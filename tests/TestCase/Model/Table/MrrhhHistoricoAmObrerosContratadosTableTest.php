<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MrrhhHistoricoAmObrerosContratadosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MrrhhHistoricoAmObrerosContratadosTable Test Case
 */
class MrrhhHistoricoAmObrerosContratadosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MrrhhHistoricoAmObrerosContratadosTable
     */
    public $MrrhhHistoricoAmObrerosContratados;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.MrrhhHistoricoAmObrerosContratados'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MrrhhHistoricoAmObrerosContratados') ? [] : ['className' => MrrhhHistoricoAmObrerosContratadosTable::class];
        $this->MrrhhHistoricoAmObrerosContratados = TableRegistry::getTableLocator()->get('MrrhhHistoricoAmObrerosContratados', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MrrhhHistoricoAmObrerosContratados);

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
