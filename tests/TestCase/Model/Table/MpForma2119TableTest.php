<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MpForma2119Table;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MpForma2119Table Test Case
 */
class MpForma2119TableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MpForma2119Table
     */
    public $MpForma2119;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.MpForma2119'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MpForma2119') ? [] : ['className' => MpForma2119Table::class];
        $this->MpForma2119 = TableRegistry::getTableLocator()->get('MpForma2119', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MpForma2119);

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
