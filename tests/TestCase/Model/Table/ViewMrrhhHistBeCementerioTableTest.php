<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ViewMrrhhHistBeCementerioTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ViewMrrhhHistBeCementerioTable Test Case
 */
class ViewMrrhhHistBeCementerioTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ViewMrrhhHistBeCementerioTable
     */
    public $ViewMrrhhHistBeCementerio;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ViewMrrhhHistBeCementerio'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ViewMrrhhHistBeCementerio') ? [] : ['className' => ViewMrrhhHistBeCementerioTable::class];
        $this->ViewMrrhhHistBeCementerio = TableRegistry::getTableLocator()->get('ViewMrrhhHistBeCementerio', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ViewMrrhhHistBeCementerio);

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
