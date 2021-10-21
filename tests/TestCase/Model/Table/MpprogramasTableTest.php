<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MpprogramasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MpprogramasTable Test Case
 */
class MpprogramasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MpprogramasTable
     */
    public $Mpprogramas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Mpprogramas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Mpprogramas') ? [] : ['className' => MpprogramasTable::class];
        $this->Mpprogramas = TableRegistry::getTableLocator()->get('Mpprogramas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Mpprogramas);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
