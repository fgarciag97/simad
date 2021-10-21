<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ViewMrrhhComisionServicioAuxTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ViewMrrhhComisionServicioAuxTable Test Case
 */
class ViewMrrhhComisionServicioAuxTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ViewMrrhhComisionServicioAuxTable
     */
    public $ViewMrrhhComisionServicioAux;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ViewMrrhhComisionServicioAux'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ViewMrrhhComisionServicioAux') ? [] : ['className' => ViewMrrhhComisionServicioAuxTable::class];
        $this->ViewMrrhhComisionServicioAux = TableRegistry::getTableLocator()->get('ViewMrrhhComisionServicioAux', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ViewMrrhhComisionServicioAux);

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
