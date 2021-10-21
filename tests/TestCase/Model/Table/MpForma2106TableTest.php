<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MpForma2106Table;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MpForma2106Table Test Case
 */
class MpForma2106TableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MpForma2106Table
     */
    public $MpForma2106;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.MpForma2106'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MpForma2106') ? [] : ['className' => MpForma2106Table::class];
        $this->MpForma2106 = TableRegistry::getTableLocator()->get('MpForma2106', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MpForma2106);

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
