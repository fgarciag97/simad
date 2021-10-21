<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RegistrosHaciendaTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RegistrosHaciendaTable Test Case
 */
class RegistrosHaciendaTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\RegistrosHaciendaTable
     */
    public $RegistrosHacienda;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.RegistrosHacienda'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('RegistrosHacienda') ? [] : ['className' => RegistrosHaciendaTable::class];
        $this->RegistrosHacienda = TableRegistry::getTableLocator()->get('RegistrosHacienda', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->RegistrosHacienda);

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
