<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ConciliacionHaciendaTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ConciliacionHaciendaTable Test Case
 */
class ConciliacionHaciendaTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ConciliacionHaciendaTable
     */
    public $ConciliacionHacienda;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ConciliacionHacienda'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ConciliacionHacienda') ? [] : ['className' => ConciliacionHaciendaTable::class];
        $this->ConciliacionHacienda = TableRegistry::getTableLocator()->get('ConciliacionHacienda', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ConciliacionHacienda);

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
