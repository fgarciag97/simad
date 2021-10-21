<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MrrhhRequisicionServiciosPartidasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MrrhhRequisicionServiciosPartidasTable Test Case
 */
class MrrhhRequisicionServiciosPartidasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MrrhhRequisicionServiciosPartidasTable
     */
    public $MrrhhRequisicionServiciosPartidas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.MrrhhRequisicionServiciosPartidas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MrrhhRequisicionServiciosPartidas') ? [] : ['className' => MrrhhRequisicionServiciosPartidasTable::class];
        $this->MrrhhRequisicionServiciosPartidas = TableRegistry::getTableLocator()->get('MrrhhRequisicionServiciosPartidas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MrrhhRequisicionServiciosPartidas);

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
