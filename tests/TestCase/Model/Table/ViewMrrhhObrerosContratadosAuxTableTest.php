<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ViewMrrhhObrerosContratadosAuxTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ViewMrrhhObrerosContratadosAuxTable Test Case
 */
class ViewMrrhhObrerosContratadosAuxTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ViewMrrhhObrerosContratadosAuxTable
     */
    public $ViewMrrhhObrerosContratadosAux;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ViewMrrhhObrerosContratadosAux'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ViewMrrhhObrerosContratadosAux') ? [] : ['className' => ViewMrrhhObrerosContratadosAuxTable::class];
        $this->ViewMrrhhObrerosContratadosAux = TableRegistry::getTableLocator()->get('ViewMrrhhObrerosContratadosAux', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ViewMrrhhObrerosContratadosAux);

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
