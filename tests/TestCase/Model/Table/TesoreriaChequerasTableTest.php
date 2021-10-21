<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TesoreriaChequerasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TesoreriaChequerasTable Test Case
 */
class TesoreriaChequerasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TesoreriaChequerasTable
     */
    public $TesoreriaChequeras;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.TesoreriaChequeras'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('TesoreriaChequeras') ? [] : ['className' => TesoreriaChequerasTable::class];
        $this->TesoreriaChequeras = TableRegistry::getTableLocator()->get('TesoreriaChequeras', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TesoreriaChequeras);

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
