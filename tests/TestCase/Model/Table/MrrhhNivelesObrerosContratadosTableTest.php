<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MrrhhNivelesObrerosContratadosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MrrhhNivelesObrerosContratadosTable Test Case
 */
class MrrhhNivelesObrerosContratadosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MrrhhNivelesObrerosContratadosTable
     */
    public $MrrhhNivelesObrerosContratados;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.MrrhhNivelesObrerosContratados'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MrrhhNivelesObrerosContratados') ? [] : ['className' => MrrhhNivelesObrerosContratadosTable::class];
        $this->MrrhhNivelesObrerosContratados = TableRegistry::getTableLocator()->get('MrrhhNivelesObrerosContratados', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MrrhhNivelesObrerosContratados);

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
