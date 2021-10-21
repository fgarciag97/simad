<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CompraOrdenServicioItemsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CompraOrdenServicioItemsTable Test Case
 */
class CompraOrdenServicioItemsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CompraOrdenServicioItemsTable
     */
    public $CompraOrdenServicioItems;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.CompraOrdenServicioItems'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('CompraOrdenServicioItems') ? [] : ['className' => CompraOrdenServicioItemsTable::class];
        $this->CompraOrdenServicioItems = TableRegistry::getTableLocator()->get('CompraOrdenServicioItems', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CompraOrdenServicioItems);

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
