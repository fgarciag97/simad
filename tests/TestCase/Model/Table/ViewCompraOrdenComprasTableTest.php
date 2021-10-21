<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ViewCompraOrdenComprasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ViewCompraOrdenComprasTable Test Case
 */
class ViewCompraOrdenComprasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ViewCompraOrdenComprasTable
     */
    public $ViewCompraOrdenCompras;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ViewCompraOrdenCompras'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ViewCompraOrdenCompras') ? [] : ['className' => ViewCompraOrdenComprasTable::class];
        $this->ViewCompraOrdenCompras = TableRegistry::getTableLocator()->get('ViewCompraOrdenCompras', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ViewCompraOrdenCompras);

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
