<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TesoreriaChequesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TesoreriaChequesTable Test Case
 */
class TesoreriaChequesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TesoreriaChequesTable
     */
    public $TesoreriaCheques;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.TesoreriaCheques'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('TesoreriaCheques') ? [] : ['className' => TesoreriaChequesTable::class];
        $this->TesoreriaCheques = TableRegistry::getTableLocator()->get('TesoreriaCheques', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TesoreriaCheques);

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
