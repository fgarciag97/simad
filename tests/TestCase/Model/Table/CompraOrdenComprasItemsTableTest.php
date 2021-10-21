<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CompraOrdenComprasItemsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CompraOrdenComprasItemsTable Test Case
 */
class CompraOrdenComprasItemsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CompraOrdenComprasItemsTable
     */
    public $CompraOrdenComprasItems;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.CompraOrdenComprasItems'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('CompraOrdenComprasItems') ? [] : ['className' => CompraOrdenComprasItemsTable::class];
        $this->CompraOrdenComprasItems = TableRegistry::getTableLocator()->get('CompraOrdenComprasItems', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CompraOrdenComprasItems);

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
