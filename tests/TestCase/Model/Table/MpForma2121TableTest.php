<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MpForma2121Table;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MpForma2121Table Test Case
 */
class MpForma2121TableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MpForma2121Table
     */
    public $MpForma2121;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.MpForma2121'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MpForma2121') ? [] : ['className' => MpForma2121Table::class];
        $this->MpForma2121 = TableRegistry::getTableLocator()->get('MpForma2121', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MpForma2121);

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
