<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CompraOrdenComprasPartidasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CompraOrdenComprasPartidasTable Test Case
 */
class CompraOrdenComprasPartidasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CompraOrdenComprasPartidasTable
     */
    public $CompraOrdenComprasPartidas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.CompraOrdenComprasPartidas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('CompraOrdenComprasPartidas') ? [] : ['className' => CompraOrdenComprasPartidasTable::class];
        $this->CompraOrdenComprasPartidas = TableRegistry::getTableLocator()->get('CompraOrdenComprasPartidas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CompraOrdenComprasPartidas);

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
