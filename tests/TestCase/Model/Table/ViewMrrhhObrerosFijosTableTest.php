<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ViewMrrhhObrerosFijosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ViewMrrhhObrerosFijosTable Test Case
 */
class ViewMrrhhObrerosFijosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ViewMrrhhObrerosFijosTable
     */
    public $ViewMrrhhObrerosFijos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ViewMrrhhObrerosFijos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ViewMrrhhObrerosFijos') ? [] : ['className' => ViewMrrhhObrerosFijosTable::class];
        $this->ViewMrrhhObrerosFijos = TableRegistry::getTableLocator()->get('ViewMrrhhObrerosFijos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ViewMrrhhObrerosFijos);

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
