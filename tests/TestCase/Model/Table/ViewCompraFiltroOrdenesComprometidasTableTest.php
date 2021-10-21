<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ViewCompraFiltroOrdenesComprometidasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ViewCompraFiltroOrdenesComprometidasTable Test Case
 */
class ViewCompraFiltroOrdenesComprometidasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ViewCompraFiltroOrdenesComprometidasTable
     */
    public $ViewCompraFiltroOrdenesComprometidas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ViewCompraFiltroOrdenesComprometidas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ViewCompraFiltroOrdenesComprometidas') ? [] : ['className' => ViewCompraFiltroOrdenesComprometidasTable::class];
        $this->ViewCompraFiltroOrdenesComprometidas = TableRegistry::getTableLocator()->get('ViewCompraFiltroOrdenesComprometidas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ViewCompraFiltroOrdenesComprometidas);

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
