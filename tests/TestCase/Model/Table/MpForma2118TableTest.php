<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MpForma2118Table;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MpForma2118Table Test Case
 */
class MpForma2118TableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MpForma2118Table
     */
    public $MpForma2118;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.MpForma2118'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MpForma2118') ? [] : ['className' => MpForma2118Table::class];
        $this->MpForma2118 = TableRegistry::getTableLocator()->get('MpForma2118', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MpForma2118);

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
