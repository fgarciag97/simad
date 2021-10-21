<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MrrhhHistBeObrerosContratadosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MrrhhHistBeObrerosContratadosTable Test Case
 */
class MrrhhHistBeObrerosContratadosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MrrhhHistBeObrerosContratadosTable
     */
    public $MrrhhHistBeObrerosContratados;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.MrrhhHistBeObrerosContratados'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MrrhhHistBeObrerosContratados') ? [] : ['className' => MrrhhHistBeObrerosContratadosTable::class];
        $this->MrrhhHistBeObrerosContratados = TableRegistry::getTableLocator()->get('MrrhhHistBeObrerosContratados', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MrrhhHistBeObrerosContratados);

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
