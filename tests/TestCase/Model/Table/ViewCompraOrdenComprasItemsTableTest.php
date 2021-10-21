<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ViewCompraOrdenComprasItemsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ViewCompraOrdenComprasItemsTable Test Case
 */
class ViewCompraOrdenComprasItemsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ViewCompraOrdenComprasItemsTable
     */
    public $ViewCompraOrdenComprasItems;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ViewCompraOrdenComprasItems'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ViewCompraOrdenComprasItems') ? [] : ['className' => ViewCompraOrdenComprasItemsTable::class];
        $this->ViewCompraOrdenComprasItems = TableRegistry::getTableLocator()->get('ViewCompraOrdenComprasItems', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ViewCompraOrdenComprasItems);

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
