<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ViewMrrhhPenEspObrerosAuxTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ViewMrrhhPenEspObrerosAuxTable Test Case
 */
class ViewMrrhhPenEspObrerosAuxTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ViewMrrhhPenEspObrerosAuxTable
     */
    public $ViewMrrhhPenEspObrerosAux;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ViewMrrhhPenEspObrerosAux'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ViewMrrhhPenEspObrerosAux') ? [] : ['className' => ViewMrrhhPenEspObrerosAuxTable::class];
        $this->ViewMrrhhPenEspObrerosAux = TableRegistry::getTableLocator()->get('ViewMrrhhPenEspObrerosAux', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ViewMrrhhPenEspObrerosAux);

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
