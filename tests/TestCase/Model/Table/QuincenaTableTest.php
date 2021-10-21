<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\QuincenaTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\QuincenaTable Test Case
 */
class QuincenaTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\QuincenaTable
     */
    public $Quincena;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Quincena'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Quincena') ? [] : ['className' => QuincenaTable::class];
        $this->Quincena = TableRegistry::getTableLocator()->get('Quincena', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Quincena);

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
