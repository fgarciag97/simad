<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MesTable Test Case
 */
class MesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MesTable
     */
    public $Mes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Mes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Mes') ? [] : ['className' => MesTable::class];
        $this->Mes = TableRegistry::getTableLocator()->get('Mes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Mes);

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
