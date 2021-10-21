<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MrrhhObrerosContratadosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MrrhhObrerosContratadosTable Test Case
 */
class MrrhhObrerosContratadosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MrrhhObrerosContratadosTable
     */
    public $MrrhhObrerosContratados;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.MrrhhObrerosContratados'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MrrhhObrerosContratados') ? [] : ['className' => MrrhhObrerosContratadosTable::class];
        $this->MrrhhObrerosContratados = TableRegistry::getTableLocator()->get('MrrhhObrerosContratados', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MrrhhObrerosContratados);

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
