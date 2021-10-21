<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ConciliacionHaciendaDTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ConciliacionHaciendaDTable Test Case
 */
class ConciliacionHaciendaDTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ConciliacionHaciendaDTable
     */
    public $ConciliacionHaciendaD;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ConciliacionHaciendaD'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ConciliacionHaciendaD') ? [] : ['className' => ConciliacionHaciendaDTable::class];
        $this->ConciliacionHaciendaD = TableRegistry::getTableLocator()->get('ConciliacionHaciendaD', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ConciliacionHaciendaD);

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
