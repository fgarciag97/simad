<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MrrhhCargosCementerioTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MrrhhCargosCementerioTable Test Case
 */
class MrrhhCargosCementerioTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MrrhhCargosCementerioTable
     */
    public $MrrhhCargosCementerio;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.MrrhhCargosCementerio'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MrrhhCargosCementerio') ? [] : ['className' => MrrhhCargosCementerioTable::class];
        $this->MrrhhCargosCementerio = TableRegistry::getTableLocator()->get('MrrhhCargosCementerio', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MrrhhCargosCementerio);

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
