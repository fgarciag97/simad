<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MrrhhFinObrerosxTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MrrhhFinObrerosxTable Test Case
 */
class MrrhhFinObrerosxTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MrrhhFinObrerosxTable
     */
    public $MrrhhFinObrerosx;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.MrrhhFinObrerosx'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MrrhhFinObrerosx') ? [] : ['className' => MrrhhFinObrerosxTable::class];
        $this->MrrhhFinObrerosx = TableRegistry::getTableLocator()->get('MrrhhFinObrerosx', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MrrhhFinObrerosx);

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
