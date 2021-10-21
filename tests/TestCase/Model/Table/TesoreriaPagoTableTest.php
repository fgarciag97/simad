<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TesoreriaPagoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TesoreriaPagoTable Test Case
 */
class TesoreriaPagoTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TesoreriaPagoTable
     */
    public $TesoreriaPago;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.TesoreriaPago'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('TesoreriaPago') ? [] : ['className' => TesoreriaPagoTable::class];
        $this->TesoreriaPago = TableRegistry::getTableLocator()->get('TesoreriaPago', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TesoreriaPago);

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
