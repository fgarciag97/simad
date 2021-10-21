<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ViewCompraOrdenServicioItemsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ViewCompraOrdenServicioItemsTable Test Case
 */
class ViewCompraOrdenServicioItemsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ViewCompraOrdenServicioItemsTable
     */
    public $ViewCompraOrdenServicioItems;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ViewCompraOrdenServicioItems'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ViewCompraOrdenServicioItems') ? [] : ['className' => ViewCompraOrdenServicioItemsTable::class];
        $this->ViewCompraOrdenServicioItems = TableRegistry::getTableLocator()->get('ViewCompraOrdenServicioItems', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ViewCompraOrdenServicioItems);

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
