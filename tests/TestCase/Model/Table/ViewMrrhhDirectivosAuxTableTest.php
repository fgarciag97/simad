<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ViewMrrhhDirectivosAuxTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ViewMrrhhDirectivosAuxTable Test Case
 */
class ViewMrrhhDirectivosAuxTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ViewMrrhhDirectivosAuxTable
     */
    public $ViewMrrhhDirectivosAux;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ViewMrrhhDirectivosAux'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ViewMrrhhDirectivosAux') ? [] : ['className' => ViewMrrhhDirectivosAuxTable::class];
        $this->ViewMrrhhDirectivosAux = TableRegistry::getTableLocator()->get('ViewMrrhhDirectivosAux', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ViewMrrhhDirectivosAux);

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
