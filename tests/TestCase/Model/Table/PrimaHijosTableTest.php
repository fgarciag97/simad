<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PrimaHijosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PrimaHijosTable Test Case
 */
class PrimaHijosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PrimaHijosTable
     */
    public $PrimaHijos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.PrimaHijos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('PrimaHijos') ? [] : ['className' => PrimaHijosTable::class];
        $this->PrimaHijos = TableRegistry::getTableLocator()->get('PrimaHijos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PrimaHijos);

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
