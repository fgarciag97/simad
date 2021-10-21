<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MrrhhPersonalDirectivoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MrrhhPersonalDirectivoTable Test Case
 */
class MrrhhPersonalDirectivoTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MrrhhPersonalDirectivoTable
     */
    public $MrrhhPersonalDirectivo;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.MrrhhPersonalDirectivo'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MrrhhPersonalDirectivo') ? [] : ['className' => MrrhhPersonalDirectivoTable::class];
        $this->MrrhhPersonalDirectivo = TableRegistry::getTableLocator()->get('MrrhhPersonalDirectivo', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MrrhhPersonalDirectivo);

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
