<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CompraOrdenComprasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CompraOrdenComprasTable Test Case
 */
class CompraOrdenComprasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CompraOrdenComprasTable
     */
    public $CompraOrdenCompras;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.CompraOrdenCompras'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('CompraOrdenCompras') ? [] : ['className' => CompraOrdenComprasTable::class];
        $this->CompraOrdenCompras = TableRegistry::getTableLocator()->get('CompraOrdenCompras', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CompraOrdenCompras);

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
