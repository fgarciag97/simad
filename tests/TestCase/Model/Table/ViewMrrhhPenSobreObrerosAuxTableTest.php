<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ViewMrrhhPenSobreObrerosAuxTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ViewMrrhhPenSobreObrerosAuxTable Test Case
 */
class ViewMrrhhPenSobreObrerosAuxTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ViewMrrhhPenSobreObrerosAuxTable
     */
    public $ViewMrrhhPenSobreObrerosAux;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ViewMrrhhPenSobreObrerosAux'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ViewMrrhhPenSobreObrerosAux') ? [] : ['className' => ViewMrrhhPenSobreObrerosAuxTable::class];
        $this->ViewMrrhhPenSobreObrerosAux = TableRegistry::getTableLocator()->get('ViewMrrhhPenSobreObrerosAux', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ViewMrrhhPenSobreObrerosAux);

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
