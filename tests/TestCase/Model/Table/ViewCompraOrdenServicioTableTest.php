<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ViewCompraOrdenServicioTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ViewCompraOrdenServicioTable Test Case
 */
class ViewCompraOrdenServicioTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ViewCompraOrdenServicioTable
     */
    public $ViewCompraOrdenServicio;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ViewCompraOrdenServicio'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ViewCompraOrdenServicio') ? [] : ['className' => ViewCompraOrdenServicioTable::class];
        $this->ViewCompraOrdenServicio = TableRegistry::getTableLocator()->get('ViewCompraOrdenServicio', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ViewCompraOrdenServicio);

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
