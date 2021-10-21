<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ConciliacionHaciendaCTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ConciliacionHaciendaCTable Test Case
 */
class ConciliacionHaciendaCTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ConciliacionHaciendaCTable
     */
    public $ConciliacionHaciendaC;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ConciliacionHaciendaC'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ConciliacionHaciendaC') ? [] : ['className' => ConciliacionHaciendaCTable::class];
        $this->ConciliacionHaciendaC = TableRegistry::getTableLocator()->get('ConciliacionHaciendaC', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ConciliacionHaciendaC);

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
