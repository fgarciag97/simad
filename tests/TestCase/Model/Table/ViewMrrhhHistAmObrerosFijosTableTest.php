<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ViewMrrhhHistAmObrerosFijosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ViewMrrhhHistAmObrerosFijosTable Test Case
 */
class ViewMrrhhHistAmObrerosFijosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ViewMrrhhHistAmObrerosFijosTable
     */
    public $ViewMrrhhHistAmObrerosFijos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ViewMrrhhHistAmObrerosFijos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ViewMrrhhHistAmObrerosFijos') ? [] : ['className' => ViewMrrhhHistAmObrerosFijosTable::class];
        $this->ViewMrrhhHistAmObrerosFijos = TableRegistry::getTableLocator()->get('ViewMrrhhHistAmObrerosFijos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ViewMrrhhHistAmObrerosFijos);

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
