<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OrdenamientoCompraTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OrdenamientoCompraTable Test Case
 */
class OrdenamientoCompraTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\OrdenamientoCompraTable
     */
    public $OrdenamientoCompra;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.OrdenamientoCompra'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('OrdenamientoCompra') ? [] : ['className' => OrdenamientoCompraTable::class];
        $this->OrdenamientoCompra = TableRegistry::getTableLocator()->get('OrdenamientoCompra', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->OrdenamientoCompra);

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
