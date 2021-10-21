<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SectorespTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SectorespTable Test Case
 */
class SectorespTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SectorespTable
     */
    public $Sectoresp;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Sectoresp'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Sectoresp') ? [] : ['className' => SectorespTable::class];
        $this->Sectoresp = TableRegistry::getTableLocator()->get('Sectoresp', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Sectoresp);

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
