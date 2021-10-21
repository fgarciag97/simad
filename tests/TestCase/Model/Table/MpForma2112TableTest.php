<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MpForma2112Table;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MpForma2112Table Test Case
 */
class MpForma2112TableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MpForma2112Table
     */
    public $MpForma2112;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.MpForma2112'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MpForma2112') ? [] : ['className' => MpForma2112Table::class];
        $this->MpForma2112 = TableRegistry::getTableLocator()->get('MpForma2112', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MpForma2112);

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
