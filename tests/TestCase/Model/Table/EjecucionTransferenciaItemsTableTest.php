<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EjecucionTransferenciaItemsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EjecucionTransferenciaItemsTable Test Case
 */
class EjecucionTransferenciaItemsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EjecucionTransferenciaItemsTable
     */
    public $EjecucionTransferenciaItems;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.EjecucionTransferenciaItems'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('EjecucionTransferenciaItems') ? [] : ['className' => EjecucionTransferenciaItemsTable::class];
        $this->EjecucionTransferenciaItems = TableRegistry::getTableLocator()->get('EjecucionTransferenciaItems', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->EjecucionTransferenciaItems);

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
