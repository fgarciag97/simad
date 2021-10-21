<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ViewCompraRequisicionTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ViewCompraRequisicionTable Test Case
 */
class ViewCompraRequisicionTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ViewCompraRequisicionTable
     */
    public $ViewCompraRequisicion;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ViewCompraRequisicion'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ViewCompraRequisicion') ? [] : ['className' => ViewCompraRequisicionTable::class];
        $this->ViewCompraRequisicion = TableRegistry::getTableLocator()->get('ViewCompraRequisicion', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ViewCompraRequisicion);

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
