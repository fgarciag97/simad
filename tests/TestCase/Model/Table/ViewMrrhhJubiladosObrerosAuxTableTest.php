<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ViewMrrhhJubiladosObrerosAuxTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ViewMrrhhJubiladosObrerosAuxTable Test Case
 */
class ViewMrrhhJubiladosObrerosAuxTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ViewMrrhhJubiladosObrerosAuxTable
     */
    public $ViewMrrhhJubiladosObrerosAux;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ViewMrrhhJubiladosObrerosAux'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ViewMrrhhJubiladosObrerosAux') ? [] : ['className' => ViewMrrhhJubiladosObrerosAuxTable::class];
        $this->ViewMrrhhJubiladosObrerosAux = TableRegistry::getTableLocator()->get('ViewMrrhhJubiladosObrerosAux', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ViewMrrhhJubiladosObrerosAux);

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
