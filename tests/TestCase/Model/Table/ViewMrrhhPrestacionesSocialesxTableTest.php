<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ViewMrrhhPrestacionesSocialesxTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ViewMrrhhPrestacionesSocialesxTable Test Case
 */
class ViewMrrhhPrestacionesSocialesxTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ViewMrrhhPrestacionesSocialesxTable
     */
    public $ViewMrrhhPrestacionesSocialesx;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ViewMrrhhPrestacionesSocialesx'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ViewMrrhhPrestacionesSocialesx') ? [] : ['className' => ViewMrrhhPrestacionesSocialesxTable::class];
        $this->ViewMrrhhPrestacionesSocialesx = TableRegistry::getTableLocator()->get('ViewMrrhhPrestacionesSocialesx', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ViewMrrhhPrestacionesSocialesx);

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
