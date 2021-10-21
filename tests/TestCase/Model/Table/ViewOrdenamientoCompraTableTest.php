<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ViewOrdenamientoCompraTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ViewOrdenamientoCompraTable Test Case
 */
class ViewOrdenamientoCompraTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ViewOrdenamientoCompraTable
     */
    public $ViewOrdenamientoCompra;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ViewOrdenamientoCompra'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ViewOrdenamientoCompra') ? [] : ['className' => ViewOrdenamientoCompraTable::class];
        $this->ViewOrdenamientoCompra = TableRegistry::getTableLocator()->get('ViewOrdenamientoCompra', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ViewOrdenamientoCompra);

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
