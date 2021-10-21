<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ViewMrrhhHistBeObrerosFijosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ViewMrrhhHistBeObrerosFijosTable Test Case
 */
class ViewMrrhhHistBeObrerosFijosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ViewMrrhhHistBeObrerosFijosTable
     */
    public $ViewMrrhhHistBeObrerosFijos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ViewMrrhhHistBeObrerosFijos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ViewMrrhhHistBeObrerosFijos') ? [] : ['className' => ViewMrrhhHistBeObrerosFijosTable::class];
        $this->ViewMrrhhHistBeObrerosFijos = TableRegistry::getTableLocator()->get('ViewMrrhhHistBeObrerosFijos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ViewMrrhhHistBeObrerosFijos);

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
