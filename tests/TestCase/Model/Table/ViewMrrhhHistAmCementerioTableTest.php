<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ViewMrrhhHistAmCementerioTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ViewMrrhhHistAmCementerioTable Test Case
 */
class ViewMrrhhHistAmCementerioTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ViewMrrhhHistAmCementerioTable
     */
    public $ViewMrrhhHistAmCementerio;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ViewMrrhhHistAmCementerio'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ViewMrrhhHistAmCementerio') ? [] : ['className' => ViewMrrhhHistAmCementerioTable::class];
        $this->ViewMrrhhHistAmCementerio = TableRegistry::getTableLocator()->get('ViewMrrhhHistAmCementerio', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ViewMrrhhHistAmCementerio);

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
