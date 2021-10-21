<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MrrhhPrestacionesSocialesxTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MrrhhPrestacionesSocialesxTable Test Case
 */
class MrrhhPrestacionesSocialesxTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MrrhhPrestacionesSocialesxTable
     */
    public $MrrhhPrestacionesSocialesx;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.MrrhhPrestacionesSocialesx'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MrrhhPrestacionesSocialesx') ? [] : ['className' => MrrhhPrestacionesSocialesxTable::class];
        $this->MrrhhPrestacionesSocialesx = TableRegistry::getTableLocator()->get('MrrhhPrestacionesSocialesx', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MrrhhPrestacionesSocialesx);

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
