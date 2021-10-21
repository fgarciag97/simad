<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\HaciendaPagosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\HaciendaPagosTable Test Case
 */
class HaciendaPagosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\HaciendaPagosTable
     */
    public $HaciendaPagos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.HaciendaPagos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('HaciendaPagos') ? [] : ['className' => HaciendaPagosTable::class];
        $this->HaciendaPagos = TableRegistry::getTableLocator()->get('HaciendaPagos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->HaciendaPagos);

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
