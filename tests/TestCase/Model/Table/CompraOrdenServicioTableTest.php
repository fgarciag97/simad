<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CompraOrdenServicioTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CompraOrdenServicioTable Test Case
 */
class CompraOrdenServicioTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CompraOrdenServicioTable
     */
    public $CompraOrdenServicio;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.CompraOrdenServicio'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('CompraOrdenServicio') ? [] : ['className' => CompraOrdenServicioTable::class];
        $this->CompraOrdenServicio = TableRegistry::getTableLocator()->get('CompraOrdenServicio', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CompraOrdenServicio);

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
