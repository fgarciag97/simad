<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MrrhhRequisicionServiciosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MrrhhRequisicionServiciosTable Test Case
 */
class MrrhhRequisicionServiciosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MrrhhRequisicionServiciosTable
     */
    public $MrrhhRequisicionServicios;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.MrrhhRequisicionServicios'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MrrhhRequisicionServicios') ? [] : ['className' => MrrhhRequisicionServiciosTable::class];
        $this->MrrhhRequisicionServicios = TableRegistry::getTableLocator()->get('MrrhhRequisicionServicios', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MrrhhRequisicionServicios);

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
