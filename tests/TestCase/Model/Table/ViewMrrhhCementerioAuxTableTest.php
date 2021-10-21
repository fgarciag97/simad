<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ViewMrrhhCementerioAuxTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ViewMrrhhCementerioAuxTable Test Case
 */
class ViewMrrhhCementerioAuxTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ViewMrrhhCementerioAuxTable
     */
    public $ViewMrrhhCementerioAux;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ViewMrrhhCementerioAux'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ViewMrrhhCementerioAux') ? [] : ['className' => ViewMrrhhCementerioAuxTable::class];
        $this->ViewMrrhhCementerioAux = TableRegistry::getTableLocator()->get('ViewMrrhhCementerioAux', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ViewMrrhhCementerioAux);

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
