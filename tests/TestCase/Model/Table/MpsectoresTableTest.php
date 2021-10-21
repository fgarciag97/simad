<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MpsectoresTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MpsectoresTable Test Case
 */
class MpsectoresTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MpsectoresTable
     */
    public $Mpsectores;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Mpsectores'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Mpsectores') ? [] : ['className' => MpsectoresTable::class];
        $this->Mpsectores = TableRegistry::getTableLocator()->get('Mpsectores', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Mpsectores);

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
