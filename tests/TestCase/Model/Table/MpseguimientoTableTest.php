<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MpSeguimientoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MpSeguimientoTable Test Case
 */
class MpSeguimientoTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MpSeguimientoTable
     */
    public $MpSeguimiento;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.MpSeguimiento'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MpSeguimiento') ? [] : ['className' => MpSeguimientoTable::class];
        $this->MpSeguimiento = TableRegistry::getTableLocator()->get('MpSeguimiento', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MpSeguimiento);

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
