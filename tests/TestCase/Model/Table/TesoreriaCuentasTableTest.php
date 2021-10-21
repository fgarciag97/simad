<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TesoreriaCuentasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TesoreriaCuentasTable Test Case
 */
class TesoreriaCuentasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TesoreriaCuentasTable
     */
    public $TesoreriaCuentas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.TesoreriaCuentas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('TesoreriaCuentas') ? [] : ['className' => TesoreriaCuentasTable::class];
        $this->TesoreriaCuentas = TableRegistry::getTableLocator()->get('TesoreriaCuentas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TesoreriaCuentas);

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
