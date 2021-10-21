<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ViewMrrhhHistoricoObrerosNoPTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ViewMrrhhHistoricoObrerosNoPTable Test Case
 */
class ViewMrrhhHistoricoObrerosNoPTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ViewMrrhhHistoricoObrerosNoPTable
     */
    public $ViewMrrhhHistoricoObrerosNoP;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ViewMrrhhHistoricoObrerosNoP'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ViewMrrhhHistoricoObrerosNoP') ? [] : ['className' => ViewMrrhhHistoricoObrerosNoPTable::class];
        $this->ViewMrrhhHistoricoObrerosNoP = TableRegistry::getTableLocator()->get('ViewMrrhhHistoricoObrerosNoP', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ViewMrrhhHistoricoObrerosNoP);

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
