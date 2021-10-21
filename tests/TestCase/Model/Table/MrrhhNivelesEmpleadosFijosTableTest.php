<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MrrhhNivelesEmpleadosFijosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MrrhhNivelesEmpleadosFijosTable Test Case
 */
class MrrhhNivelesEmpleadosFijosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MrrhhNivelesEmpleadosFijosTable
     */
    public $MrrhhNivelesEmpleadosFijos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.MrrhhNivelesEmpleadosFijos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MrrhhNivelesEmpleadosFijos') ? [] : ['className' => MrrhhNivelesEmpleadosFijosTable::class];
        $this->MrrhhNivelesEmpleadosFijos = TableRegistry::getTableLocator()->get('MrrhhNivelesEmpleadosFijos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MrrhhNivelesEmpleadosFijos);

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
