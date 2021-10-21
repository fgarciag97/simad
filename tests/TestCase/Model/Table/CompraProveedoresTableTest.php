<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CompraProveedoresTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CompraProveedoresTable Test Case
 */
class CompraProveedoresTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CompraProveedoresTable
     */
    public $CompraProveedores;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.CompraProveedores'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('CompraProveedores') ? [] : ['className' => CompraProveedoresTable::class];
        $this->CompraProveedores = TableRegistry::getTableLocator()->get('CompraProveedores', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CompraProveedores);

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
