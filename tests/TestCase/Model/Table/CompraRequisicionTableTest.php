<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CompraRequisicionTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CompraRequisicionTable Test Case
 */
class CompraRequisicionTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CompraRequisicionTable
     */
    public $CompraRequisicion;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.CompraRequisicion'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('CompraRequisicion') ? [] : ['className' => CompraRequisicionTable::class];
        $this->CompraRequisicion = TableRegistry::getTableLocator()->get('CompraRequisicion', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CompraRequisicion);

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
